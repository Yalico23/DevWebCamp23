<?php 
namespace Controllers;

use MVC\Router;

class RegalosControllers{

    public static function index (Router $router){
        is_Admin();
        $router->render("admin/regalos/index",[
            "titulo" => "Regalos"
        ]);
    }
}

?>