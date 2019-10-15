<?php 
	include "vue_entete.php";
 ?>
<html>
<body>
	<h2>
<div id= "Corps" class="float-right">
	<form action="controleur.php" method="post">
    <div>
    	<h2> Envoyez nous vos questions...</h2><br>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="name">Prenom :</label>
        <input type="text" id="name" name="user_prenom">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Civilité :</label>
        <textarea id="msg" name="user_civil"></textarea>
    </div>
     <div>
        <label for="msg">Commentaire :</label>
        <textarea id="msg" name="user_commentaire"></textarea>

    </div>
    <input type="submit" name="valider" value="Envoyer"/>
</form>	
</h2>
<div>
<h2 align="left">Nous contacter...</h2><br>
<h2 align="left">Mail du Site :</h2><br>
<h3 align="left">Mail Administrateur 1 :</h3><br>
<h3 align="left">Mail Administrateur 2 :</h3><br>
<h3 align="left">Mail Adminsitrateur 3 :</h3><br>

</div>
</body>

</html>
