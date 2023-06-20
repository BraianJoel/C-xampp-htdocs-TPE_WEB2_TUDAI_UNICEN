<?php
class prendasModel{
    private $db;

    public function __construct() {
         $this->db = new PDO ('mysql:host=localhost;'
         .'dbname=db_prendas;charset=utf8'
         , 'root', '');
    }
    public function getPrendasConPartes() {
        $sentencia=$this->db->prepare("SELECT prendas.*, partes.nombre_categoria as parte FROM prendas JOIN partes ON prendas.prendas_ID = partes.ID_prendas");
        $sentencia->execute();

        $prendas= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $prendas;
    }
    //obtener dato por ID
    public function getPrendasById($id){
        $sentencia=$this->db->prepare("SELECT*FROM prendas WHERE (id)=?");
        $sentencia->execute([$id]);

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    //insertar datos
    public function insertPrenda($img, $prenda, $descripcion, $precio ){
        $sentencia=$this->db->prepare("INSERT INTO prendas (img, prenda, descripcion, precio) VALUES(?,?,?,?)");
        $sentencia->execute([$img, $prenda, $descripcion, $precio]);
    }
        //modificar datos
    public function updatePrenda($id, $img, $prenda, $descripcion, $precio){
        $sentencia=$this->db->prepare("UPDATE prendas SET img=? prenda=? descripcion=? precio=? WHERE=?");
        $sentencia->execute([$id, $img, $prenda, $descripcion, $precio]);
    }
    //eliminar dato
    public function deletePrenda($id){
        $sentencia=$this->db->prepare("DELETE FROM prendas WHERE (id)=?");
        $sentencia->execute([$id]);
    }
    
    /*function getAllprendas(){
        $sentencia=$this->db->prepare('SELECT * FROM prendas');
        $sentencia->execute();

        $productos = $sentencia->fetchAll(PDO:: FETCH_OBJ);

        return $productos;
    

    }
    function getDetalleByID($id){
        $sentencia=$this->db->prepare('SELECT * FROM registros WHERE (ID)=?');
        $sentencia->execute([$id]);

        $descripcion = $sentencia->fetch(PDO:: FETCH_OBJ);

        return $descripcion;
    

    /* funcion para tener un elemento por ID
    }*/
  
}
?>


<!--<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delfuslimpieza</title>
    </head>
    <body>
        <h1>Delfuslimpieza</h1>
        <form class="formulario">
            <label>Producto: <input type= "text" id="producto" name="producto"> </label>
            <select>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </form>
        
    </body>
    </html>-->
