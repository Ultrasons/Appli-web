<?php
				$reqUtilisateurs="select * from responsable where login='".$_POST["login"]."' and Mdp='".$_POST["Mdp"]."'";
		$resultUtilisateurs=mysql_query($reqUtilisateurs);
		$nbUtilisateurs=mysql_num_rows($resultUtilisateurs);
		if(
			($nbUtilisateurs<>0)
			and($_POST["login"]==mysql_result($resultUtilisateurs,0,"login"))
			and($_POST["%Mdp"]==mysql_result($resultUtilisateurs,0,"Mdp"))
			and (!empty($_POST["login"]))
			and (!empty($_POST["Mdp"])) 
			)
?>
		
		<div style="position:absolute;border:1px solid #dedede;left:100px;top:100px;width:300px;height:100px;padding:10px;display:block-inline;">
				<form method="post">
					Connexion<br/>
					<div style="width:100px;float:left;">Login</div>
					<input type="text" id="login" name="login" value="">
					<br/>
					<div style="width:100px;float:left;">Mot de passe</div>
					<input type="text" id="Mdp" name="Mdp" value=""><br/>
					<br/>
					<input class="aqua-blue" type="submit" id="Entrer" name="Entrer" value="Entrer">
				</form>
			</div>
			