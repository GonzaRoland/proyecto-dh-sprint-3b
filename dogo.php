<?php



require_once 'helpers.php';
require_once 'loader.php';

if ($_GET) {
$pagina = __DIR__.'//'. $_GET['pagina'].'.php';}
else {
    redirect('dogo.php?pagina=main');
}   

if ($auth->check() == true) {
    if($_SESSION)
    {
        $usuario = $db->dbEmailSearch($_SESSION['logged']);
        $nombre = $usuario->getFirstName();
        $genero = $usuario->getGenre();
        
    }    

    $boton1Url = 'perfil';
    if ($genero == 'm') {
        $boton1Label = 'Bienvenido '.$nombre;
    } elseif ($genero == 'f') {
        $boton1Label = 'Bienvenida '.$nombre;
    } else {
        $boton1Label = 'Bienvenidx '.$nombre;
    }
    
    $boton2Url = 'logout';
    $boton2Label = 'Logout';
    } else {    
    $boton1Url = 'login';
    $boton1Label = 'Login';
    $boton2Url = 'registro';
    $boton2Label = 'Regístrarse';
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DOGO SHOP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/master.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Varela+Round" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styleAcordeonHernan.css" />
		<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>

    </head>
    <body>
        <div class="flex-container-header">
            <header class="main-header">
                <!--<img class="logo" src="img/logo2.png">-->
                <div class="navs">
                    <div class="nav-logo">
                    
                        <a href="?pagina=main"><img src="img/nav-logo.png"></a>
                    
                    </div>
                    <nav class="main-nav">
                        <a href="?pagina=catalogo">PRODUCTOS</a>
                        <a href="?pagina=servicios">SERVICIOS</a>
                        <a href="?pagina=contacto">CONTACTO</a>
                        <a href="?pagina=frecuentes" id="long-link">PREGUNTAS FRECUENTES</a>
                        
                    </nav>  
                    <div class="user">
                        <a href="?pagina=<?=$boton1Url?>"><strong><?=$boton1Label?></strong></a>
                        <a href="?pagina=<?=$boton2Url?>"><strong><?=$boton2Label?></strong></a>
                    </div>
                </div>
                </header>
                <?php include($pagina); ?>  