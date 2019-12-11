<html>

<head>
		<link href="sources/reservations.css" rel="stylesheet">
		<title>Accueil</title>
</head>

<body class="accueil">

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
  <li><a href="sources/reservation-form.php">Réservation</a></li>
  <li><a href="sources/planning.php">Planning</a></li>
  <li><a href="sources/profil.php">Profil</a></li>
   
   <div class="form-style-4">
		<form method="post" action="index.php">
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
  <li><a href="sources/inscription.php">Inscription</a></li>
  <li><a href="sources/connexion.php">Connexion</a></li>
   <li><a href="sources/planning.php">Planning</a></li>
</ul>
</header>


<?php
}
?>
<section>
	<article>
		<h1 class="titreaccueil">Réservez votre salle</h1>
		<h1 class="titreaccueil">à La Plateforme_</h1>
	
<div class="photossalles">
	<a href="sources/planning.php"><img class="zoom" src="img/salle1.jpg" width="90%"></a>
	<a href="sources/planning.php"><img class="zoom" src="img/salle2.jpg" width="90%"></a>
	<a href="sources/planning.php"><img class="zoom" src="img/salle3.jpg" width="90%"></a>

</div>
	</article>
	<article class="photosplateforme">

<h1 class="titreaccueil">Quelques photos</h1>
<div class="photos">

	<img src="img/entree.jpg" width="20%" height="20%">
	<img src="img/photogroupe.jpg" width="40%" height="20%">
	<img src="img/soutien.jpg" width="20%"  height="30%">


</div>

	</article>
</section>


<footer>

<div class="footer">
	<img src="img/logo.jpg" width="10%">
	<p>Tel : 04.84.89.43.69 - contact@laplateforme.io</p>
	<p>2019 © La Plateforme_. Tous droits réservés.</p>
</div>

</footer>
	</body>
</html>