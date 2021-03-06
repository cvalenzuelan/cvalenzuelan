<?php
namespace Models;
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'vendor/autoload.php';
require_once 'Models/Job.php'; // Se deben mantener ya que el php.ini apunta a otro DIR
require_once 'Models/Project.php'; // Se deben mantener ya que el php.ini apunta a otro DIR

use Models\Job;
use Models\Project;
use Models\Printable;

$nombre = 'Cristian Valenzuela Neira';

$size_jobs = count($jobs);
$size_proyect = count($projects);

?>
<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<title>Proyecto</title>
</head>
<body>
	<div class="container">
		<div id="resume-header" class="row">
			<div class="col-3">
				<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
				</div>
				<div class="col">
				<h1><?php echo 'Cristian Valenzuela'; ?></h1>
				<h2>Full Stack Developer</h2>
				<ul>
					<li>Mail: </li>
					<li>Phone: +569</li>
					<li>LinkedIn: www.linkedin.com/in/cristian-valenzuela-39232060</li>

				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2 class="border-bottom-gray" >Carrer Summary</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div>
					<h3 class="border-bottom-gray" >Work Experience</h3>
					<ul>
						<?php for ($i=0; $i < $size_jobs; $i++) { 
							printjob ($jobs[$i]);
						} ?>
					</ul>
				</div>
				<div>
					<h3 class="border-bottom-gray">Projects</h3>
					<?php for ($i=0; $i < $size_proyect; $i++) { 
						printproject ($projects[$i]);
					} ?>
					<!-- <div class="project">
						<h5>Project X</h5>
						<div class="row">
							<div class="col-3">
								<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
							</div>
							<div class="col">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
								<strong>Technologies used:</strong>
								<span class="badge badge-secondary">PHP</span>
								<span class="badge badge-secondary">HTML</span>
								<span class="badge badge-secondary">CSS</span>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-3">
				<h3 class="border-bottom-gray" >Skills & Tools</h3>
				<h4>Backend</h4>
				<ul>
					<li>PHP</li>
					<li>SQL</li>
				</ul>
				<h4>Frontend</h4>
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>AJAX</li>
				</ul>
				<h4>Frameworks</h4>
				<ul>
					<li>Laravel</li>
					<li>Bootstrap</li>
				</ul>
				<h4>Herramientas</h4>
				<ul>
					<li>Git</li>
				</ul>
				<h3 class="border-bottom-gray" >Languages</h3>
				<ul>
					<li>Spanish</li>
					<li>English</li>
				</ul>
			</div>
		</div>
		<div id="resume-footer" class="row">
		<div class="col">
			Designed by @CValenzuelaN
		</div>
		</div>
  	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
		crossorigin="anonymous"></script>
</body>
</html>
