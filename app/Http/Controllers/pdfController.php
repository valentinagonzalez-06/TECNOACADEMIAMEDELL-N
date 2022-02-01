<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class pdfController extends Controller
{
	public function index()
	{
		$pdf= $this->get_pdf_autorizacion();
		return view('pdf')->with('pdf', $pdf);
	}

	function get_pdf_autorizacion()
	{
		$pdf = 'DB'::table('registroaprendizs')
			->limit(1)
			->get();
		return $pdf;
	}

	function pdf1()
	{
		$pdf = 'App'::make('dompdf.wrapper');
		$pdf->loadHTML($this->convert_data_to_html());
		return $pdf->stream();
	}

	function convert_data_to_html()
	{
		$pdf = $this->get_pdf_autorizacion();
		

		foreach ($pdf as $registroaprendiz) {
			$output = '
			<a href="" title="logo-sena"><img src="images/logo-sena.jpg" width="90" ></a>
			<a href="" title="autorizacion"><img src="images/autorizacion.PNG" alt="" ></a>
			<h3 align="center">Autorización de Acudiente del Aprendiz </h3><br />
		
		
			<br><br>

			<span>
			                                                        <center> Ciudad y Fecha: </center>
			 Señores                                                    
			 <br><br>
			 <strong> TECNOACADEMIA MEDELLÍN </strong>
             <br><br>
			 Servicio Nacional De Aprendizaje
			 <br><br>
			 Regional Antioquia


			 <br><br><br>
			
			 Yo <strong>' . $registroaprendiz->nombreapell . '</strong> identificado(a) con cédula de ciudadanía<strong>
			 ' . $registroaprendiz->numeroCedula . '</strong>, acudiente responsable del aprendiz <strong>' . $registroaprendiz->nombre . '</strong> identificado con documento de identidad número
			 <strong>' . $registroaprendiz->numiden . '</strong>, autorizo para que asista al programa de
			 Tecnoacademia a las sesiones teórico - prácticas durante el año 2022. Además consiento a su participación:
			  <br><br>

		      1. El uso de imágenes o videos que en este programa se registren para la realización y divulgación de material informativo, académico o de evidencia.
		     <br><br>

		     2. La divulgación, publicación o difusión parcial o total de los productos o
		     resultados desarrollados en el proceso de formación e investigación del programa Tecnoacademia Medellín con el aprendiz en mención, 
		     haciendo siempre énfasis a su aporte en la investigación o proceso de formación.

			 <br><br>

					Atentamente: 
			 </span>
		
			 
		';
		}

		$output .= '</pdf>';
		return $output;
	}
}
