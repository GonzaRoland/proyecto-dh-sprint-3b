
<?PHP
require_once 'helpers.php';
if (!$_GET) {
    redirect('dogo.php?pagina=main');
}

?>
            <div class="main-banner">
                <img src="img/bannerspring_main_c.png">
            </div>
            <div class="social-icons">
                <div class="icons">
                <a href=""><img src="img/social-fb.png"></a>
                <a href=""><img src="img/social-tw.png"></a>
                <a href=""><img src="img/social-ig.png"></a>
                <a href=""><img src="img/social-email.png"></a>
                </div>
            </div>  
                <main>
                    
                
                

                <section class="vip-doggos">
                    
                    <article class="doggo">
                        <img class="doggo-pic" src="img/buzo_dogo.jpg">
                        <h2>INDUMENTARIA</h2> 
                        <p>Abrigos, Correas, collares y más para mantener a tu mascota segura, abrigada y a la moda<br></p>
                        <a href="?pagina=catalogo">VER MÁS...</a>
                    </article>
                    <article class="doggo">
                        <img class="doggo-pic" src="img/almohadon_dogo.jpg">
                        <h2>DECO-PET</h2>
                        <p>Almohadones, camas, cuchas, canastos y todo lo necesario para mantener a tu mejor amigo cómodo y con estilo<br></p>
                        <a href="?pagina=catalogo">VER MÁS...</a>
                    </article>
                    <article class="doggo">
                            <img class="doggo-pic" src="img/soga_dogo.jpg">
                            <h2>JUGUETES</h2>
                            <p>Entretenimientos para que puedan compartir juntos los mejores momentos<br></p>
                            <a href="?pagina=catalogo">VER MÁS...</a>
                    </article>
                    <article class="doggo">
                        <img class="doggo-pic" src="img/correa_app.jpg">
                        <h2>TECH</h2>
                        <p>Correas automáticas, dispensers y todo lo último en tecnología para un cuidado moderno<br></p>
                        <a href="?pagina=catalogo">VER MÁS...</a>
                    </article>
                    <article class="doggo">
                            <img class="doggo-pic" src="img/alimento_dogo.jpg">
                            <h2>ALIMENTOS</h2>
                            <p>Balanceados de todo tipo y golosinas para que crezca alegre y bien nutrido<br></p>
                            <a href="?pagina=catalogo">VER MÁS...</a>
                    </article>
                    <article class="doggo">
                            <img class="doggo-pic" src="img/antipulgas_dogo.jpg">
                            <h2>SALUD E HIGIENE</h2>
                            <p>Todo lo necesario para que tu mascota este siempre limpia y saludable<br></p>
                            <a href="?pagina=catalogo">VER MÁS...</a>
                    </article>
                                        
                </section>

                <section class="vip-catalogo">
                    <a href="?pagina=catalogo" class="box-color_link">VER CATÁLOGO COMPLETO</a>
                </section>
            
            
                
            </main>
            <section class="banner-form">
                <img src="img/Cat-Banner-2.png">

                <div class="overlay">
                    <!-- <p>
                        CREÁ TU CUENTA Y ACCEDÉ A GRANDES BENEFICIOS.
                        <br>
                        <br>
                        <a href="dogo.php?pagina=registro">REGISTRARME</a>
                    </p> -->
               </div>
            </section>
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
