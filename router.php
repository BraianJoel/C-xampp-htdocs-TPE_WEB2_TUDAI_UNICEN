<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    require_once('controllers/prendasController.php');
    require_once('controllers/loginController.php');

    
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    else {
        $action = 'login';// acción por defecto
    }
    
    $params = explode('/', $action); /* definir variable accion con lo que yo quiero*/

    switch ($params[0]) {
        case 'login':
            $controller=new loginControl();
            $controller->showLogin();
            break;
        case 'prendas':
            $controller=new prendasController();
            $controller->showAll();
            /*switch($params[1]) {
                case 'detalle':
                    $controller=new prendasController();
                    $controller->showDescripcion($params[2]);
                    break;
            }*/
            break;
        default:
            # code...
            break;
    }


?>