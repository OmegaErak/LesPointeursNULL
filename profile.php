<?php include "header.php"; ?>
<div class="mt-5 text-dark">
	<div class="container pt-5 pb-5">
		<h2>Connexion</h2>
		<div class="border p-5 border-rounded">
			<?php
			if(isset($_GET["code"])){
				$code = $_GET["code"]; 
			?>	
			<p class="text-warning"><?php echo $alerte[$code];?></p>
			<?php } ?>
			<form action="verifier_connexion.php" method="post">
			<p>Pseudo : 
			<input type="text" name="pseudo" required></p>
			<p>Mot de passe : 
			<input type="password" name="motdepasse" required></p>
			<input type="submit" value="Se connecter">
			</form>
		</div>
	</div>
</div>
<?php
include "footer.php"; ?>