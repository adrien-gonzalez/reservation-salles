<html>

<head>
	<link href="reservations.css" rel="stylesheet">
</head>



<body class="planning">

<?php
session_start();


if(isset($_POST['envoyer']))
{
	$_SESSION['id']=$_POST['test'];
	header("Location: reservation.php");
}

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

	$db=mysqli_connect("localhost","root","","reservationsalles");
	mysqli_set_charset($db, "utf8");
	$date="SELECT * FROM reservations";
	$query=mysqli_query($db, $date);
	$result=mysqli_fetch_all($query);
	
?>

<section class="tableaux">

<article class="planningtable">
<table class="BlueTable">
	<thead>
		<tr>
			<th>
			</th>
			<th>
				Lundi
			</th>
			<th>
				Mardi
			</th>
			<th>
				Mercredi
			</th>
			<th>
				Jeudi
			</th>
			<th>
				Vendredi
			</th>
			<th>
				Samedi
			</th>
			<th>
				Dimanche
			</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		for($ligne =8; $ligne <= 19; $ligne++ )
		{
			echo "<tr>";
			echo "<td>".$ligne."</td>";

			for($colonne = 1; $colonne <= 7; $colonne++)
			{
				echo "<td>";
				foreach($result as $value)
				{
				$jour=date("w", strtotime($value[3]));
				$h=date("H", strtotime($value[3]));
				if($h==$ligne && $jour== $colonne)
				{
					echo $value[2];
				?>
					<form method="post">	
						<input name="envoyer" type="submit" value="Détail">
						<input name="test" type="hidden" value="<?php echo $value[0]; ?>">
					</form>	
				<?php					
				}
			}
				echo "</td>";
			}
		}
		echo "</tr>";

?>
	</tbody>
		
</table>


</article>

</section>

</body>

</html>
