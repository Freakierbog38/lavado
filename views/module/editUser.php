<?php
//Obtiene el id enviado por el metodo GET
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
//Consulta la base de datos los usuarios
$registro = Datos::oneFromTable($id, 'usuarios');
?>
                      <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Forms Validation</h2>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Editar Usuario</h4>
                                    </div>
                                    <div class="widget-body">
                                      <?php
                                        if(isset($_GET["action"])){
                                          if($_GET["action"] == "NOkUE"){
                                      ?>
                                        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                          Error al editar.
                                        </div>
                                        <?php
                                        }
                                      }
                                      ?>
                                        <form class="needs-validation" method="POST" novalidate>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php echo $registro["nombre"] ?>" name="nombreEdi">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Contraseña *</label>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" name="contraEdi" value="<?php echo $registro["password"] ?>" required>
                                                    <div class="invalid-feedback">
                                                        Introduzca contraseña
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Registrar</button>
                                                <button class="btn btn-shadow" type="reset">Borrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->

<?php
    //Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
    $registro = new MvcController();

    //se invoca la funcion registrousuariocontroller de la clase mvccontroller;
    $registro -> editUserController($id);

?>