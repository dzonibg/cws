<?php

function view($viewName, $data = []) {
    extract($data);
    return require_once 'views/' . $viewName . '.view.php';
}

function redirect($path) {
    header("Location:/" .$path);
}