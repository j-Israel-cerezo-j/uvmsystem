<?php
const HTTP_PROTOCOL = "http";
function goToView($viewRute){
    header("location: ../Views/$viewRute");
}

function rootPath($route){
    return HTTP_PROTOCOL . "://" . $_SERVER["SERVER_NAME"] . "/sistemauvm_ver3.0/$route";
}
function css($route){
    $route = "resources/css/$route";
    echo rootPath($route);
}
function js($route){
    $route = "resources/js/$route";
    echo root($route);
}

function goToController($controller){
    header("location: ../Controllers/$controller");
}

function controller($controller){
    echo root("src/Controllers/$controller");
}

function includeView($viewPath, array $args = array()){
    $routeChunks = explode("/", $_SERVER['REQUEST_URI']);

    $relativePath = "";
    for($i=4; $i<count($routeChunks); $i++){
        $relativePath .= "../";
    }

    $vars=array_keys($args);
    foreach ($vars as $var){
        $$var = $args[$var];
    }

    include_once($relativePath."Views/$viewPath");
}

function root($path){
    $routeChunks = explode("/", $_SERVER['REQUEST_URI']);

    $relativePath = "";
    for($i=3; $i<count($routeChunks); $i++){
        $relativePath .= "../";
    }

    return $relativePath.$path;
}
function view($view){
    echo root("src/Views/$view");
}
?>