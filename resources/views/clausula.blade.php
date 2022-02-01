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
		<a href="" title="logo-sena"><img src="images/logo-sena.jpg" width="90" ></a>
		<a href="" title="autorizacion"><img src="images/autorizacion.PNG" alt="" ></a>
		<h3 align="center">CLÁUSULA DE COMPROMISO DE APRENDIZ TECNOACADEMIA MEDELLÍN - 2022 </h3><br />

		<div class="row">
			<div class="col-md-7" align="right">
			</div>
			<div class="col-md-5" align="right">
				<a href="{{ url('clausula1/clausula') }}" class="btn btn-danger">Convertir en PDF</a>
			</div>
		</div>
		<br><br>
		@foreach ($clausula as $registroaprendiz)

		<span>
			<br><br>

            Yo, <strong>{{$registroaprendiz->nombre}} </strong>  <strong>{{$registroaprendiz->apellidos}}</strong>, identificado con <strong>{{$registroaprendiz->tipodoc}}</strong> No <strong>{{$registroaprendiz->numiden}}</strong>  de <strong>{{$registroaprendiz->municipionac}}</strong>, manifiesto mi interés de recibir asesoría por parte del programa Tecnoacademia del  SENA, para la formación científica y desarrollo tecnológico, por lo cual me comprometo a:
            
            <br><br>
            
            1.	Asistir de manera puntual a las reuniones semanales de asesoría acordadas con el respectivo Facilitador.
            <br><br>
            2.	Acatar las normas  de  seguridad establecidas en Tecnoacademia, estipuladas también en el reglamento del aprendiz Sena.
            <br><br>
            3.	Respetar a los facilitadores y demás personas que hacen parte del grupo de Tecnoacademia.
            <br><br>
            4.	Definir un cronograma de trabajo para la elaboración del proyecto conducente al logro de este objetivo en un periodo no mayor que el designado.
            <br><br>
            5.	Suministrar la información necesaria para realizar el diagnóstico inicial del proyecto y proporcionar el acompañamiento por parte del Facilitador designado para la implementación de las acciones de mejoramiento sugeridas.
            <br><br>
            6.	Implementar las recomendaciones para mejoramiento sugeridas y acordadas con el Facilitador.
            <br><br>
            7.	Adelantar las actividades de investigación y tareas asignadas por el Facilitador en cada uno de las fases del proyecto.
            <br><br>
            En caso de que el estudiante de secundaria o aprendiz falte a tres de los compromisos establecidos se dará por entendido que no desea seguir en el proceso y se hará el cierre formal del mismo de acuerdo a lo establecido en el reglamento del aprendiz SENA (Acuerdo 07 del 2012). 
            <br><br>
            Se firma el día ____ del mes _______________ de 2022.
            
            <br><br>
            <strong>{{$registroaprendiz->nombre}}</strong> 
            Aprendiz
            T.I ó C.C
            
            <br><br>

		</span>
		@endforeach
	</div>
</body>

</html>
