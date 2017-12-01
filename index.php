<!DOCTYPE html>
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta content="Plataforma virtual" name="description">
	<meta content="informatica mdpp" name="author">
	<title>Plataforma virtual</title>
	<link rel="shortcut icon" href="./img/favicon.ico">
	<meta name="viewport" content="width=device-width; initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/css-custom">
	<link rel="stylesheet" type="text/css" href="./css/lista.css">	
	<link rel="stylesheet" type="text/css" href="./css/form.css">	
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>	
    <script type="text/javascript">
        $("document").ready(function(){
            /*alert("jquery esta listo");*/
            /*alert($("#ingerencia").val());*/
            $( "#ingerencia" ).load( "phps/gerencias.php" );
            $( "#ingerencia" ).change(function(){
                var id = $("#ingerencia").val();
                $.get("phps/procedimientos.php",{param_id:id})
                .done(function(data){
                    $("#inProcedimiento").html(data);
                })
            })
            $( "#inProcedimiento" ).change(function(){
                var id   = $("#ingerencia").val();
                var proc = $("#inProcedimiento").val();
                $.get("phps/subprocedimientos.php",{param_id:id,param_proc:proc})
                .done(function(data){
                    $("#inSubproce").html(data);
                })
            })
            $( "#inSubproce" ).change(function(){
                var id   = $("#ingerencia").val();
                var proc = $("#inProcedimiento").val();
                var subp = $("#inSubproce").val();
                $.get("phps/detalle.php",{param_id:id,param_proc:proc,param_sub:subp})
                .done(function(data){
                    $("#detalles").html("<div class='form_box form'><div class='hide'><input type='hidden' name='id56_hf_0' id='id56_hf_0'></div><h4>Aviso</h4><p class='fields'><label class='label1'>"+data+"</label></p></div>");
                })
            })
        })
    </script>
</head>

<body><div id="_AF_HSS_extension_installed" style="display: none !important;"></div>

	<div class="wrapper">
		<header class="header">
		
           	<section class="topbar">
				<div class="center">
				
					<p class="sede">Plataforma virtual</p>
					<div class="topbar_options">
						<ul>
							<!--<li class="webmap"><a href="http://www.munipuentepiedra.gob.pe/obras-iniciadas/portal-de-transparencia"><span>Transparencia</span></a></li>-->
						</ul>
					</div>
					 
				</div>
			</section>
			
			<section class="navbar">
				<div class="center">
					<h1 class="logoAyto"><a href="index.php"><img alt="Municipalidad de puente piedra" src="http://virtual.munipuentepiedra.gob.pe/consultatramite/img/logo_muni.png" style="height:48px;width:240px;margin-bottom:10px;"></a></h1>
				</div>
			</section>
			
			<section>

	<div style="background: none" class="banner">
		<div class="center">
			<img alt="" src="img/fondo.jpg">
		</div>
	</div>
</section>
		</header>
		
		<section class="content clearfix">
			<div class="center">
				<div>

	<ul class="breadcrumbs">
		<li><a href="http://www.munipuentepiedra.gob.pe/">Inicio</a></li>
		<li><a href="http://virtual.munipuentepiedra.gob.pe/">Plataforma Virtual</a></li>
		<li><span><em>TUPA</em></span></li>
	</ul>

</div>
				
	<div class="content_int">
					

	<header>
		<h2>
			CONSULTA TUPA
		</h2>
	</header>

	<div id="id55">

		<div   class="form_box form">
		<div class="hide">
			<input type="hidden" name="id56_hf_0" id="id56_hf_0">
		</div>

		<h4>
			Aviso
		</h4>

		<p class="fields">
			<label class="label1">RECUERDA: Puedes elegir la opcion segun lo que buscas comenzando por la gerencia respectiva</label>
		</p>
		
	</div>
	
	
	
	<form id="id56" name="formu" action="" method="post" class="form_box form">
		<div class="hide">
			<input type="hidden" name="id56_hf_0" id="id56_hf_0">
		</div>

		<h4>
			Buscar
		</h4>
	
		<p class="fields">
			<label class="label">Gerencia</label> 
			<span class="field">
				<select id="ingerencia" name="type">
					<option selected="selected" value="">Seleccione uno</option>
					<option value="OPEN_SINGLE_CRITERION">Abierto 1 criterio</option>
					<option value="OPEN_MULTI_CRITERION">Abierto varios criterios</option>
				</select>
			</span>
		</p>
		
		<p class="fields">
			<label class="label">Procedimiento</label> 
			<span class="field">
				<select id="inProcedimiento" name="type">
					<option value="0">- Seleccione su Procedimiento -</option>
				</select>
			</span>
		</p>
		
		<p class="fields">
			<label class="label">Sub Procedimiento</label> 
			<span class="field">
				<select id="inSubproce" name="type">
					<option value="0" >- Seleccione su Sub Procedimiento -</option>
				</select>
			</span>
		</p>		
		
		
		
	</form>



		
			<div id="detalles"></div>
	
	
	
	
		

</div>

	<p>
		
	</p>


				</div>
			</div>
		</section>
		
	</div>
	
	<footer>
				
	<div class="center">
		<ul class="logos">
			<li><img src="./img/logo_muni.gif"></li>
		</ul>
		<div class="stamp"><img alt="" src="./img/blank.png"></div>
		<p class="info">
			Calle 9 de Junio N° 100 - Cercado de Puente Piedra
			<br>
			Tlf.:
			219 - 6200
			Línea Gratuita:
			0800-26200
			<br>
			Email:
			<a target="_blank" href="mailto:webmaster@munipuentepiedra.gob.pe">webmaster@munipuentepiedra.gob.pe</a>
			Dirección web:
			<a target="_blank" href="http://www.munipuentepiedra.gob.pe/">http://www.munipuentepiedra.gob.pe/</a>
		</p>
		<div class="footer_right">
			<ul class="footer_links">
				<li><a href="http://www.munipuentepiedra.gob.pe/index.php?option=com_content&view=article&id=12">Procedimientos Administrativos</a></li>
				<li><a href="http://www.munipuentepiedra.gob.pe/index.php?option=com_content&view=article&id=167">Sistema de control interno</a></li>
				<li><a href="http://www.munipuentepiedra.gob.pe/index.php?option=com_content&view=article&id=45">Libro de reclamaciones</a></li>
			</ul>
		</div>
	</div>
</footer>

</body></html>