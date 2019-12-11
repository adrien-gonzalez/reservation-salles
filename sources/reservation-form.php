
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

<html>

<head>
		<link href="reservations.css" rel="stylesheet">
		<title>Réservation</title>
</head>

<body class="reservation">
	
<?php





?>
<header>
<ul>
		<li><a href="../index.php">Accueil</a></li>
		<li><a href="planning.php">Planning</a></li>
		
		<div class="form-style-4">
		<form method="post" action="reservation-form.php">
			<input type="submit" name="deco" value="Déconnexion">
		</form>
		</div>
</ul>
</header>	
	

<article class="formulairereservation">	
<div class="form-style-5">
	<form method="post">
	<fieldset>
		<legend><span class="rond"></span>Réservation de salle</legend>
	
<?php
	
	
	
	$date1= date("Y-m-d");
	$date2= date("H:i");
	$date = $date1."T".$date2;
	
	if(isset($_POST['Ajouter']))
	{
	$debut1= SUBSTR($_POST['datedebut'], 8, 2);
	$fin1 = SUBSTR($_POST['datefin'], 8, 2);
	$difference2=$fin1-$debut1;
	
	$heuredebut= SUBSTR($_POST['datedebut'],14, 2);
	$heurefin= SUBSTR($_POST['datefin'],14, 2);
		
	$debut=$_POST['datedebut'];
	$connexion= mysqli_connect("localhost", "root", "", "reservationsalles");
	$query="SELECT *FROM reservations WHERE debut='$debut'";
	$result= mysqli_query($connexion, $query);
	$resultat=mysqli_num_rows($result);
		
	$heure1=SUBSTR($_POST['datedebut'], 11, 2);
	$heure2=SUBSTR($_POST['datefin'], 11, 2);
	$difference= $heure2 - $heure1;
	$min="08";
	$max="19";
		if(($resultat>0)||($difference != 1)||($min > $heure1)||($max < $heure2)||($difference2 != 0)||($heuredebut != "00")||($heurefin != "00"))
		{
		if($resultat>0){
		?>
		<p class="affichage">
		<?php
		echo "*Créneaux déjà réservé";
		?>
		</p>
		<?php
		}
		if(($heurefin != "00")||($heuredebut != "00")){
		?>
		<p class="affichage">
		<?php
		echo "*Heure pile seulement (ex : 08:00-09:00)";
		?>
		</p>
		<?php
		}
		if($difference != 1)
		{
		?>
		<p class="affichage">
		<?php
		echo "*Créneaux d'une heure seulement";
		?>
		</p>
		<?php	
		}
		if($difference2 != 0)
		{
		?>
		<p class="affichage">
		<?php
		echo "*Date début et fin  différente !";
		?>
		</p>
		<?php	
		}
		if($min > $heure1)
		{
		?>
		<p class="affichage">
		<?php
		echo "*Heure minium de 8h";
		?>
		</p>
		<?php		
		}
		if($max < $heure2)
		{
		?>
		<p class="affichage">
		<?php
		echo "*Heure maximum de 19h";
		?>
		</p>
		<?php		
		}
		}		
		else
		{
		$login=$_SESSION['login'];
		$query1="SELECT  id from utilisateurs WHERE login='$login'";
		$result1= mysqli_query($connexion, $query1);
		$row = mysqli_fetch_array($result1);
		
		$query2="INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`)  VALUES (NULL, '".$_POST['titre']."', '".$_POST['description']."', '".$_POST['datedebut']."', '".$_POST['datefin']."', '".$row['id']."');";
		$result2= mysqli_query($connexion, $query2);
		header ('location: planning.php');
		}
}
?>
			<input required type="text" name="titre" placeholder="Titre *">
			<textarea name="description" placeholder="Description *"></textarea>
		<label>Début :</label>
			<input required name="datedebut" type="datetime-local" id="meeting-time"  min="<?php echo $date ?>">
		<label>Fin :</label>
			<input required name="datefin" type="datetime-local" id="meeting-time" min="<?php echo $date ?>">	
	</fieldset>
	<?php
	if(isset($_SESSION['login']))
	{
	?>
		<input name="Ajouter" type="submit" value="Réserver" />
	<?php
	}
	?>
	</form>
</div>
</article>

</body>
</html>

<?php
}
else
{
header ('location: connexion.php');	
}
?>