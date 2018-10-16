<?PHP

if (!$_GET) {
    redirect('dogo.php?pagina=frecuentes');
}

?>

                        <section class="banner-frecuentes">
                            <img src="img/bannerspring_frecuentes_c.png">
                        </section>
                    </header>
                    <main>
                        
           
            <!--  Preguntas Frecuentes armadas con imput y labels -->
            <!--<div class="box-color_logo">Preguntas Frecuentes</div>-->
            
            <section class="ac-container">
				<div>
					<input id="ac-1" name="accordion-1" type="checkbox" />
					<label for="ac-1">¿Dónde puedo adquirir una mascota?</label>
					<article class="ac-medium">
						<p>Nunca aconsejamos la compra, fomentamos la adopción responsables de las mascotas en cuestion. Siempre tener en cuenta que el cuidado de una macota es una responabilidad de todos los integrantes de la familia</p>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="checkbox" />
					<label for="ac-2">¿Cuando vacunar a mi perro o gato y de qué?</label>
					<article class="ac-medium">
						<p>Debes iniciar un plan de vacunación desde los 25 días con la vacuna para el Parvovirus, y revacunar a los 15 días; sin embargo lo mas indicado es visitar al Médico Veterinario, quien te dará el programa de vacunación completo. </p>
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="checkbox" />
					<label for="ac-3">¿Puedo bañar a un cachorro?</label>
					<article class="ac-medium">
						<p>Sí, puedes bañarlo, pero calefacciona antes el baño si es invierno. Utiliza un champú especial para cachorros y sécalo muy bien evitando las corrientes de aire. La higiene animal es importante tambien.</p>
					</article>
				</div>
				<div>
					<input id="ac-4" name="accordion-1" type="checkbox" />
					<label for="ac-4">¿Puedo pasear mi cachorro?</label>
					<article class="ac-medium">
						<p>La respuesta de muchos veterinarios es que hasta que un cachorro no tenga todas las vacunas, no se debe sacar a pasear por la via publica. Pero si tienen la posibilidad de llevarlo a playa no hay problema.</p>
					</article>
                </div>
                <div>
					<input id="ac-5" name="accordion-1" type="checkbox" />
					<label for="ac-5">¿Hasta cuando es cachorro mi perro?</label>
					<article class="ac-small">
						<p>A los perros de raza grande y mediana se los considera cachorros hasta el año y medio aprox., y a los perros de raza chica se los considera cachorros hasta el año.</p>
					</article>
                </div>
                <div>
					<input id="ac-7" name="accordion-1" type="checkbox" />
					<label for="ac-7">¿Cuántas veces debe comer mi cachorro al dia?</label>
					<article class="ac-large">
						<p>Deben comer al menos unas 4 veces al día, hasta cumplir los 3 meses de edad, en pequeñas porciones. A partir de los 6 meses, deben comer unas 3 veces al día. Hasta el año puedes combinarlo alimentándolo 2 veces al día y, de allí en adelante, solo es necesario que coma 1 vez al día.</p>
					</article>
                </div>
                <div>
					<input id="ac-8" name="accordion-1" type="checkbox" />
					<label for="ac-8">¿Cómo cambiar de alimento de mi mascota?</label>
					<article class="ac-large">
						<p>Las mascotas pueden necesitar algo de ayuda para cambiar a una nueva comida. Introduce el nuevo alimento gradualmente. Mezcla el alimento nuevo con el antiguo y aumenta progresivamente la cantidad de alimento nuevo hasta sustituir por completo el anterior.</p>
					</article>
                </div>
                <div>
					<input id="ac-9" name="accordion-1" type="checkbox" />
					<label for="ac-9">¿Cómo saber si mi perro tiene sobrepeso?</label>
					<article class="ac-xl">
						<p>- Ya no le notas las costillas al acariciarlo.<br>
                                    - No se distingue la cintura.<br>
                                    - Se balancea al caminar.<br>
                                    - Le cuesta moverse.<br>
                                    - Respira con dificultad.<br>
                                    - Muy irritable.</p>
					</article>
                </div>
                <div>
					<input id="ac-10" name="accordion-1" type="checkbox" />
					<label for="ac-10">¿Puedo llevar a caminar a mi perro despues de comer?</label>
					<article class="ac-small">
						<p>No es conveniente que haga ejercicio fuerte luego de alimentarse, aunque ambos , usted y su perro, pueden disfrutar una caminata lenta con la correa.</p>
					</article>
                </div>
                <div>
					<input id="ac-11" name="accordion-1" type="checkbox" />
					<label for="ac-11">¿Tengo que desparasitar a mi perro?</label>
					<article class="ac-small">
						<p>Es una rutina que tienes que incorporar al cuidado de tu mascota. Recordá desparasitar a tu perro cada 4 o 6 meses todos los años.</p>
					</article>
                </div>
                <div>
					<input id="ac-12" name="accordion-1" type="checkbox" />
					<label for="ac-12">¿Cada cuanto debo visitar al Médico Veterinario?</label>
					<article class="ac-medium">
						<p>Lo ideal seria cada tres meses, sin  embargo, dos veces al año sería una excelente práctica para prevenir afecciones. Si presenta algún problema o situación irregular, de inmediato acude a él.</p>
					</article>
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