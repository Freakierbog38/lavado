        <!-- Begin Container -->
        <div class="container-fluid h-100 overflow-y">
            <div class="row flex-row h-100">
                <div class="col-12 my-auto">
                    <div class="password-form mx-auto">
                        <div class="logo-centered">
                            <a href="db-default.html">
                                <img src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                        <h3>Contraseña</h3>
                        <form>
                            <div class="group material-input">
                              <input type="email" required name="contraNv">
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label>Nueva Contraseña</label>
                            </div>
                        </form>
                        <div class="button text-center">
                           <button class="btn btn-gradient-01" type="submit">Guardar</button>
                        </div>
                        
                    </div>        
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>  
        <!-- End Container -->

<?php
  
    //Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
    $registro = new MvcController();

    //se invoca la funcion registrousuariocontroller de la clase mvccontroller;

?>