<b>Liste de Salle</b> <br/>
	<br/>
	<?
		$reqDevis="select * from salle order by num";
		if($_POST["Valider"]=="Toutes"){$reqSalle="select * from salle order by num";}
		
		
		
		$resultSalle=mysql_query($reqSalle);
		
		$border="border-right: 1px solid black;border-bottom:1px solid black;border-top:1px solid black;"
		?>
			<table style="font-size:12px;border-left:1px solid black;" cellspacing="0" cellpadding="1">
				<tr style="border-bottom:1px solid black;">
					<td style="<?=$border?>">Numéro</td>
					<td style="<?=$border?>">Type</td>
					<td style="<?=$border?>">Places</td>
					<td style="<?=$border?>">Prix</td>
				
				</tr>			
		<?
		while($entetedevis=mysql_fetch_assoc($resultDevis))
		{
			$entetedevis["totalQte"]=mysql_result(mysql_query("select sum(qte) as totalQte from salle where numeroDevis='".$entetedevis["num"]."'"),0,"totalQte");
			?>
				<tr>
					<td style="border-right:1px solid black;border-bottom:1px solid black;"><?=$entetedevis["num"]?></td>
					<td style="border-right:1px solid black;border-bottom:1px solid black;"><?=$entetedevis["Type"]?></td>
					<td style="border-right:1px solid black;border-bottom:1px solid black;"><?=$entetedevis["Places"]?></td>
					<td style="border-right:1px solid black;border-bottom:1px solid black;"><?=$entetedevis["prix"]?></td>
					
					
					<td>
						<? 
							if($entetedevis["dateConfirmation"]=="0000-00-00")
							{
							?>
								<form action="enteteDevisModif.php" method="post">
									<input type="hidden" id="numeroDevis" name="numeroDevis" value="<?=$entetedevis["num"]?>" />
									<input type="submit" id="Valider" name="Valider" value="Modifier">
								</form>
								
							<?
							}
						?>
					</td>
					
					
					
					
					
				</tr>
			<?
		}
		?>
			</table>