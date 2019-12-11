<html>

<head>
	<link href="reservations.css" rel="stylesheet">
</head>



<body class="planning">

<?php
session_start();

if(isset($_POST['deco']))
{
unset($_SESSION['login']);
unset($_SESSION['password']);	
}

if(isset($_SESSION['login']))
{
?>

<header>
<ul>
  <li><a href="../index.php">Accueil</a></li>
  <li><a href="reservation-form.php">Réservation</a></li>
  
	<div class="form-style-4">
		<form method="post" action="planning.php">
			<input type="submit" name="deco" value="Déconnexion">
		</form>
	</div>
		
</ul>
</header>
<?php
}
else
{
?>
<header>
<ul>
  <li><a href="../index.php">Accueil</a></li>
  <li><a href="connexion.php">Connexion</a></li>
  <li><a href="inscription.php">Inscription</a></li>
</ul>
</header>
<?php	
}

	$connexion= mysqli_connect("localhost", "root", "", "reservationsalles"); 
	$query="SELECT DAYOFWEEK(debut) FROM reservations";
	$query1="SELECT * FROM `utilisateurs` ,`reservations` WHERE utilisateurs.id = id_utilisateur";
	$result= mysqli_query($connexion, $query);
	$result1= mysqli_query($connexion, $query1);
	
	
?>

<section class="tableaux">

<article class="planningtable">
	<table class="blueTable">
		<tr>
		<th></th>
		<th>8h-9h</th>
		<th>9h-10h</th>
		<th>10h-11h</th>
		<th>11h-12h</th>
		<th>12h-13h</th>
		<th>13h-14h</th>
		<th>14h-15h</th>
		<th>15h-16h</th>
		<th>16h-17h</th>
		<th>17h-18h</th>
		</tr>
		
	<tr>
	<th>Lundi</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; echo $row1['id']; ?>	
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="2")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre'];  ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	
	
	
	<tr>
	<th>Mardi</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	</form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="3")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	<tr>
	<th>Mercredi</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="4")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	<tr>
	<th>Jeudi</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="5")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	<tr>
	<th>Vendredi</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="6")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	<tr>
	<th>Samedi</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="7")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	<tr>
	<th>Dimanche</th>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="08:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="09:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="10:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="11:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="12:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="13:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="14:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="15:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>	
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="16:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?>
	</td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	<td><?php while(($row = mysqli_fetch_array($result))&&($row1 = mysqli_fetch_array($result1))){if(($row['DAYOFWEEK(debut)']=="1")&&(SUBSTR($row1['debut'], 11,8)=="17:00:00")){?>
	<?php echo $row1['login']; echo "<br>"; echo $row1['titre']; ?>
	<form method="post">	
		<input name="envoyer" type="submit" value="Détail">
		<input name="test" type="hidden" value="<?php echo $row1['id']; ?>">
	 </form>
	<?php }} ?></td>
	<?php $result= mysqli_query($connexion, $query); $result1= mysqli_query($connexion, $query1);?>
	</tr>
	
	<?php mysqli_close($connexion);?>
	
	<?php
	if(isset($_POST['envoyer']))
	{
	$_SESSION['id']=$_POST['test'];
	header("Location: reservation.php");
	}
	?>
	
	</table>


<?php
if((isset($_SESSION['login']))&&(isset($_SESSION['password'])))
{
?>
	<form method="post" action="reservation-form.php">
		<input type="submit" value="Faire une réservation">
	</form>
<?php	
}
?>
</article>

</section>

</body>

</html>