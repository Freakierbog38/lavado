<?php
// Inicia el buffer
ob_start();
//Cuando se redirecciona verificar si hay cabeceras cargadas
if (headers_sent()){ 
  //Si hay información se extrae
  $contenido = ob_get_contents();
  // Y después se libera
  ob_end_clean();
  //Para dar paso a la nueva información
}

//El index que muestra al usuario las salidas de la vistas y a traves de el se enviará las diferentes acciones del usuario al controlador

//Mostrar la plantilla al usurio (template.php) la cual se alojará en views

//Invocamos el modelo que se utilizará en todos los archivos
require_once('models/enlaces.php');
require_once('models/crud.php');
require_once('controllers/controller.php');

session_start();

//Para poder ver el template o plantilla, se hace una peticion mediante a un controlar
//creamos el objeto:
$mvc = new MvcController();

//Muestra la funcion "plantilla" que se encuentra en controllers/controller
//if($_SESSION){
	$mvc->pagina();
//}
//else(
//	header("Location: login.php")
//)

?>