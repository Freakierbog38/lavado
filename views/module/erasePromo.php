<?php
if(isset($_GET["id"])){
  $id = $_GET["id"];
  //Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
  $registro = new MvcController();

  //se invoca la funcion registrousuariocontroller de la clase mvccontroller;
  $registro -> deletePromoController($id);
}