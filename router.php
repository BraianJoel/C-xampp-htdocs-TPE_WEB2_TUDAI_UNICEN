<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once('controllers/prendasController.php');
    require_once('controllers/loginController.php');

    
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    else {
        $action = 'login'; // acción por defecto
    }
    
    $params = explode('/', $action); /* definir variable accion con lo que yo quiero*/

    switch ($params[0]) {
        case 'login':
            $controller=new loginControl();
            $controller->showLogin();
            break;
        case 'verificar':
            $controller= new loginControl();
            $controller->verificar($params[1]);
            break;
        case 'prendas':
            $controller=new prendasController();
            $controller->showAll();
            /*switch($params[1]) {S
                case 'detalle':
                    $controller=new prendasController();
                    $controller->showDescripcion($params[2]);
                    break;
            }*/
            break;
        /*case 'prenda':
             $controller=new prendasController();
             $controller-> showObtener($params[1]);
             break;*/
        case 'insertar':
            $controller=new prendasController();
            $controller->showInsertar();
            break;
        case 'addPrenda':
            $controller=new prendasController();
            $controller-> Insertar();
            break;
        /*case 'modificar': 
            $controller=new prendasController();
            $controller->showModificar($id, $img, $prenda, $descripcion, $precio);
            break;
        case 'eliminar':
            $controller=new prendasController();
            $controller->showDelete($params[1]);
            break;
        //default
            # code...
            //break;*/
    }


?>