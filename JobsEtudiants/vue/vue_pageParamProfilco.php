<?php 
	include "vue_entete.php";
 ?>

<?php
session_start();

mysql_connect('localhost', 'root', '');
mysql_select_db('gestioncv') or die('Impossible de sélectionner une base de données. Assurez-vous d\'avoir correctement rempli les infos de connexion.');
?>


modifier-profil.php
<?php
require_once('lib.php');

if(isset($_GET['idmembre']))
{
// On place dans une variable l'id transmit dans l'url
$idmembre = (int)$_GET['idmembre']; //anti-injections !

//On sélectionne tout dans la table correspondant à l'id
$result mysql_query("SELECT * FROM membre WHERE idmembre $idmembre");
$affiche_data  = mysql_fetch_assoc($result);
?>
<form action="modifier-profil.php?idmembre=<?php echo $idmembre;?>" method="post">
   nom:

" type="text" />


   prenom:

" type="text" />

 
   
</form>
<?php
}
//Si l'action de Modifier à été faite (bouton "Modifier" du formulaire)
else if(isset($_POST['Modifier']))
{
 
//On attribue une variable pour chaque champ du formulaire
//commentaire
$nom = mysql_real_escape_string($_POST['nom']);
//email
$prenom = mysql_real_escape_string($_POST['prenom']);

//TODO: filtrer XSS

//On enregistre les données modifiées
$result = mysql_query("UPDATE membre SET nom='$nom', prenom='$prenom' WHERE idmembre=$idmembre");
//Si il y a une erreur, on crie ^^
if (!$result) die('Requête invalide : ' . mysql_error());
//Si tout va bien, on informe que la modification est faite
echo 'La modification à été effectué avec succès. [gestion-abonne.php Retour à l\'administration.]

';
}

//Fermeture de la connexion à la base de données
mysql_close();

?>
