<?php 
namespace Controllers;

use MVC\Router;

class RegistradosControllers{

    public static function index (Router $router){
        $log = is_Admin();
        if(!$log){
            header('Location: /');
        }
        $router->render("admin/registrados/index",[
            "titulo" => "Usuarios Registrados"
        ]);
    }
}

?>