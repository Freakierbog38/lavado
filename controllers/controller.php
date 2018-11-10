<?php

class MvcController{
  
  //Llamar a la plantilla
  public function pagina(){
    //Include se utiliza para invocar el arhivo que contiene el codigo HTML
    include "views/template.php";
  }

	

  //Interacción con el usuario
  public function enlacesPaginasController(){
    //Trabajar con los enlaces de las páginas
    //Validamos si la variable "action" viene vacia, es decir cuando se abre la pagina por primera vez se debe cargar la vista index.php

    if(isset($_GET['action'])){
      //guardar el valor de la variable action en views/modules/navegacion.php en el cual se recibe mediante el metodo get esa variable
      $enlaces = $_GET['action'];
    }else{
      //Si viene vacio inicializo con index
      $enlaces = "index";
    }
    //Mostrar los archivos de los enlaces de cada una de las secciones: inicio, nosotros, etc.
    //Para esto hay que mandar al modelo para que haga dicho proceso y muestre la informacions

    $respuesta = Paginas::enlacesPaginasModel($enlaces);

    include $respuesta;
  }


  public function registroUserController(){
    if(isset($_POST["nombreReg"])){
      //Recibe todas las variables mediante POST y las asigna a un array asociado
      $datosController = array("nombre" => $_POST["nombreReg"],
                              "password" => $_POST["contraReg"]);
            
      //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
      $respuesta = Datos::registroUserModel($datosController, "usuarios");

      //Se imprime la respuesta en la vista
      if($respuesta == "success"){
        header("location:index.php?action=okU");
      }
      else{
        header("location:index.php?action=NOkU");
      }
    
    }
    
  }
  
  public function registroPromoController(){
    if(isset($_POST["premio"])){
      $fechaI = $_POST["anio"] . "-" . $_POST["mes"] . "-" . $_POST["dia"];
      $fechaF = $_POST["anio2"] . "-" . $_POST["mes2"] . "-" . $_POST["dia2"];
      //Recibe todas las variables mediante POST y las asigna a un array asociado
      $datosController = array("premio" => $_POST["premio"],
                              "visitas" => $_POST["visitas"],
                              "fecha_ini" => $fechaI,
                              "fecha_fin" => $fechaF);
            
      //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
      $respuesta = Datos::registroPromoModel($datosController, "promociones");

      //Se imprime la respuesta en la vista
      if($respuesta == "success"){
        header("location:index.php?action=okP");
      }
      else{
        header("location:index.php?action=NOkP");
      }
    
    }
    
  }

      
  public function editUserController($id){
    if(isset($_POST["nombreEdi"])){
      //Recibe todas las variables mediante POST y las asigna a un array asociado
      $datosController = array("id" => $id,
                              "nombre" => $_POST["nombreEdi"],
                              "password" => $_POST["contraEdi"]);
            
      //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
      $respuesta = Datos::editUserModel($datosController, "usuarios");
      //Se imprime la respuesta en la vista
      if($respuesta == "success"){
        header("location:index.php?action=listUser");
      }
      else{
        header("location:index.php?action=NOkUE&id=" . $id);
      }
    }
  }

   public function editPromoController($id){
    if(isset($_POST["premioEdi"])){
      $fechaI = $_POST["anio"] . "-" . $_POST["mes"] . "-" . $_POST["dia"];
      $fechaF = $_POST["anio2"] . "-" . $_POST["mes2"] . "-" . $_POST["dia2"];
      //Recibe todas las variables mediante POST y las asigna a un array asociado
      $datosController = array("id" => $id,
                              "premio" => $_POST["premioEdi"],
                              "visitas" => $_POST["visitasEdi"],
                              "inicio" => $fechaI,
                              "fin" => $fechaF);
            
      //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
      $respuesta = Datos::editPromoModel($datosController, "promociones");
      //Se imprime la respuesta en la vista
      if($respuesta == "success"){
        header("location:index.php?action=listPromo");
      }
      else{
        header("location:index.php?action=NOkPE&id=" . $id);
      }
    }
  }
  
  public function deletePromoController($id){
    $respuesta = Datos::deletePromoModel($id, "promociones");
    //Se imprime la respuesta en la vista
      if($respuesta == "success"){
        header("location:index.php?action=listPromo");
      }
      else{
        header("location:index.php?action=listaPromo");
      }
  }
  
  public function deleteUserController($id){
    $respuesta = Datos::deletePromoModel($id, "usuarios");
    //Se imprime la respuesta en la vista
      if($respuesta == "success"){
        header("location:index.php?action=listUser");
      }
      else{
        header("location:index.php?action=listaUser");
      }
  }
}

?>