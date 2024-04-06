<?php

$uri= parse_url($_SERVER['REQUEST_URI'])['path'];
var_dump($uri);

$routes = [
    '/' => 'index.php',
    '/contact' => 'contact'

];
if($uri == '/contact'){
    echo "contaaaaaaaaa";
}

//require_once $routes['/contact'];


var_dump($routes[$uri]);

if(array_key_exists($uri,$routes)){
    require_once $routes[$uri];
    
}


function contact(){
    echo "kabbeee";
}

echo "Portfólióm fejlesztés alatt! Gyere vissza később :))))) de akkor egy üveg pálinkával ";
echo date("Y-m-d H:i:s");