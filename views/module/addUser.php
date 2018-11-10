                    <div class="container-fluid">
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Registro Usuario</h4>
                                    </div>
                                  <?php
                                  if(isset($_GET["action"])){
                                    if($_GET["action"] == "okU"){
                                  ?>
                                    <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                      Usuario registrado con éxito.
                                    </div>
                                    <?php
                                    } else
                                  ?>
                                  <?php
                                    if($_GET["action"] == "NOkU"){
                                  ?>
                                    <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                      Error al registrar.
                                    </div>
                                    <?php
                                    }
                                  }
                                  ?>
                                    <div class="widget-body">
                                        <form class="needs-validation" method="POST" novalidate>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre *</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" placeholder="Introduzca Nombre" name="nombreReg" required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Contraseña *</label>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" placeholder="Introduzca una contraseña" name="contraReg" required>
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
    $registro -> registroUserController();
?>