<?php 
namespace Controllers;

use MVC\Router;

class RegistradosControllers{

    public static function index (Router $router){
        is_Admin();
        $router->render("admin/registrados/index",[
            "titulo" => "Usuarios Registrados"
        ]);
    }
}

?>