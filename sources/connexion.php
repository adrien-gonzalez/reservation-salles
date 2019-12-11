<?php
session_start ();
if(isset($_SESSION['login']))
{
	header ('location: ../index.php');	
}
else
{
?>
<html>

<head>
		<link href="reservations.css" rel="stylesheet">
		<title>Connexion</title>
</head>

<body class="connexion">

<header>
<ul>
  <li><a href="../index.php">Accueil</a></li>
  <li><a href="inscription.php">Inscription</a></li>
</ul>
</header>


<section class="formulaireconnexion">
<div class="form-style-5">
	<form method="post" action="connexion.php">
	<fieldset>
		<legend><span class="rond"></span>Connexion</legend>
	<?php
	
	

if(isset($_SESSION['profil']))
{
unset($_SESSION['login']);
unset($_SESSION['password']);
echo "<br>";	
echo $_SESSION['profil'];
}
unset($_SESSION['profil']);

if((isset($_POST['connexion']))&&(isset($_POST['login']))&&(isset($_POST['password'])))
{

	$connexion= mysqli_connect("localhost", "root", "", "reservationsalles"); 
	$login=$_POST['login'];
	$query="SELECT *from utilisateurs WHERE login='$login'";
	$result= mysqli_query($connexion, $query);
	$row = mysqli_fetch_array($result);
	
	if(password_verify($_POST['password'],$row['password'])) 
	{
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];
	header ('location: ../index.php');
	}
	else
	{	
	?>
	<div class="affichage">
	<?php
	echo "*Login ou Mot de Passe Incorrect(s)";	
	?>
	</div>
	<?php
	}	
}

?>	
			<input placeholder="Login" required name="login" type="text" id="meeting-time">
			<input placeholder="Password" required name="password" type="password" id="meeting-time">	
	</fieldset>
		<input name="connexion" type="submit" value="Connexion" />
	</form>
</div>
</section>

	</body>
</html>

<?php
}
?>
