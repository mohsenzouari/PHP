<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Page protégée par mot de passe</title>
</head>
<body>
<?php

// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['Mot_de_passe']) OR $_POST['Mot_de_passe'] != "kangourou")
{
?>	
	<p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur centrall :</p><br/>
	<form action="traitement_sur_un_seul_page.php" method="post">
		<p>Mot de passe :</p>
		<p><input type="password" name="Mot_de_passe"> </p>
		<p><input type="submit" value="Envoyer"></p>

	</form>
<?php
}
// Le mot de passe a été envoyé et il est bon
else
{
?>	<h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        Merci.
        </p>
<?php
}

?>
</body>
</html>