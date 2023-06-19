<?php
    require_once('models/prendasModel.php');
    require_once('views/prendasView.php');
    require_once('helpers/prendasAuth.php');


    Class prendasController {
        private $model;
        private $view;
        private $outhHelper;

        public function __construct() {
            $this->model=new prendasModel();
            $this->view=new prendasView();
            $this->outhHelper= new outhHelper();
        
        }
        public function showAll() {
            $prendas=$this->model->getPrendasConPartes();
            $this->view->showPrendas($prendas);
        }
       
                
        /* resolver dos funciones: lista de inicio(tiene que obtener datos de BBDD)->pasar esa informacion una funcion del "productvista" 
        crear una funcion que reciba un elemento(Id o lo que sea) haga peticiones a la BBDD y muestre la informacion especifica de ese datos.
        }
        function showDescripcion($id){
            $detalle=$this->model->getDetalleByID($id);
            $this->view->showDescripcion($detalle);
        }*/
    }
        
?>