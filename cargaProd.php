<?php

include_once 'helpers.php';
include_once 'loader.php';

if (!$_GET) {
    redirect('dogo.php?pagina=cargaProd');
}
if ($auth->check() == true) 
{
    if ($_SESSION) 
    {
        $usuario = $db->dbEmailSearch($_SESSION['logged']);

        if ($auth->checkRole($usuario) == false)
        {
            echo '<h1 class="error-carga">No tienes permiso para acceder a esta página</h1>';
            exit;
        }
    }
} else 
{
    redirect('login.php');
}

$nombre = "";
$codigo = "";
$precio = "";
$descripcion = "";
$stock = "";
$marca = "";
$categoria = "";
$errores = [];

if($_POST) {

    $nombre = $_POST['nombre'];
    //$codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $id = null;

    $errores = $validator->regProdValidate($_POST); 
    if(count($errores) == 0) {
        $product = new Product($nombre, $precio, $stock, $marca, $categoria, $descripcion, $id); 
        $errores = $validator->productFileValidate($_FILES); 
        if(count($errores) == 0)
        {
            $db->saveProduct($product);
            $db->saveProdPic($product);
            redirect('main.php');
        }
    }
}

?>
            <main class="main-form">    
                <section class="form">
                    
                    
                    <form class="datos" action="" method="POST" enctype="multipart/form-data">
                        <div align="center">
                        <fieldset class="reg-form">
                                <h2> Cargá los Productos</h2>
                                <br>    
                            
                                <label for="nombre">Nombre del Producto</label>
                                <input class="form-input" type="text" name="nombre" value="<?= $nombre ?>" placeholder="Ingrese el nombre del Producto">
                                <?php if(isset($errores['name'])):?>
                                <div class="alert"><p><strong><?=$errores['name']?></strong></p></div>
                                <?php endif;?>
                                
                                <br>
                                
                                <label for="precio">Precio del Producto</label>
                                
                                <input class="form-input" type="text" name="precio" value="<?= $precio ?>" placeholder="Ingrese el precio del Producto">
                                <?php if(isset($errores['price'])) :?>
                                <div class="alert"><p><strong><?= $errores['price'] ?></strong></p></div>
                                <?php endif; ?>
                                
                                <br>
                                <label for="stock">Stock Inicial del Producto</label>
                                
                                <input class="form-input" type="text" name="stock" value="<?= $stock ?>" placeholder="Ingrese el stock del Producto">
                                <?php if(isset($errores['stock'])) :?>
                                <div class="alert"><p><strong><?= $errores['stock'] ?></strong></p></div>
                                <?php endif; ?>
                                
                                <br>
                                <label for="marca">Marca del Producto</label>

                                <input class="form-input" type="text" name="marca" value="<?= $marca ?>" placeholder="Ingrese la marca del Producto">
                                <?php if(isset($errores['marca'])) :?>
                                <div class="alert"><p><strong><?= $errores['marca'] ?></strong></p></div>
                                <?php endif; ?>
                                
                                <br>
                                <label for="categoria">Categoría del Producto</label>
                                <select name="categoria">
                                    <option value="1">Indumentaria</option>
                                    <option value="2">Deco-Pet</option>
                                    <option value="3">Juguetes</option>
                                    <option value="4">Tech</option>
                                    <option value="5">Alimentos</option>
                                    <option value="6">Salud e Higiene</option>
                                </select>

                                <br>
                                <br>
                                <label for="foto">Foto del Producto</label>
                                <br>
                                
                                <input type="file" name="foto">
                                <?php if(isset($errores['foto'])) :?>
                                <div class="alert"><p><strong><?= $errores['foto'] ?></strong></p></div>
                                <?php endif; ?>
                                
                                <br>
                                <br>
                                <label for="descripcion">Descripción del Producto</label>
                                <br>

                                <textarea name="descripcion" style="width:400px; height:150px;"  placeholder="Ingrese la Descripción del Producto"></textarea>
                            
                                <br>
                                <br>
                                
                            <div align="center">
                                <br>
                                <br>
                                <button class="btn" type="submit">ENVIAR</button>
                                <button class="btn" type="reset">BORRAR</button>
                            </div>
                        </div>    
                        </fieldset>
                        <br>
                    </form>
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
