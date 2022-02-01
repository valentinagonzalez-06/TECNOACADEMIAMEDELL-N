<?php

namespace App\Http\Controllers;

use App\Models\Registroaprendiz;
use Illuminate\Http\Request;
use DB;
use PDF;

class clausulaController extends Controller
{
    public function index()
	{
		$clausula = $this->get_pdf_clausula();
		return view('clausula')->with('clausula', $clausula);
	}
    function get_pdf_clausula()
	{
		$clausula= 'DB'::table('registroaprendizs')
			->limit(1)
			->get();
		return $clausula;
	}
	function clausula1()
	{
		$clausula = 'App'::make('dompdf.wrapper');
		$clausula->loadHTML($this->convert_data_to_html());
		return $clausula->stream();
	}
	function convert_data_to_html()
	{
		$clausula = $this->get_pdf_clausula();
		

		foreach ($clausula as $registroaprendiz) {
			$output = '
			<a href="" title="logo-sena"><img src="images/logo-sena.jpg" width="90" ></a>
			<a href="" title="autorizacion"><img src="images/autorizacion.PNG" alt="" ></a>
			<h3 align="center">CLÁUSULA DE COMPROMISO DE APRENDIZ TECNOACADEMIA MEDELLÍN - 2022 </h3><br />
		
		
			<br><br>

			<span>	
			
			Yo,  <strong>'.$registroaprendiz->nombre.' </strong>  <strong>'.$registroaprendiz->apellidos.'  </strong>, identificado con <strong>'.$registroaprendiz->tipodoc.'  </strong>No <strong>'.$registroaprendiz->numiden.'</strong>   de <strong>' . $registroaprendiz->municipionac. '</strong>, manifiesto mi interés de recibir asesoría por parte del programa Tecnoacademia del  SENA, para la formación científica y desarrollo tecnológico, por lo cual me comprometo a:
            
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
				<strong>'.$registroaprendiz->nombre.' '.$registroaprendiz->apellidos.'</strong>
				Aprendiz 
				T.I ó C.C
				
				<br><br>
			 </span>
		
			 
		';
		}

		$output .= '</clausula>';
		return $output;
	}

}
