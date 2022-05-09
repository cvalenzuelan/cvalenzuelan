<?php
namespace Models;
require_once 'BaseElement.php';

class Job extends BaseElement{
	public function __construct($titulo, $descripcion){
		parent::__construct($titulo, $descripcion);	
	}
	public function obtenermeses(){
		$ano = floor($this->meses / 12);
		$texto_ano = ($ano>0)?"$ano Años":"";
		$resto_meses = $this->meses % 12;
		$texto_meses = ($resto_meses>0)?"$resto_meses Meses":"";
		return "Duración del trabajo: $texto_ano $texto_meses";
	}
}

$job1 = new Job('Full Stack Developer','Tecnologias usadas: PHP, JavaScript, CSS, AJAX, SQL, PostgresQL, Git');
$job1->meses = '146';
// $job1->modificarTitulo('Full Stack Developer');
// $job1->descripcion = 'PHP, JavaScript, CSS, AJAX, SQL, PostgresQL, Git';

$job2 = new Job('Full Stack Developer','Tecnologias usadas: PHP, JavaScript, CSS, SQL, PostgresQL');
$job2->meses = '5';

$job3 = new Job('DBA','Tecnologias usadas: PostgresQL');
$job3->meses = '130';

$jobs =  [
	$job1,$job2,$job3
];

function printjob ($job){
	echo "<li class='work-position'>
	<h5>".$job->obtenerTitulo()."</h5>
	<p>".$job->obtenerDescripcion()."</p>
	<p>".$job->obtenermeses($job->meses)."</p>
	<strong>Achievements:</strong>
	<ul>
		<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
		<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
		<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
	</ul>
	</li>";
}

// function obtenermeses($meses){
// 	$ano = floor($meses / 12);
// 	$texto_ano = ($ano>0)?"$ano Años":"";
// 	$resto_meses = $meses % 12;
// 	$texto_meses = ($resto_meses>0)?"$resto_meses Meses":"";
// 	return "$texto_ano $texto_meses";
// }