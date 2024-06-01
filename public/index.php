<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiControllers;
use MVC\Router;
use Controllers\AuthControllers;
use Controllers\EventosControllers;
use Controllers\PonentesControllers;
use Controllers\DashboardControllers;
use Controllers\PaginasControllers;
use Controllers\RegalosControllers;
use Controllers\RegistradosControllers;

$router = new Router();

//Login
$router->get("/login", [AuthControllers::class,'login']);
$router->post("/login", [AuthControllers::class,'login']);
$router->post("/logout", [AuthControllers::class, "logout"]);
$router->get("/registro", [AuthControllers::class, 'registro']);
$router->post("/registro", [AuthControllers::class, 'registro']);
$router->get("/mensaje", [AuthControllers::class, "mensaje"]);
$router->post("/mensaje", [AuthControllers::class, "mensaje"]);
$router->get("/olvide", [AuthControllers::class, "olvide"]);
$router->post("/olvide", [AuthControllers::class, "olvide"]);
$router->get("/recuperar", [AuthControllers::class, "recuperar"]);
$router->post("/recuperar", [AuthControllers::class, "recuperar"]);
$router->get("/confirmar",[AuthControllers::class, "confirmar"]);

// Area de Administracion
$router->get("/admin/dashboard",[DashboardControllers::class, "index"]);

//Administracion__Ponentes
$router->get("/admin/ponentes",[PonentesControllers::class, "index"]);
$router->get("/admin/ponentes/crear",[PonentesControllers::class, "crear"]);
$router->post("/admin/ponentes/crear",[PonentesControllers::class, "crear"]);
$router->get("/admin/ponentes/editar",[PonentesControllers::class, "editar"]);
$router->post("/admin/ponentes/editar",[PonentesControllers::class, "editar"]);
$router->post("/admin/ponentes/eliminar",[PonentesControllers::class, "eliminar"]);

//Administracion__Eventos
$router->get("/admin/eventos",[EventosControllers::class, "index"]);
$router->get("/admin/eventos/crear",[EventosControllers::class, "crear"]);
$router->post("/admin/eventos/crear",[EventosControllers::class, "crear"]);
$router->get("/admin/eventos/editar",[EventosControllers::class, "editar"]);
$router->post("/admin/eventos/editar",[EventosControllers::class, "editar"]);
$router->post("/admin/eventos/eliminar",[EventosControllers::class, "eliminar"]);

//Administracion__Registrados
$router->get("/admin/registrados",[RegistradosControllers::class, "index"]);

//Administracion__Regalos
$router->get("/admin/regalos",[RegalosControllers::class, "index"]);
//Api 
$router->get("/api/eventos-horario",[ApiControllers::class, "horarios"]);
$router->get("/api/ponentes",[ApiControllers::class, "ponentes"]);
$router->get("/api/ponente",[ApiControllers::class, "ponente"]);

//Area Publica Usuarios
$router->get("/",[PaginasControllers::class, "index"]);
$router->get("/devwebcamp",[PaginasControllers::class, "evento"]);
$router->get("/paquetes",[PaginasControllers::class, "paquetes"]);
$router->get("/workshops-conferencias",[PaginasControllers::class, "conferencias"]);
$router->get("/registro-inicio",[PaginasControllers::class, "pase"]);

$router->comprobarRutas();