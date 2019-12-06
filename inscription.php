<?php
include "header.php";
?>
<div class="mt-5 text-dark">
	<div class="container pt-5 pb-5">
		<h2 class="text-center">Inscription</h2>
		<div class="border p-5 border-rounded lead text-center">

		<?php 
		if(isset($_GET["inscriptionreussie"])){
			$inscriptionreussie = $_GET["inscriptionreussie"];
			if($inscriptionreussie == 0){
				if($inscriptionreussie==0){
					?>
					<p class="text-danger">Pseudo indisponible.</p>	
				<?php
				}
			}else{
			}
		}		
		?>
		<form action="enregistrer_membre.php" method="post">
		<p>Pseudo : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="pseudo" required></p>
		<p>Mot de passe : 
		<input type="password" name="motdepasse" required=""></p>
		<p>Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="email" ></p>
		<button class="my-2 btn btn-light border rounded" type="submit" value="S'inscrire">S'inscrire</button>
		</form>
		</div>
	</div>
</div>

<?php
include "footer.php";
?>
