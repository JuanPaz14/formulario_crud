<?php
//require_once("./config/config.php");
require_once("./controller/formularioController.php");
if(isset($_GET['m'])):    
    if(method_exists("formularioController",$_GET['m'])):
        formularioController::{$_GET['m']}();
    endif;
else:
    formularioController::index();
endif;


