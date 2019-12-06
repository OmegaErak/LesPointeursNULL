<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta charset="utf-8" />
		<title>Entraide Étudiante</title>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<link rel="stylesheet" href="static/css/additional.css" />
	</head>
	<body class="bg-white text-dark">
	<?php if(!(isset($meta['section']))){ 
	$meta['section'] = 'index';
	}?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-black text-white no-margin">
		<div class="container">
			<a class="navbar-brand" href="#">Entraide-Étudiante.fr</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
			<a class="nav-item text-white ml-auto" href="#">Mon Compte</a>
			</div>
		</div>
	</nav>
