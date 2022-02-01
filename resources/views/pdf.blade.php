<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.box {
			width: 600px;
			margin: 0 auto;
		}
	</style>
</head>

<body>
	<br />
	<div class="container">
		<a href="" title="logo-sena"><img src="images/logo-sena.jpg" width="90"></a>
		<a href="" title="autorizacion"><img src="images/autorizacion.PNG" alt=""></a>
		<h3 align="center">Autorización de Acudiente del Aprendiz </h3><br />

		<div class="row">
			<div class="col-md-7" align="right">
			</div>
			<div class="col-md-5" align="right">
				<a href="{{ url('pdf1/pdf') }}" class="btn btn-danger">Convertir en PDF</a>
			</div>
		</div>
		<br><br>


		@foreach ($pdf as $registroaprendiz)

		<span>
			<center> Ciudad y Fecha:</center>
			Señores
			<br>

			<strong> TECNOACADEMIA MEDELLÍN </strong>
			<br>

			Servicio Nacional De Aprendizaje
			<br>
			Regional Antioquia

			<br><br>


			Yo <strong>{{$registroaprendiz->nombreapell}}</strong>
			identificado(a) con cédula de ciudadanía
			<strong>{{$registroaprendiz->numeroCedula}}</strong>, acudiente
			responsable del aprendiz
			<strong>{{$registroaprendiz->nombre}}</strong> identificado con
			documento de identidad número
			<strong>{{$registroaprendiz->numiden}}</strong> ,autorizo para que
			asista al programa de
			Tecnoacademia a las sesiones teórico - prácticas durante el año
			2022. Además consiento a su participación:
			<br><br>

			1. El uso de imágenes o videos que en este programa se registren
			para la realización y divulgación de material informativo, académico
			o de evidencia.

			<br><br>


			2. La divulgación, publicación o difusión parcial o total de los
			productos o resultados desarrollados en el proceso de formación e
			investigación del programa Tecnoacademia Medellín con el aprendiz en
			mención, haciendo siempre énfasis a su aporte en la investigación o
			proceso de formación.


			<br><br>

			Atentamente:

		</span>
		@endforeach
	</div>
</body>

</html>