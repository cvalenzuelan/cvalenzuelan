<?php
namespace Models;
require_once 'BaseElement.php';

class Project extends BaseElement{

}

$project1 = new Project('Proyecto 1','Descripcion del Proyecto actual');
$project1->meses = '126';
$project2 = new Project('Proyecto 2','Descripcion del Proyecto antiguo');
$project2->meses = '120';

$projects=[
	$project1,$project2
];

function printproject ($job){
	echo "<div class='project'>
		<h5>".$job->obtenerTitulo()."</h5>
		<div class='row'>
			<div class='col-3'>
				<img id='profile-picture' src='https://ui-avatars.com/api/?name=John+Doe&size=255' alt=''>
			</div>
			<div class='col'>
				<p>".$job->obtenerDescripcion()."</p>
				<p>".$job->obtenermeses($job->meses)."</p>
				<strong>Technologies used:</strong>
				<span class='badge badge-secondary'>PHP</span>
				<span class='badge badge-secondary'>HTML</span>
				<span class='badge badge-secondary'>CSS</span>
			</div>
		</div>
	</div>";
}