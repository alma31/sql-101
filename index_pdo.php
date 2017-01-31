<?php 
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root','root');
?>
<?php 
$reponse = $bdd->query('SELECT * FROM mes_chaussettes');
?>
<?php 
while ($donne = $reponse->fetch()) {
?>
	<td><?php echo $donne['id']; ?></td>
	<!-- Pointure : <?php echo $donne['pointure']; ?>
	Couleur : <?php echo $donne['couleur']; ?> -->
<?php 
}
$reponse->closeCursor();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>ID</td>
 			<td>Pointure</td>
 			<td>temp_lavage</td>
 			<td>description</td>
 			<td>Couleur</td>
 			<td>description</td>
 		</tr>
		<td><?php echo $donne['id']; ?></td>
 	</table>
 </body>
 </html>