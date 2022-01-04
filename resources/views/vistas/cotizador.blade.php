<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700,800,900|Poppins:400%2C300%2C600%2C500" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/finance.css" type="text/css" />
	
<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />


	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">
	<!-- / -->

	


	<!-- Document Title
	============================================= -->
	<title>PRUCER |  Cotizadot</title>

	<style>

		

		.modal-header { color:#fff !important; background-color: #051737 !important; }

		.close {color:#fff !important;}



.page-menu-item:hover > a, .page-menu-item.current > a {
	background-color: rgb(5, 23, 55);
}

.page-menu-item > a {
	background-color: rgba(0,0,0,0.15);
	color: #fff;
	margin-left: 30px;
}

.botonEnviarGuia {
	border-top:1px solid #dfdfdf;
	text-align: center;
	padding-top:20px;
}

.tit-cotiza {
	padding-top: 30px;
	
}

small{
	color: red; 
}

	
	</style>

</head>

<body class="stretched">

	<div class="tit-cotiza title center">
		<h2>Cotiza</h2>
		

	</div>

	<div class="row shadow bg-light border">

						

							<div class="col-lg-12 p-5">
								<form class="row mb-0" id="fitness-form" action="{{route('cotizador.pdf')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-name">Nombre:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" name="nombreCotizador" id="fitness-form-name" class="form-control required" value="{{old('nombreCotizador')}}" placeholder="Nombre completo">
												@error('nombreCotizador')
													<small>
														*{{$message}}
													</small>
												@enderror
											</div>
										</div>
									</div>

									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-name">Empresa:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" name="empresaCotizador" id="fitness-form-name" class="form-control required" value="{{old('empresaCotizador')}}" placeholder="Nombre de la empresa o razón social">
												@error('empresaCotizador')
												
												<small>
													*{{$message}}
												</small>
												@enderror
											</div>
										</div>
									</div>

									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-name">Marca:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" name="marcaCotizador" id="fitness-form-name" class="form-control required" value="{{old('marcaCotizador')}}" placeholder="Marca comercial">
												@error('marcaCotizador')
												
												<small>
													*{{$message}}
												</small>
												@enderror
											</div>
										</div>
									</div>

									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-name">País:</label>
											</div>
											<div class="col-sm-10">
												<select class="form-control required" name="paisCotizador" id="event-registration-interests" value="{{old('paisCotizador')}}">
											<option value="">-- Selecciona uno --</option>
											<option value="pais 1">País 1</option>
											<option value="pais 2">País 2</option>
											<option value="Videography">País 3</option>
											<option value="VFX Animations">País 4</option>
											<option value="Others">País 5</option>
										</select>
												
										@error('paisCotizador')
										
										<small>
											*{{$message}}
										</small>
										@enderror


											</div>
										</div>
									</div>

									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-phone">Norma:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="normaCotizador" onclick="fluxometrosActivo()" value="Fluxómetros - NOM-005-CONAGUA-1996"><b>Fluxómetros</b> <br><span style="font-size:12px;">NOM-005-CONAGUA-1996</span>
														
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="normaCotizador" onclick="regaderasActivo()" value="Regaderas - NOM-008-CONAGUA-1998"><b>Regaderas</b> <br><span style="font-size:12px;">NOM-008-CONAGUA-1998</span>
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="normaCotizador" onclick="valvulasActivo()" value="Válvulas y grifos - NMX-C-415-ONNCCE-2015"><b>Válvulas y grifos</b> <br><span style="font-size:12px;">NMX-C-415-ONNCCE-2015</span>	
													</label>
												</div>
												@error('normaCotizador')
												<small>
													*{{$message}}
												</small>
												@enderror
											</div>
										</div>
									</div>

									<!-- INICIO FORMULARIO DE REGADERAS -->


									<div id="form_regaderas" class="col-12" style="height:auto; padding:0; margin:0;">

										<!-- SELECCION TRÁMITE -->



										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-phone">Trámite:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="fitness-form-weight-loss" value="Inicial (5 muestras)">Inicial <br> (5 muestras)
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="fitness-form-mass-gain" value="Renovación (5 muestras)">Renovación <br> (5 muestras)
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="fitness-form-athletic-body" value="Vigilancia (5 muestras)">Vigilancia <br> (5 muestras)
													</label>
												</div>
												@error('tramiteCotizador')
												<small>
													*{{$message}}
												</small>
												@enderror
											</div>
										</div>
										</div>

										<!-- SELECCION TIPO -->

										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-phone">Tipo:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="fitness-form-weight-loss" value="Manual">Manual
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="fitness-form-mass-gain" value="Fijo">Fijo
													</label>
												</div>
												@error('tipoCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
										</div>


									</div> <!-- CIERRE DE FORMULARIO FLUXÓMETROS-->



									<!-- INICIO FORMULARIO DE FLUXOMETROS -->


									<div id="form_fluxometros" class="col-12" style="height:auto; padding:0; margin:0;">

										<!-- SELECCION TRÁMITE -->


			


										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fluxo-tramites">Trámite:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="fluxo-tramite1" value="Inicial (3 muestras)">Inicial <br> (3 muestras)
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="fluxo-tramite2" value="Renovación (3 muestras)">Renovación  <br> (3 muestras)
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="fluxo-tramite2" value="Vigilancia (5 muestras)">Vigilancia  <br> (5 muestras)
													</label>	
												</div>
												@error('tramiteCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
										</div>

										<!-- SELECCION TIPO -->

										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-phone">Tipo:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="fluxtipopedestal" value="Pedestal">Pedestal
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="fluxotiposensor" value="Sensor">Sensor
													</label>

													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="fluxotipopalanca" value="Palanca">Palanca
													</label>

													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="fluxotipoMecanico" value="Mecánico">Mecánico
													</label>
												</div>
												@error('tipoCotizador')
													
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
										</div>


									</div> <!-- CIERRE DE FORMULARIO REGADERAS-->


									<!-- INICIO FORMULARIO DE VÁLVULAS -->


									<div id="form_valvulas" class="col-12" style="height:auto; padding:0; margin:0;">

										<!-- SELECCION TRÁMITE -->




										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="valvulas-tramites">Trámite:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="valvulas-tramite1" value="Inicial (3 muestras)">Inicial <br> (3 muestras)
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="valvulas-tramite2" value="Renovación (1 muestra)">Renovación <br> (1 muestra)
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tramiteCotizador" id="valvulas-tramite3" value="Vigilancia (1 muestra)">Vigilancia <br> (1 muestra)
													</label>
												</div>
												@error('tramiteCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
										</div>

										<!-- SELECCION TIPO -->

										<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="valvulas-tipo">Tipo:</label>
											</div>
											<div class="col-sm-10">
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="valvulastipo1" value="Mezcladora">Mezcladora
													</label>
													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="valvulastipo2" value=" Monomando para lavabo">Monomando para lavabo
													</label>

													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="valvulastipo3" value="Monomando para regadera">Monomando para regadera
													</label>


													<label class="btn btn-outline-dark font-body ls0 nott">
														<input type="radio" class="required form-control" name="tipoCotizador" id="valvulastipo4" value="Válvula">Válvula
													</label>
												</div>
												@error('tipoCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
										</div>


									</div> <!-- CIERRE DE FORMULARIO VÁLVULAS-->











									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="fitness-form-email">Email:</label>
											</div>
											<div class="col-sm-10">
												<input type="email" name="emailCotizador" id="cotiza-form-email" class="form-control required" value="{{old('emailCotizador')}}" placeholder="Correo electrónico">
												@error('emailCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
									</div>


									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="cotiza-form-telefono">Teléfono:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" name="telefonoCotizador" id="cotiza-form-telefono" class="form-control required" value="{{old('telefonoCotizador')}}" placeholder="Número de contacto">
												@error('telefonoCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
									</div>



									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="cotiza-form-comentarios">Comentarios:</label>
											</div>
											<div class="col-sm-10" >
												<textarea name="comentariosCotizador" value="{{old('comentariosCotizador')}}" id="formulario-cotiza-comentarios" class="form-control" cols="30" rows="8"></textarea>
												@error('comentariosCotizador')
													<small>
														*{{$message}}
													</small>
													@enderror
											</div>
										</div>
									</div>


									
									<div class="col-12 center">
										<button id="enviar" type="submit" name="botonj-cotizar" class="button button-xlarge font-weight-semibold nott ls0 px-5" style="background-color: #57b99d; color:#fff; border:none; border-radius: 0;">Cotizar </button>
									</div>

								

									
								</form>
								@if(session('info'))
								<script>
									alert("{{session('info')}}"); 
								</script>
								@endif

							</div>

						</div>
</body>


	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/360rotator.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="js/bs-select.js"></script>

	

	<script>


		document.getElementById("form_regaderas").style.display = "none";
		document.getElementById("form_fluxometros").style.display = "none";
		document.getElementById("form_valvulas").style.display = "none";


		function regaderasActivo() {
   			document.getElementById("form_regaderas").style.display = "block";
			document.getElementById("form_fluxometros").style.display = "none";
			document.getElementById("form_valvulas").style.display = "none";
  		}

  		function fluxometrosActivo() {
   			document.getElementById("form_fluxometros").style.display = "block";
			document.getElementById("form_regaderas").style.display = "none";
			document.getElementById("form_valvulas").style.display = "none";
  		}

  		function valvulasActivo() {
   			document.getElementById("form_valvulas").style.display = "block";
			document.getElementById("form_regaderas").style.display = "none";
			document.getElementById("form_fluxometros").style.display = "none";
  		}


	


	</script>


	

</body>
</html>
