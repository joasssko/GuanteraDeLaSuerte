<?php get_header()?>
<?php $participant = $_COOKIE['participant']?>
<?php $wnr = $_COOKIE['wnr']?>
<div id="head">
	<div class="container">
		<div class="row">
        <a href="<?php echo get_bloginfo('url')?>">
         <img id="logo-guantera" class="center-block" src="<?php echo get_bloginfo('template_directory')?>/images/logo.png" alt="" class="lc">
      	</a>
        	<div id="step-1" class="paso">
        		<img id="luz-i" class="center-block img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/luz-i.png" alt="">
            	<img id="luz-c" class="center-block img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/luz-c.png" alt="">
            	<img id="luz-d" class="center-block img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/luz-d.png" alt="">
            <div class="col-md-8 col-md-offset-2">
            	
            
            	<h3><strong>Penta Security</strong> tiene para ti <strong>1000</strong> chalecos reflectantes, que se sortearán con códigos diarios</h3>
            	
            	
                
                <div id="chaleco">
                	<img class="img-responsive center-block" src="<?php echo get_bloginfo('template_directory')?>/images/chalecos.png" alt="">
                </div>
                <div class="clear"></div>
                <div id="ingresacodigo">
                <div class="col-xs-12 col-md-6 col-sm-6 col-sm-offset-6 col-md-offset-6">
                <label for="winnercode">Ingresa el código</label>
                <small>ingrese el código secreto de 4 dígitos para concursar por un chaleco reflectante</small>
                <div class="clear"></div>
            	<input type="text" name="winnercode" id="winnercode" maxlength="4">
                <div class="clear"></div>
                <label for="">Rut</label>
                <input type="text" name="rut" id="rut" placeholder="12.345.678-5">
                <span id="rerror" style="display:none">Ha ingresado un rut incorrecto, intente nuevamente.</span>
                </div>
                	

                </div>
            	
                <div class="clear"></div>
                <div class="btn btn-default center-block back-to-top" id="btn-canjear" onClick="paso2()">Canjear</div>
            </div>
            </div>
            <div id="step-2" class="paso hidden">
            <div class="container">	
            	<div class="row">
	            	<div class="col-md-12">
	            		<?php echo do_shortcode('[contact-form-7 id="12" title="Inscribe"]')?>
	            	</div>  		
            	</div>
                <div class="row">
                    <div class="clear separator"></div>
                    <img id="chaleco-chico" class="center-block " src="<?php echo get_bloginfo('template_directory')?>/images/chaleco.png" alt="">
                    <div class="clear separator"></div>
                    <img class="center-block" src="<?php echo get_bloginfo('template_directory')?>/images/logo-penta.png" alt="">
                </div>
            </div>           		
            	
            </div>

            <div id="step-2a" class="paso hidden already">
            	<div class="clear separator"></div>
            	<h3>Usted ya ganó uno de los chalecos.</h3>
            	<div class="clear separator"></div>
            	<a href="<?php echo get_bloginfo('url')?>"><div class="btn btn-default center-block" id="btn-volver">Volver</div></a>
            </div>
            <div id="step-2b" class="paso hidden already">
            	<h3>Usted ya participó y tenemos sus datos.</h3>
            	<div class="clear separator"></div>
                <div class="btn btn-default center-block back-to-top" id="btn-verificar" onClick="verificaCodigoGanador_already()">Verificar Código</div>
            </div>
            
        	<div id="step-3" class="paso hidden">
            	<div id="winner" class="hidden">
                	<h2>¡FELICITACIONES!</h2>
                    <h3>Felicitaciones, has ganado un chaleco reflectante. Nos comunicaremos contigo para indicarte cómo hacer retiro de tu chaleco. </h3>
                    <div class="clear separator"></div>
                    <a href="<?php echo get_bloginfo('url')?>"><div class="btn btn-default center-block" id="btn-volver">Volver</div></a>
                </div>
            	<div id="looser" class="hidden">
                	<img class="center-block img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/wrong.png" alt="">
                	<h2><strong>Lo sentimos,</strong> el código ya ha sido agotado, pero atento a nuestro Fanpage,  ya que seguiremos lanzando códigos todos los días, tenemos 1000 chalecos reflectantes a repartir!</h2>
                	<div class="separator clear"></div>
                	<a href="<?php echo get_bloginfo('url')?>"><div class="btn btn-default center-block back-to-top" id="btn-volver">Volver</div></a>
                </div>
            </div>
            
        	<div id="step-4" class="paso hidden"></div>
            
        	<div id="step-5" class="paso hidden"></div>
        </div>
	</div>
</div>


<main>
	<div class="megacontainer" id="porque">
		<div class="container">
		<div class="row">
        	<h3>¿Por qué <strong>Participar?</strong></h3>
        	<div class="col-md-8 col-md-offset-2" id="porques">
            <div class="row porque-box">
            	<div class="col-md-6">
            		<img class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/multas.png" alt="">
            	</div>
            	<div class="col-md-6 porque-bl">
            		<p>No cumplir con la norma constituirá una falta leve, que se penalizará con una multa entre los $9.000 y $22.500 (0,2 a 0,5 UTM).</p>
            	</div>
            </div>
             <div class="row porque-box">
            	<div class="col-md-6 porque-br">
            		<p>El chaleco reflectante forma parte del kit de seguridad que debe poseer todo auto para casos de emergencia</p>
            	</div>
            	<div class="col-md-6">
            		<img class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/precaucion.png" alt="">
            	</div>
            </div>
            <div class="row porque-box">
            	<div class="col-md-6">
            		<img class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/accidentes.png" alt="">
            	</div>
            	<div class="col-md-6 porque-bl">
            		<p>Más de 6 mil personas murieron atropelladas en los últimos 10 años, y solo en 2014, 615 peatones fallecieron en accidentes de tránsito.</p>
            	</div>
            </div>
           	<div class="row porque-box">
            	<div class="col-md-6 porque-br">
            		<p>El chaleco reflectante forma parte del kit de seguridad que debe poseer todo auto para casos de emergencia</p>
            	</div>
            	<div class="col-md-6">
            		<img class="img-responsive" src="<?php echo get_bloginfo('template_directory')?>/images/visibilidad.png" alt="">
            	</div>
            </div>
            </div>

         
        </div>
        <div class="row">
        	<div class="clear separator"></div>
        	<img id="chaleco-chico" class="center-block " src="<?php echo get_bloginfo('template_directory')?>/images/chaleco.png" alt="">
        	<div class="clear separator"></div>
        	<img class="center-block" src="<?php echo get_bloginfo('template_directory')?>/images/logo-penta.png" alt="">
        </div>
        </div>
	</div>
</main>

<div class="hidden" id="regiones">
<option value="">----</option>
<option data-r="1" value="Arica y Parinacota">Arica y Parinacota</option>
<option data-r="2" value="Tarapacá">Tarapacá</option>
<option data-r="3" value="Antofagasta">Antofagasta</option>
<option data-r="4" value="Atacama">Atacama</option>
<option data-r="5" value="Coquimbo">Coquimbo</option>
<option data-r="6" value="Valparaíso">Valparaíso</option>
<option data-r="7" value="Región del Libertador Gral. Bernardo O’Higgins">Región del Libertador Gral. Bernardo O’Higgins</option>
<option data-r="8" value="Región del Maule">Región del Maule</option>
<option data-r="9" value="Región del Biobío">Región del Biobío</option>
<option data-r="10" value="Región de la Araucanía">Región de la Araucanía</option>
<option data-r="11" value="Región de Los Ríos">Región de Los Ríos</option>
<option data-r="12" value="Región de Los Lagos">Región de Los Lagos</option>
<option data-r="13" value="Región Aisén del Gral. Carlos Ibáñez del Campo">Región Aisén del Gral. Carlos Ibáñez del Campo</option>
<option data-r="14" value="Región de Magallanes y de la Antártica Chilena">Región de Magallanes y de la Antártica Chilena</option>
<option data-r="15" value="Región Metropolitana de Santiago">Región Metropolitana de Santiago</option>
</div>

<div id="r-15" class="hidden">
	<option value="Santiago">Santiago</option>
    <option value="Cerrillos">Cerrillos</option>
    <option value="Cerro Navia">Cerro Navia</option>
    <option value="Conchalí">Conchalí</option>
    <option value="El Bosque">El Bosque</option>
    <option value="Estación Central">Estación Central</option>
    <option value="Huechuraba">Huechuraba</option>
    <option value="Independencia">Independencia</option>
    <option value="La Cisterna">La Cisterna</option>
    <option value="La Florida">La Florida</option>
    <option value="La Granja">La Granja</option>
    <option value="La Pintana">La Pintana</option>
    <option value="La Reina">La Reina</option>
    <option value="Las Condes">Las Condes</option>
    <option value="Lo Barnechea">Lo Barnechea</option>
    <option value="Lo Espejo">Lo Espejo</option>
    <option value="Lo Prado">Lo Prado</option>
    <option value="Macul">Macul</option>
    <option value="Maipú">Maipú</option>
    <option value="Ñuñoa">Ñuñoa</option>
    <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
    <option value="Peñalolén">Peñalolén</option>
    <option value="Providencia">Providencia</option>
    <option value="Pudahuel">Pudahuel</option>
    <option value="Quilicura">Quilicura</option>
    <option value="Quinta Normal">Quinta Normal</option>
    <option value="Recoleta">Recoleta</option>
    <option value="Renca">Renca</option>
    <option value="San Joaquín">San Joaquín</option>
    <option value="San Miguel">San Miguel</option>
    <option value="San Ramón">San Ramón</option>
    <option value="Vitacura">Vitacura</option>
    <option value="Puente Alto">Puente Alto</option>
    <option value="Pirque">Pirque</option>
    <option value="San José de Maipo">San José de Maipo</option>
    <option value="Colina">Colina</option>
    <option value="Lampa">Lampa</option>
    <option value="Tiltil">Tiltil</option>
    <option value="San Bernardo">San Bernardo</option>
    <option value="Buin">Buin</option>
    <option value="Calera de Tango">Calera de Tango</option>
    <option value="Paine">Paine</option>
    <option value="Melipilla">Melipilla</option>
    <option value="Alhué">Alhué</option>
    <option value="Curacaví">Curacaví</option>
    <option value="María Pinto">María Pinto</option>
    <option value="San Pedro">San Pedro</option>
    <option value="Talagante">Talagante</option>
    <option value="El Monte">El Monte</option>
    <option value="Isla de Maipo">Isla de Maipo</option>
    <option value="Padre Hurtado">Padre Hurtado</option>
    <option value="Peñaflor">Peñaflor</option>
</div>

<div id="r-1" class="hidden">
<option value="Arica">Arica</option>
<option value="Camarones">Camarones</option>
<option value="Putre">Putre</option>
<option value="General Lagos">General Lagos</option>
</div>
<div id="r-2" class="hidden">
<option value="Iquique">Iquique</option>
<option value="Alto Hospicio">Alto Hospicio</option>
<option value="Pozo Almonte">Pozo Almonte</option>
<option value="Camiña">Camiña</option>
<option value="Colchane">Colchane</option>
<option value="Huara">Huara</option>
<option value="Pica">Pica</option>
</div>
<div id="r-3" class="hidden">
<option value="Antofagasta">Antofagasta</option>
<option value="Mejillones">Mejillones</option>
<option value="Sierra Gorda">Sierra Gorda</option>
<option value="Taltal">Taltal</option>
<option value="Calama">Calama</option>
<option value="Ollagüe">Ollagüe</option>
<option value="San Pedro de Atacama">San Pedro de Atacama</option>
<option value="Tocopilla">Tocopilla</option>
<option value="María Elena">María Elena</option>
</div>
<div id="r-4" class="hidden">
<option value="Copiapó">Copiapó</option>
<option value="Caldera">Caldera</option>
<option value="Tierra Amarilla">Tierra Amarilla</option>
<option value="Chañaral">Chañaral</option>
<option value="Diego de Almagro">Diego de Almagro</option>
<option value="Vallenar">Vallenar</option>
<option value="Alto del Carmen">Alto del Carmen</option>
<option value="Freirina">Freirina</option>
<option value="Huasco">Huasco</option>
</div>
<div id="r-5" class="hidden">
<option value="La Serena">La Serena</option>
<option value="Coquimbo">Coquimbo</option>
<option value="Andacollo">Andacollo</option>
<option value="La Higuera">La Higuera</option>
<option value="Paiguano">Paiguano</option>
<option value="Vicuña">Vicuña</option>
<option value="Illapel">Illapel</option>
<option value="Canela">Canela</option>
<option value="Los Vilos">Los Vilos</option>
<option value="Salamanca">Salamanca</option>
<option value="Ovalle">Ovalle</option>
<option value="Combarbalá">Combarbalá</option>
<option value="Monte Patria">Monte Patria</option>
<option value="Punitaqui">Punitaqui</option>
<option value="Río Hurtado">Río Hurtado</option>
</div>
<div id="r-6" class="hidden">
<option value="Valparaíso">Valparaíso</option>
<option value="Casablanca">Casablanca</option>
<option value="Concón">Concón</option>
<option value="Juan Fernández">Juan Fernández</option>
<option value="Puchuncaví">Puchuncaví</option>
<option value="Quintero">Quintero</option>
<option value="Viña del Mar">Viña del Mar</option>
<option value="Isla de Pascua">Isla de Pascua</option>
<option value="Los Andes">Los Andes</option>
<option value="Calle Larga">Calle Larga</option>
<option value="Rinconada">Rinconada</option>
<option value="San Esteban">San Esteban</option>
<option value="La Ligua">La Ligua</option>
<option value="Cabildo">Cabildo</option>
<option value="Papudo">Papudo</option>
<option value="Petorca">Petorca</option>
<option value="Zapallar">Zapallar</option>
<option value="Quillota">Quillota</option>
<option value="Calera">Calera</option>
<option value="Hijuelas">Hijuelas</option>
<option value="La Cruz">La Cruz</option>
<option value="Nogales">Nogales</option>
<option value="San Antonio">San Antonio</option>
<option value="Algarrobo">Algarrobo</option>
<option value="Cartagena">Cartagena</option>
<option value="El Quisco">El Quisco</option>
<option value="El Tabo">El Tabo</option>
<option value="Santo Domingo">Santo Domingo</option>
<option value="San Felipe">San Felipe</option>
<option value="Catemu">Catemu</option>
<option value="Llaillay">Llaillay</option>
<option value="Panquehue">Panquehue</option>
<option value="Putaendo">Putaendo</option>
<option value="Santa María">Santa María</option>
<option value="Quilpué">Quilpué</option>
<option value="Limache">Limache</option>
<option value="Olmué">Olmué</option>
<option value="Villa Alemana">Villa Alemana</option>
</div>
<div id="r-7" class="hidden">
<option value="Rancagua">Rancagua</option>
<option value="Codegua">Codegua</option>
<option value="Coinco">Coinco</option>
<option value="Coltauco">Coltauco</option>
<option value="Doñihue">Doñihue</option>
<option value="Graneros">Graneros</option>
<option value="Las Cabras">Las Cabras</option>
<option value="Machalí">Machalí</option>
<option value="Malloa">Malloa</option>
<option value="Mostazal">Mostazal</option>
<option value="Olivar">Olivar</option>
<option value="Peumo">Peumo</option>
<option value="Pichidegua">Pichidegua</option>
<option value="Quinta de Tilcoco">Quinta de Tilcoco</option>
<option value="Rengo">Rengo</option>
<option value="Requínoa">Requínoa</option>
<option value="San Vicente">San Vicente</option>
<option value="Pichilemu">Pichilemu</option>
<option value="La Estrella">La Estrella</option>
<option value="Litueche">Litueche</option>
<option value="Marchihue">Marchihue</option>
<option value="Navidad">Navidad</option>
<option value="Paredones">Paredones</option>
<option value="San Fernando">San Fernando</option>
<option value="Chépica">Chépica</option>
<option value="Chimbarongo">Chimbarongo</option>
<option value="Lolol">Lolol</option>
<option value="Nancagua">Nancagua</option>
<option value="Palmilla">Palmilla</option>
<option value="Peralillo">Peralillo</option>
<option value="Placilla">Placilla</option>
<option value="Pumanque">Pumanque</option>
<option value="Santa Cruz">Santa Cruz</option>
</div>
<div id="r-8" class="hidden">
<option value="Talca">Talca</option>
<option value="Constitución">Constitución</option>
<option value="Curepto">Curepto</option>
<option value="Empedrado">Empedrado</option>
<option value="Maule">Maule</option>
<option value="Pelarco">Pelarco</option>
<option value="Pencahue">Pencahue</option>
<option value="Río Claro">Río Claro</option>
<option value="San Clemente">San Clemente</option>
<option value="San Rafael">San Rafael</option>
<option value="Cauquenes">Cauquenes</option>
<option value="Chanco">Chanco</option>
<option value="Pelluhue">Pelluhue</option>
<option value="Curicó">Curicó</option>
<option value="Hualañé">Hualañé</option>
<option value="Licantén">Licantén</option>
<option value="Molina">Molina</option>
<option value="Rauco">Rauco</option>
<option value="Romeral">Romeral</option>
<option value="Sagrada Familia">Sagrada Familia</option>
<option value="Teno">Teno</option>
<option value="Vichuquén">Vichuquén</option>
<option value="Linares">Linares</option>
<option value="Colbún">Colbún</option>
<option value="Longaví">Longaví</option>
<option value="Parral">Parral</option>
<option value="Retiro">Retiro</option>
<option value="San Javier">San Javier</option>
<option value="Villa Alegre">Villa Alegre</option>
<option value="Yerbas Buenas">Yerbas Buenas</option>
</div>
<div id="r-9" class="hidden">
<option value="Concepción">Concepción</option>
<option value="Coronel">Coronel</option>
<option value="Chiguayante">Chiguayante</option>
<option value="Florida">Florida</option>
<option value="Hualqui">Hualqui</option>
<option value="Lota">Lota</option>
<option value="Penco">Penco</option>
<option value="San Pedro de la Paz">San Pedro de la Paz</option>
<option value="Santa Juana">Santa Juana</option>
<option value="Talcahuano">Talcahuano</option>
<option value="Tomé">Tomé</option>
<option value="Hualpén">Hualpén</option>
<option value="Lebu">Lebu</option>
<option value="Arauco">Arauco</option>
<option value="Cañete">Cañete</option>
<option value="Contulmo">Contulmo</option>
<option value="Curanilahue">Curanilahue</option>
<option value="Los Álamos">Los Álamos</option>
<option value="Tirúa">Tirúa</option>
<option value="Los Ángeles">Los Ángeles</option>
<option value="Antuco">Antuco</option>
<option value="Cabrero">Cabrero</option>
<option value="Laja">Laja</option>
<option value="Mulchén">Mulchén</option>
<option value="Nacimiento">Nacimiento</option>
<option value="Negrete">Negrete</option>
<option value="Quilaco">Quilaco</option>
<option value="Quilleco">Quilleco</option>
<option value="San Rosendo">San Rosendo</option>
<option value="Santa Bárbara">Santa Bárbara</option>
<option value="Tucapel">Tucapel</option>
<option value="Yumbel">Yumbel</option>
<option value="Alto Biobío">Alto Biobío</option>
<option value="Chillán">Chillán</option>
<option value="Bulnes">Bulnes</option>
<option value="Cobquecura">Cobquecura</option>
<option value="Coelemu">Coelemu</option>
<option value="Coihueco">Coihueco</option>
<option value="Chillán Viejo">Chillán Viejo</option>
<option value="El Carmen">El Carmen</option>
<option value="Ninhue">Ninhue</option>
<option value="Ñiquén">Ñiquén</option>
<option value="Pemuco">Pemuco</option>
<option value="Pinto">Pinto</option>
<option value="Portezuelo">Portezuelo</option>
<option value="Quillón">Quillón</option>
<option value="Quirihue">Quirihue</option>
<option value="Ránquil">Ránquil</option>
<option value="San Carlos">San Carlos</option>
<option value="San Fabián">San Fabián</option>
<option value="San Ignacio">San Ignacio</option>
<option value="San Nicolás">San Nicolás</option>
<option value="Treguaco">Treguaco</option>
<option value="Yungay">Yungay</option>
</div>
<div id="r-10" class="hidden">
<option value="Temuco">Temuco</option>
<option value="Carahue">Carahue</option>
<option value="Cunco">Cunco</option>
<option value="Curarrehue">Curarrehue</option>
<option value="Freire">Freire</option>
<option value="Galvarino">Galvarino</option>
<option value="Gorbea">Gorbea</option>
<option value="Lautaro">Lautaro</option>
<option value="Loncoche">Loncoche</option>
<option value="Melipeuco">Melipeuco</option>
<option value="Nueva Imperial">Nueva Imperial</option>
<option value="Padre las Casas">Padre las Casas</option>
<option value="Perquenco">Perquenco</option>
<option value="Pitrufquén">Pitrufquén</option>
<option value="Pucón">Pucón</option>
<option value="Saavedra">Saavedra</option>
<option value="Teodoro Schmidt">Teodoro Schmidt</option>
<option value="Toltén">Toltén</option>
<option value="Vilcún">Vilcún</option>
<option value="Villarrica">Villarrica</option>
<option value="Cholchol">Cholchol</option>
<option value="Angol">Angol</option>
<option value="Collipulli">Collipulli</option>
<option value="Curacautín">Curacautín</option>
<option value="Ercilla">Ercilla</option>
<option value="Lonquimay">Lonquimay</option>
<option value="Los Sauces">Los Sauces</option>
<option value="Lumaco">Lumaco</option>
<option value="Purén">Purén</option>
<option value="Renaico">Renaico</option>
<option value="Traiguén">Traiguén</option>
<option value="Victoria">Victoria</option>
</div>
<div id="r-11" class="hidden">
<option value="Valdivia">Valdivia</option>
<option value="Corral">Corral</option>
<option value="Lanco">Lanco</option>
<option value="Los Lagos">Los Lagos</option>
<option value="Máfil">Máfil</option>
<option value="Mariquina">Mariquina</option>
<option value="Paillaco">Paillaco</option>
<option value="Panguipulli">Panguipulli</option>
<option value="La Unión">La Unión</option>
<option value="Futrono">Futrono</option>
<option value="Lago Ranco">Lago Ranco</option>
<option value="Río Bueno">Río Bueno</option>
</div>
<div id="r-12" class="hidden">
<option value="Puerto Montt">Puerto Montt</option>
<option value="Calbuco">Calbuco</option>
<option value="Cochamó">Cochamó</option>
<option value="Fresia">Fresia</option>
<option value="Frutillar">Frutillar</option>
<option value="Los Muermos">Los Muermos</option>
<option value="Llanquihue">Llanquihue</option>
<option value="Maullín">Maullín</option>
<option value="Puerto Varas">Puerto Varas</option>
<option value="Castro">Castro</option>
<option value="Ancud">Ancud</option>
<option value="Chonchi">Chonchi</option>
<option value="Curaco de Vélez">Curaco de Vélez</option>
<option value="Dalcahue">Dalcahue</option>
<option value="Puqueldón">Puqueldón</option>
<option value="Queilén">Queilén</option>
<option value="Quellón">Quellón</option>
<option value="Quemchi">Quemchi</option>
<option value="Quinchao">Quinchao</option>
<option value="Osorno">Osorno</option>
<option value="Puerto Octay">Puerto Octay</option>
<option value="Purranque">Purranque</option>
<option value="Puyehue">Puyehue</option>
<option value="Río Negro">Río Negro</option>
<option value="San Juan de la Costa">San Juan de la Costa</option>
<option value="San Pablo">San Pablo</option>
<option value="Chaitén">Chaitén</option>
<option value="Futaleufú">Futaleufú</option>
<option value="Hualaihué">Hualaihué</option>
<option value="Palena">Palena</option>
</div>
<div id="r-13" class="hidden">
<option value="Coihaique">Coyhaique</option>
<option value="Lago Verde">Lago Verde</option>
<option value="Aisén">Aysén</option>
<option value="Cisnes">Cisnes</option>
<option value="Guaitecas">Guaitecas</option>
<option value="Cochrane">Cochrane</option>
<option value="O’Higgins">O’Higgins</option>
<option value="Tortel">Tortel</option>
<option value="Chile Chico">Chile Chico</option>
<option value="Río Ibáñez">Río Ibáñez</option>
</div>
<div id="r-14" class="hidden">
<option value="Punta Arenas">Punta Arenas</option>
<option value="Laguna Blanca">Laguna Blanca</option>
<option value="Río Verde">Río Verde</option>
<option value="San Gregorio">San Gregorio</option>
<option value="Cabo de Hornos (Ex Navarino)">Cabo de Hornos (Ex Navarino)</option>
<option value="Antártica">Antártica</option>
<option value="Porvenir">Porvenir</option>
<option value="Primavera">Primavera</option>
<option value="Timaukel">Timaukel</option>
<option value="Natales">Natales</option>
<option value="Torres del Paine">Torres del Paine</option>
</div>



<script>

if ($('.back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('.back-to-top').addClass('show');
            } else {
                $('.back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('.back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

jQuery(document).ready(function($) {
	jQuery("#rut").Rut({
       format_on: 'keyup',
       validation:true,
       on_error: function(){$('#step-1 #rerror').css('display' , 'inline-block');$('#btn-canjear').css('z-index' , '0')},
       on_success: function(){$('#step-1 #rerror').css('display' , 'none');$('#btn-canjear').css('z-index' , '1015')}
    })
	var regiones = $('#regiones').html();
	//console.log(regiones);
	
	$('#region').html(regiones);
	
	$('#region').change(function(event) {
		var dr = $('#region :selected').data('r');
		//console.log(dr);
		$('#comuna').html($('#r-'+dr).html())
	});

	
});



function paso2(){
	
	participant = $('#rut').val();
	cparticipant = Cookies.get('participant');
	cwinnerrut = Cookies.get('wnr');
	
	code = $('#winnercode').val();
	rut = $('#rut').val();
	if(!code){
	
		alert('ingrese código');
	
	} else if (code.length < 4) {
		
		alert('El código debe de ser de 4 dígitos');
	}else if(!rut){
		alert('Debe ingresar un rut');
	} else {
		
		if(participant == cwinnerrut && cparticipant == participant){
			$('#step-1').addClass('hidden');
			$('#porque').addClass('hidden');
			$('#step-2a').removeClass('hidden');
			$('#codigo').val(code);
			$('#ruth').val(rut);
		}else if(participant != cwinnerrut && cparticipant == participant){
			$('#step-1').addClass('hidden');
			$('#porque').addClass('hidden');
			$('#step-2b').removeClass('hidden');
			$('#codigo').val(code);
			$('#ruth').val(rut);
		}else{
			$('#step-1').addClass('hidden');
			$('#porque').addClass('hidden');
			$('#step-2').removeClass('hidden');
			$('#codigo').val(code);
			$('#ruth').val(rut);
		}
	}
}
	
function verificaCodigoGanador() {
	code = $('#winnercode').val();
	winner = $('#nombre').val();
	winneremail = $('#email').val();
	winnerrut = $('#rut').val();
	
	$.ajax({
		type: "GET",
		url: "wp-admin/admin-ajax.php",
		dataType: 'html',
		data: ({ action: 'verificaCodigoGanador' , code : code , winner : winner , winneremail : winneremail}),
		success: function(data){
			
			$('#step-2').addClass('hidden');
			$('#step-3').removeClass('hidden');
			
			//console.log(data);
			
			if(data == '1'){
				$('#winner').removeClass('hidden');
				Cookies.set('wnr', winnerrut , { expires: 21, path: '/' });
				
			}
			else if(data == '2'){
				$('#looser').removeClass('hidden');
			}
			else{
				console.log('wtf?!')
			}
			
			//$('#step-3').html(data);
			
		},
		error: function(data)  
			{  
				console.log("No se pudo verificar el código");
				return false;
			}  

	}); 
	Cookies.set('participant', winnerrut , { expires: 21, path: '/' });
	Cookies.set('participante', winneremail , { expires: 21, path: '/' });
	
}


function verificaCodigoGanador_already() {
	code = $('#winnercode').val();
	console.log('consultando');
	cparticipant = Cookies.get('participant');
	cparticipante = Cookies.get('participante');
	
	//winner = $('#nombre').val();
	//winneremail = $('#email').val();
	winnerrut = $('#rut').val();
	
	$.ajax({
		type: "GET",
		url: "wp-admin/admin-ajax.php",
		dataType: 'html',
		data: ({ action: 'verificaCodigoGanador_already' , code : code , winner : cparticipant , winneremail : cparticipante}),
		success: function(data){
			
			$('#step-2b').addClass('hidden');
			$('#step-3').removeClass('hidden');
			
			//console.log(data);
			
			if(data == '1'){
				$('#winner').removeClass('hidden');
				Cookies.set('wnr', winnerrut , { expires: 21, path: '/' });
				
			}
			else if(data == '2'){
				$('#looser').removeClass('hidden');
			}
			else{
				console.log('wtf?!')
			}
			
			//$('#step-3').html(data);
			
		},
		error: function(data)  
			{  
				console.log("No se pudo verificar el código");
				return false;
			}  

	}); 
	Cookies.set('participant', winnerrut , { expires: 21, path: '/' });
	Cookies.set('participante', cparticipante , { expires: 21, path: '/' });
}

</script>

<?php get_footer()?>