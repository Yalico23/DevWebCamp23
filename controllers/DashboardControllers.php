<?php 
namespace Controllers;

use MVC\Router;

class DashboardControllers{

    public static function index (Router $router){
        is_Admin();
        $router->render("admin/dashboard/index",[
            "titulo" => "Panel de Administración"
        ]);
    }
}

?>