<?php

function view($viewName, $data = [], $extra = []) {
    extract($data);
    return require_once 'views/' . $viewName . '.view.php';
}

function redirect($path) {
    header("Location:/" .$path);
}

function unauthorized() {
    echo '401 Unauthorized';
}