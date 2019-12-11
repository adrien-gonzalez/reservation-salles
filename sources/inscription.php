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
		<title>Inscription</title>
</head>

<body class="inscription">

<header>
<ul>
  <li><a href="../index.php">Accueil</a></li>
  <li><a href="connexion.php">Connexion</a></li>
</ul>
</header>



<section class="formulaire">
<div class="form-style-5">
	<form method="post" action="inscription.php">
	<fieldset>
		<legend><span class="rond"></span>Inscription</legend>
	<?php
	
	if(isset($_POST['inscription']))
	{
	$connexion= mysqli_connect("localhost", "root", "", "reservationsalles"); 
	$login=$_POST['login'];
	$checkdups="SELECT  *from utilisateurs WHERE login='$login'";
    $checkdups2=mysqli_query($connexion, $checkdups) or die(mysqli_error($connexion));
    $checkdups3=mysqli_num_rows($checkdups2);
		
	if((($_POST['password']!=$_POST['passwordagain'])||($checkdups3>0))||(strlen($_POST['password'])< 5))
	{
		if(($_POST['password']!=$_POST['passwordagain'])&&($checkdups3>0))
		{
			?>
			<div class="affichage">
			<?php
			echo"*Mots de passes rentrés différents";
			?>
			</div>
			<div class="affichage">
			<?php
			echo"*Veuillez renseigner un autre login";
			mysqli_close($connexion);
			?>
			</div>
			<?php
		}
		else if((strlen($_POST['password'])< 5)&&($checkdups3>0))
		{  
			?>
			<div class="affichage">
			<?php
			echo"*Veuillez renseigner un autre login";
			?>
			</div>
			<div class="affichage">
			<?php
			echo"*Mots de passes trop courts";
			echo" 5 caractères minimum";
			mysqli_close($connexion);
			?>
			</div>
			<?php			
		}	
		else if($checkdups3>0)
		{	  
			?>
			<div class="affichage">
			<?php
			echo "*Veuillez renseigner un autre login";
			?>
			</div>
			<?php
			mysqli_close($connexion);	
		}
		else if($_POST['password']!=$_POST['passwordagain'])
		{  
			?>
			<div class="affichage">
			<?php
			echo"*Mots de passes rentrés différents";
			mysqli_close($connexion);
			?>
			</div>
			<?php			
		}
		else if(strlen($_POST['password']< 5))
		{  
			?>
			<div class="affichage">
			<?php
			echo"*Mots de passes trop courts";
			echo " 5 caractères minimum";
			mysqli_close($connexion);
			?>
			</div>
			<?php			
		}	
	}	
	else
	{	

			$hash = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);					
			$connexion= mysqli_connect("localhost", "root", "", "reservationsalles"); 
			$query = 'INSERT INTO `utilisateurs`(`login`,`password`)VALUES
			("'.$_POST['login'].'", "'.$hash.'");';		
			mysqli_query($connexion, $query);		 
			mysqli_close($connexion);
			header('Location: connexion.php');	
			
			
	}
}

?>
	
			<input placeholder="Login" required name="login" type="text" id="meeting-time">
			<input placeholder="Password  (5 caractères minimum)" required name="password" type="password" id="meeting-time">	
			<input placeholder="Confirm Password" required name="passwordagain" type="password" id="meeting-time">			
	</fieldset>
		<input name="inscription" type="submit" value="Inscription" />
	</form>
</div>
</section>

	</body>
</html>

<?php
}
?>