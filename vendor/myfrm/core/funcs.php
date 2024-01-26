<?php

function dump($data)
{
    var_dump($data);
}

function dd($data)
{
    dump($data);
    die();
}

function abort($code = 404)
{
    http_response_code($code);
    require VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function load(array $data, $fillable = [])
{
    $validatedData = [];

    foreach ($data as $key => $value) {
        if (in_array($key, $fillable)) {
            $validatedData[$key] = trim($value);
        }
    }

    return $validatedData;
}

function h($text)
{
    return htmlspecialchars($text, ENT_QUOTES);
}

function oldField($fieldname)
{
    return isset($_POST[$fieldname]) ? htmlspecialchars($_POST[$fieldname], ENT_QUOTES) : '';
}

function showError($errors, $fieldName)
{
    if (isset($errors[$fieldName])) {
        echo '<div class="invalid-feedback d-block">';
        echo $errors[$fieldName];
        echo '</div>';
    }
}

function redirect($url = '')
{
    if ($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? 
        $_SERVER['HTTP_REFERER'] :
        PATH;
    }
    header("Location: {$redirect}");
    exit;
}