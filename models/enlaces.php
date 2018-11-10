<?php

	class Paginas{


		public function enlacesPaginasModel($enlacesModel){
			if($enlacesModel == "principal" || $enlacesModel == "acercaDe"
				|| $enlacesModel == "comollegar" || $enlacesModel == "resetContrasena" || $enlacesModel == "horario" 
				|| $enlacesModel == "addUser" || $enlacesModel == "editUser" || $enlacesModel == "listUser" || $enlacesModel == "addPromo"
        || $enlacesModel == "editPromo" || $enlacesModel == "listPromo" || $enlacesModel == "erasePromo" || $enlacesModel == "eraseUser" ){

				$module = "views/module/" . $enlacesModel .".php";
			}
			else if ($enlacesModel == "index") {
				$module = "views/module/inicio.php";
			}
      else if ($enlacesModel == "okP") {
				$module = "views/module/addPromo.php";
			}
      else if ($enlacesModel == "NOkP") {
				$module = "views/module/addPromo.php";
			}
			else if ($enlacesModel == "okU") {
				$module = "views/module/addUser.php";
			}
      else if ($enlacesModel == "NOkU") {
				$module = "views/module/addUser.php";
			}
      	else if ($enlacesModel == "NOkUE") {
				$module = "views/module/editUser.php";
			}
      else if ($enlacesModel == "NOkPE") {
				$module = "views/module/editPromo.php";
			}
      
      

			return $module;
 
 	
		}
	}



?>