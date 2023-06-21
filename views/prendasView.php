<?php
    require_once('./libs/Smarty.class.php');
   


    Class prendasView  {
        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty(); // inicializo Smarty
        }
    
        function showPrendas($prendas) {
            // asigno variables al tpl smarty
            $this->smarty->assign('titulo', "Tienda de ropa vintaje - unisex"); 
            $this->smarty->assign('prendas', $prendas);
            // mostrar el tpl
            $this->smarty->display('Templates/prendas.tpl');
        }
        function showGetPrendabyId($obtener) { 
            $this->smarty->assign('prendas', $obtener);
            $this->smarty->assign('BASE_URL', BASE_URL);
            
            $this->smarty->display('Templates/.tpl');
        }
        function showInsertPrenda(){
            $this->smarty->assign('titulo', 'Insertar prenda');
            $this->smarty->display('Templates/addPrenda.tpl');
        }
        function showModificarPrenda($modificar){
            $this->smarty->assign('prendas', $modificar);
            $this->smarty->assign('BASE_URL', BASE_URL);
            
            $this->smarty->display('Templates/header.tpl');
        }
        function showEliminarPrenda($eliminar){
            $this->smarty->assign('prendas', $eliminar);
            $this->smarty->assign('BASE_URL', BASE_URL);
            
            $this->smarty->display('Templates/header.tpl');
        }
    }
         /*clase vista el cosntructor y demas se realizaran
        dos funciones: lista con html (lista de objetos) y armar un html 
        y muestra toda la info mediantes ancor mediante links de listas desordenadas y 
        la segunda la ptra vista donde seve el detalle producto descripcion y precio. CTR +D (ME MARCA DETALLE DE TODAS LAS PALABRAS IGUALES*/



    
    
    
?>
