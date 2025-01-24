<?php

function loadPages() {
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if (!file_exists($page) || strpos(realpath($page), realpath('pages')) !== 0) {
        return 'pages/404.php';
    }

    return $page;
}