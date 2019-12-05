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
	<body class="bg-light-grey text-dark">
	<?php if(!(isset($meta['section']))){ 
	$meta['section'] = 'index';
	}?>
	
	<div class="bg-white">
		<div class="container pt-3 pb-3">
			<span class="text-dark profile"></span>
			<a class="pr-4 text-no-decoration" href="#">Étudiant</a>
			<a class="pl-4 text-no-decoration" href="#">Tuteur</a>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light">
		<div class="container">
			<a class="navbar-brand" href="#">Entraide-Étudiante.fr</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
				<a class="nav-link" href="#">Accueil</a>
				</li>
				<li class="nav-item active">
				<a class="nav-link" href="#">Qui sommes-nous ?</a>
				</li>
			</ul>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher" />
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
			</form>
			<a class="nav-item" href="#">Mon Compte</a>
			</div>
		</div>
	</nav>
