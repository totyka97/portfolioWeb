<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tatár Tamás Portfólió</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/style/style.css">
</head>
<body>
    
<?php
require_once 'view/header.php';

$uri= parse_url($_SERVER['REQUEST_URI'])['path'];
//var_dump($uri);

$routes = [
    '/' => 'home.php',
    '/contact' => './contact.php'

];

if(array_key_exists($uri,$routes)){
   
    require_once $routes[$uri];
    
}else require_once 'hiba.php'



?>
</body>
</html>
