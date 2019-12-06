<?php include "header.php"; 
$alerte=array("Mot de passe incorrect. Réessayez.",
				"Désolé, ce pseudo n'existe pas.");
?>
<div class="mt-5 text-dark">
	<div class="container pt-5 pb-5">
		<h2 class="text-center">Connexion</h2>
		<div class="border p-5 border-rounded text-center">
			<?php
			if(isset($_GET["code"])){
				$code = $_GET["code"]; 
			?>	
			<p class="text-warning"><?php echo $alerte[$code];?></p>
			<?php } ?>
			<form action="verifier_connexion.php" method="post">
			<p class="lead">Pseudo : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="pseudo" required></p>
			<p class="lead">Mot de passe : 
			<input type="password" name="motdepasse" required></p>
			<button class="my-2 btn btn-light border border-rounded type="submit" value="Se connecter">Se connecter</button>
			</form>
			<p><a href="inscription.php"><button class="mt-2 btn btn-primary border border-rounded">S'inscrire&nbsp;&raquo;</button></a></p>
		</div>
	</div>
</div>
<?php
include "footer.php"; ?>