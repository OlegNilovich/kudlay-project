<?php

use myfrm\Validator;

/**
 * @var Db $db
 */

$errors = [];
$data = $_POST;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($data, $fillable);

    $validationRules = [
        'title' => ['required' => true, 'min' => 5, 'max' => 190],
        'excerpt' => ['required' => true, 'min' => 10, 'max' => 190],
        'content' => ['required' => true, 'min' => 10],
    ];
    
    $validator = new Validator();
    $validation = $validator->validate($data, $validationRules);

    if ($validation->hasErrors()) {
        var_dump($validation->getErrors());
    } else {
        echo 'Валидация прошла успешно' . '<br>';
    }

    // die; // ВРЕМЕННАЯ ОСТАНОВКА СКРИПТА ПЕРЕД ЗАПИСЬЮ ДАННЫХ В БАЗУ

    if (empty($errors)) {

        $result = $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data);

        if($result) {
            echo "Успешная запись в базу данных";
        } else {
            echo "Проблема записи в базу данных, проверьте код запроса";
        }

        // redirect('/');
    }
}

$title = "My Blog :: New Post";
require_once VIEWS . '/post-create.tpl.php';
