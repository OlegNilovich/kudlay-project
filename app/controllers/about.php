<?php

$title = 'My Blog :: About';

$post = 'Impedit accusantium doloribus quasi nam repellat vel inventui earum ullam doloremque obcaecati, commodi debitis sed aperiam esse cumque distinctio cupiditate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit accusantium doloribus quasi nam repellat vel inventore velit sequi earum ullam doloremque obcaecati, commodi debitis sed aperiam esse cumque distinctio cupiditate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit accusantium doloribus quasi nam repellat vel inventore velit sequi earum ullam doloremque obcaecati, commodi debitis sed aperiam esse cumque distinctio cupiditate!';

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/about.tpl.php';