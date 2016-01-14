<?php get_header()?>
<?php $participant = $_COOKIE['participant']?>
<?php $wnr = $_COOKIE['wnr']?>
<div id="head">
	<div class="container">
		<div class="row">
        	
        	<div id="step-1" class="paso">
            
            	<h3>Penta Security tiene para ti 1000 chalecos reflectantes, que se sortearán con códigos diarios</h3>
            	
                <img src="<?php echo get_bloginfo('template_directory')?>/images/chaleco.png" alt="">
                <div class="clear"></div>
            	<label for="winnercode">Ingresa el código</label>
                <small>ingrese el código secreto de 4 dígitos para concursar por un chaleco reflectante</small>
                <div class="clear"></div>
            	<input type="text" name="winnercode" id="winnercode">
                <div class="clear"></div>
                <label for="">Rut</label>
                <input type="text" name="rut" id="rut" placeholder="12.345.678-5">
                <div class="clear"></div>
                <div class="btn btn-default" onClick="paso2()">Paso 2</div>
            </div>
            
            <div id="step-2" class="paso hidden">
               	<?php echo do_shortcode('[contact-form-7 id="12" title="Inscribe"]')?>
            </div>
            <div id="step-2a" class="paso hidden already">
            	<h1>Usted ya ganó, no sea barsa y cómprese otro si quiere más</h1>
            </div>
            <div id="step-2b" class="paso hidden already">
            	<h1>Usted ya participó y tenemos sus datos, </h1>
                <div class="btn btn-default" onClick="verificaCodigoGanador_already()">Verificar Código</div>
            </div>
            
        	<div id="step-3" class="paso hidden">
            	<div id="winner" class="hidden">
                	<h1>Ganaste CTM</h1>
                    <h2>El código ingresado es correcto, felicitaciones</h2>
                    <pre><?php //var_dump($chalequitocode)?></pre>
                </div>
            	<div id="looser" class="hidden">
                	<h1>Lo sentimos</h1>
                	<h2>El código ingresado no existe o ya fue entregado</h2>
                </div>
            </div>
            
        	<div id="step-4" class="paso hidden"></div>
            
        	<div id="step-5" class="paso hidden"></div>
        </div>
	</div>
</div>


<main>
	<div class="megacontainer">
		<div class="row">
        	
                 
        </div>
	</div>
</main>

<style>
.paso{ padding:300px 100px}
</style>

<script>

jQuery(function($) {
    jQuery("#rut").Rut({
       format_on: 'keyup',
       validation:true,
       on_error: function(){$('#ModalChat .wpcf7-submit').prop('disabled', true); $('#ModalChat #rerror').css('display' , 'inline-block')},
       on_success: function(){$('#ModalChat .wpcf7-submit').prop('disabled', false); $('#ModalChat #rerror').css('display' , 'none')}
    })
  });

function paso2(){
	
	participant = $('#rut').val();
	cparticipant = Cookies.get('participant');
	cwinnerrut = Cookies.get('wnr');
	
	code = $('#winnercode').val();
	if(!code){
	
		alert('ingrese código');
	
	} else if (code.length < 4) {
		
		alert('el codigo debe de ser de 4 dígitos');
		
	} else {
		
		if(participant == cwinnerrut && cparticipant == participant){
			$('#step-1').addClass('hidden');
			$('#step-2a').removeClass('hidden');
			$('#codigo').val(code);
		}else if(participant != cwinnerrut && cparticipant == participant){
			$('#step-1').addClass('hidden');
			$('#step-2b').removeClass('hidden');
			$('#codigo').val(code);
		}else{
			$('#step-1').addClass('hidden');
			$('#step-2').removeClass('hidden');
			$('#codigo').val(code);
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