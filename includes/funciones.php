<?php
define('CARPETA_SPEAKERS', $_SERVER['DOCUMENT_ROOT'] . '/img/speakers/'); 


function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function esUltimo (string $actual, string $proximo): bool{

    if ($actual !== $proximo) {
        return true;
    }else{
        return false;
    }
}

function is_Auth() : void{
    if (!isset($_SESSION['Login'])) {
        header('Location: /');
    }
}
function is_Admin() : void{
    if (!isset($_SESSION['Admin'])) {
        header('Location: /');
    }
}

function redireccionar(): void{

    if (isset($_SESSION['login']) && isset($_SESSION['Admin'])) {
        header("Location: /admin/dashboard");
    }elseif(isset($_SESSION['login'])){
        header("Location: /");
    }
}

function validarRedireccionar($URL)
{
    //validar la URL po ID valido
    $Id = $_GET['Id'];
    $Id = filter_var($Id, FILTER_VALIDATE_INT);

    if (!$Id) {
        header("Location: $URL");
    }

    return $Id;
}

function validarTipoContenido($tipo)
{
    $tipos = ['vendedor', 'propiedad'];
    return in_array($tipo, $tipos);
}

function pagina_Actual($path = '') {
    // Verifica si $_SERVER['PATH_INFO'] está definido y no es null
    $currentPath = $_SERVER['PATH_INFO'] ?? '';
    
    // Si $currentPath no es una cadena vacía, verifica si contiene $path
    if ($currentPath !== '') {
        return str_contains($currentPath, $path);
    }
    
    // Si $currentPath es una cadena vacía, simplemente retorna false
    return false;
}


function ExisteDato($Id , $URL){//verificar si existe del $_GET['Id']
    if (!$Id) {
        header("Location: $URL");
    }
}