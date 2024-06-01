<?php 
namespace Controllers;

use Model\Categoria;
use Model\Dia;
use Model\Evento;
use Model\Hora;
use Model\Ponente;
use MVC\Router;

class PaginasControllers {

    public static function index(Router $router){

        $router->render("web/index",[
            "titulo" => "Inicio"
        ]);
    }
    
    public static function evento(Router $router){

        $router->render("web/evento",[
            "titulo" => "Sobre WebDevCamp"
        ]);
    }

    public static function paquetes(Router $router){

        $router->render("web/paquetes",[
            "titulo" => "Paquetes WebDevCamp"
        ]);
    }

    public static function conferencias(Router $router){

        $eventos = Evento::ordernar('Hora_id','ASC');
        $eventos_formateados = [ //en caso de que no tenga agendado en un dia para que este inicializado
            'conferencias_L' => [],
            'conferencias_M' => [],
            'conferencias_Mi' => [],
            'workshops_L' => [],
            'workshops_M' => [],
            'workshops_Mi' => [],
        ];
        foreach($eventos as $evento){
            $evento->Categoria = Categoria::find($evento->Categoria_id);
            $evento->Dia = Dia::find($evento->Dia_id);
            $evento->Hora = Hora::find($evento->Hora_id);
            $evento->Ponente = Ponente::find($evento->Ponente_id);

            if($evento->Dia_id === '3' & $evento->Categoria_id === '3'){
                $eventos_formateados['conferencias_L'][] = $evento;
            }
            if($evento->Dia_id === '4' & $evento->Categoria_id === '3'){
                $eventos_formateados['conferencias_M'][] = $evento;
            }
            if($evento->Dia_id === '5' & $evento->Categoria_id === '3'){
                $eventos_formateados['conferencias_Mi'][] = $evento;
            }
            if($evento->Dia_id === '3' & $evento->Categoria_id === '4'){
                $eventos_formateados['workshops_L'][] = $evento;
            }
            if($evento->Dia_id === '4' & $evento->Categoria_id === '4'){
                $eventos_formateados['workshops_M'][] = $evento;
            }
            if($evento->Dia_id === '5' & $evento->Categoria_id === '4'){
                $eventos_formateados['workshops_Mi'][] = $evento;
            }
        }

        $router->render("web/conferencias",[
            "titulo" => "Conferencias & Workshops",
            "eventos" => $eventos_formateados
        ]);
    }

    public static function pase(Router $router){

        

        $router->render("web/pase",[
            "titulo" => "Registro de Pase"
        ]);
    }
    
}
?>