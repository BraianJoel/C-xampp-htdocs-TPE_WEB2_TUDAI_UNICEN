<?php
    require_once('models/prendasModel.php');
    require_once('views/prendasView.php');
    require_once('helpers/prendasAuth.php');


    Class prendasController {
        private $model;
        private $view;
       
        public function __construct() {
            $this->model=new prendasModel();
            $this->view=new prendasView();
            
        
        }
        public function showAll() {
            $prendas=$this->model->getPrendasConPartes();
            $this->view->showPrendas($prendas);
        }
        public function showObtener($id) {
            $obtener=$this->model->getPrendasById($id);
            if(!empty($obtener)) {
                $this->view->showGetPrendabyId($obtener);
                header("location: ". BASE_URL ."header");
            }

        }  
        public function showInsertar($img, $prenda, $descripcion, $precio ){
            $insert=$this->model->insertPrenda($img, $prenda, $descripcion, $precio );
            if(!empty($insert)) {
                $this->view->showInserPrenda($insert);
                header("location: ". BASE_URL ."header");
            }
        }
        public function showModificar($id, $img, $prenda, $descripcion, $precio){
            $modificar=$this->model->updatePrenda($id, $img, $prenda, $descripcion, $precio);
            if(!empty($modificar)) {
                $this->view->showModificarPrenda($modificar);
                header("location: ". BASE_URL ."header");
            }
        }
        public function showDelete($id){
            $eliminar=$this->model->deletePrenda($id);
            if(!empty($eliminar)) {
                $this->view-> showEliminarPrenda($eliminar);
                header("location: ". BASE_URL ."header");
            }
        }
    }
        /* resolver dos funciones: lista de inicio(tiene que obtener datos de BBDD)->pasar esa informacion una funcion del "productvista" 
        crear una funcion que reciba un elemento(Id o lo que sea) haga peticiones a la BBDD y muestre la informacion especifica de ese datos.
        }
        function showDescripcion($id){
            $detalle=$this->model->getDetalleByID($id);
            $this->view->showDescripcion($detalle);
        }*/
    
        
?>