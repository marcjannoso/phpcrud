<?php

if (!empty($_GET['action'])) {
    $action = $_GET['action'];

    switch($action) {
        case "delete":
            require_once 'delete.php';
            break;
        case "update_form":
            require_once 'update_form.php';
            break;
        case "update":
            require_once 'update.php';
            break;
        case "create_form":
            require_once 'create_form.php';
            break;
        case "create":
            require_once 'create.php';
            break;
        case 'list':
            require_once 'list.php';
            break;
    }
} else {
    require_once 'list.php';
}




