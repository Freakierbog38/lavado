<?php

require_once("conexion.php");

class Datos extends Conexion{
 
 	#Registro de Usuario
 	public function registroUserModel($datosModel, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, password) VALUES(:nombre,:contra) ");
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":nombre", $datosModel["nombre"] , PDO::PARAM_STR);
    $stmt->bindParam(":contra", $datosModel["password"] , PDO::PARAM_STR);
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }else{
      return "error";
    }
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Registro de Usuario
 	public function registroPromoModel($datosModel, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(premio, visitas, inicio, fin) 
    VALUES(:premio,:visi,:fechI,:fechF) ");
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":premio", $datosModel["premio"] , PDO::PARAM_STR);
    $stmt->bindParam(":visi", $datosModel["visitas"] , PDO::PARAM_STR);
    $stmt->bindParam(":fechI", $datosModel["fecha_ini"] , PDO::PARAM_STR);
    $stmt->bindParam(":fechF", $datosModel["fecha_fin"] , PDO::PARAM_STR);
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }else{
      return "error";
    }
    //Se cierra la conexión
    $stmt->close();
  }
  
  	#Editar Usuario
 	public function editUserModel($datosModel, $tabla){
    	//Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, password=:contra WHERE id=:id");
    //Se reemplazan las palabras clave por el contenido real
    $stmt->bindParam(":nombre", $datosModel["nombre"] , PDO::PARAM_STR);
    $stmt->bindParam(":contra", $datosModel["password"] , PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"] , PDO::PARAM_STR);
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Envia todos los registros de una tabla
  public function allFromTable($tabla){
    //Se llama a la Conexion para preparar la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    if($stmt->execute()){
      return $stmt;
    }
    else{
      return [];
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
  #Envia un registro de una tabla
  public function oneFromTable($id, $tabla){
    //Se llama a la Conexion para preparar la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = $id");
    if($stmt->execute()){
      return $stmt->fetch();
    }
    else{
      return [];
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
  
  #Editar Promocion
 	public function editPromoModel($datosModel, $tabla){
    	//Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET premio=:premio, visitas=:visitas, inicio=:inicio , fin=:fin  
                                          WHERE id=:id");
    //Se reemplazan las palabras clave por el contenido real
    $stmt->bindParam(":premio", $datosModel["premio"] , PDO::PARAM_STR);
    $stmt->bindParam(":visitas", $datosModel["visitas"] , PDO::PARAM_STR);
    $stmt->bindParam(":inicio", $datosModel["inicio"] , PDO::PARAM_STR);
    $stmt->bindParam(":fin", $datosModel["fin"] , PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"] , PDO::PARAM_STR);
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Borrar promocion
  public function deletePromoModel($id, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Borrar usuario
  public function deleteUserModel($id, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    //Se cierra la conexión
    $stmt->close();
  }
  

}