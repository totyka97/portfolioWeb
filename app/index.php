<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tatár Tamás Portfólió</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/style/style.css">
    <script src="Scripts/typewrite.js" type="text/javascript"></script>
</head>
<body>
    
<?php
require_once 'view/header.php';

$uri= parse_url($_SERVER['REQUEST_URI'])['path'];
//var_dump($uri);

$routes = [
    '/' => 'home.php',
    '/contact' => './contact.php',
    '/about' =>'./about.php'

];

if(array_key_exists($uri,$routes)){
   
    require_once $routes[$uri];
    
}else require_once 'hiba.php'



?>
</body>
</html>
