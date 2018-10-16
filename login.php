<?php
include_once 'helpers.php';
include_once 'loader.php';

if (!$_GET) {
    redirect('dogo.php?pagina=login');
}

if($auth->check()) {
    redirect('dogo.php?pagina=perfil');
}


$email = "";
$errores = [];


if($_POST) {
    $email = $_POST['email'];
    $errores = $validator->logValidate($_POST);
    if (count($errores) == 0) {
        $usuario = $db->dbEmailSearch($email);
        //dd($usuario);      
        $errores = $validator->loginValidate($_POST, $usuario);
        if(count($errores) == 0) {
                $auth->login($email);
                redirect('perfil.php');
           
            }
        }    
    }

?>  
<section class="banner">
                    <!-- <img src="img/bannerspring_login.jpg"> -->
                </section>
            </header>
            <main>
                <section>
                <div align="center">
                    <form action="" method="post">
                        <fieldset class="login-form">
                            <h2>Iniciar sesión</h2>
                            <br>
                            
                            <input class="form-input" type="text" value="<?= $email ?>"name="email" placeholder=" Correo Electrónico">
                            
                            <?php if(isset($errores['email'])):?>
                                <div class="alert"><p><strong><?=$errores['email']?></strong></p></div>
                            <?php endif;?><br>
                            
                            <h4><label for="password"></label></h4>
                            
                            <input class="form-input" type="password" name="password" placeholder=" Contraseña">

                            <?php if(isset($errores['password'])) :?>
                                <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                            <?php endif; ?><br>
                            
                            
                            <button class="btn" type="submit">ENVIAR</button>
                            <button class="btn" type="reset">BORRAR</button>
                            
                        </fieldset>
                       
                    </form>
                </div>  
                </section>
            </main>
            <footer>
            <nav class="footer-nav">
                <a href="?pagina=main">Inicio</a>
                    <a href="?pagina=catalogo">Productos</a>
                    <a href="?pagina=servicios">Servicios</a>
                    <a href="?pagina=contacto">Contacto</a>
                    <a href="?pagina=frecuentes">Preguntas Frecuentes</a>
            </nav>
            <i>2018 Todos los Derechos reservados.</i>
        </footer>
            
        </div>
    </body>
</html>