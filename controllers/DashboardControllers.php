<?php 
namespace Controllers;

use MVC\Router;

class DashboardControllers{

    public static function index (Router $router){
        $log = is_Admin();
        if(!$log){
            header('Location: /');
        }
        
        $router->render("admin/dashboard/index",[
            "titulo" => "Panel de Administración"
        ]);
    }
}

?>