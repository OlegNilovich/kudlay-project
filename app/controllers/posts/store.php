<?php

use myfrm\Validator;

global $db;
/**
 * @var \myfrm\Db $db
 */

$errors = [];
$data = $_POST;

$fillable = ['title', 'excerpt', 'content'];
$data = load($data, $fillable);

// Fake data for testing
// $data = [
//     'title' => 'title 12345',
//     'excerpt' => 'excerpt 12345',
//     'content' => 'content 12345',
//     'email' => 'mail@mail.com',
//     'password' => '1234',
//     'repassword' => '1234',
// ];

$validationRules = [
    'title' => ['required' => true, 'min' => 5, 'max' => 190],
    'excerpt' => ['required' => true, 'min' => 10, 'max' => 190],
    'content' => ['required' => true, 'min' => 10],
    'email' => ['email' => true],
    'password' => ['required' => true, 'min' => 5],
    'repassword' => ['match' => 'password'],
];

$validator = new Validator();
$validation = $validator->validate($data, $validationRules);

// die; // ОСТАНОВКА СКРИПТА ПЕРЕД ЗАПИСЬЮ В БАЗУ ДАННЫХ

// Запись в базу данных
if (!$validation->hasErrors()) {
    $result = $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data);
    if ($result) {
        $_SESSION['success'] = "OK";
    } else {
        $_SESSION['error'] = "DB Error";
    }
    redirect('/');
} else {
    require VIEWS . '/posts/create.tpl.php';
}
