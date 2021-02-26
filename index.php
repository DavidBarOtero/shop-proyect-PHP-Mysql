<?php
session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'config/connection.php';
require_once 'views/layout/header.php';
require_once 'views/layout/aside.php';
require_once'helpers/Utils.php';


function show_error()
{

    $error = new errorController();
    $error->index();
}

if (isset($_GET['controller'])) {

    $name_controller = $_GET['controller'] . 'Controller';

} else if (!isset($_GET['controller']) && !isset($_GET['action'])) {

    $name_controller = DEFAULT_CONTROLLER;

} else {

    show_error();

}

if (class_exists($name_controller)) {

    $controller = new $name_controller;
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();

    } else if (!isset($_GET['controller']) && !isset($_GET['action'])) {

        $default = DEFAULT_ACTION;
        $controller->$default();

    } else {
        show_error();

    }

} else {
    show_error();
}
