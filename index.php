index.php

<form action="action.php" method="post">
*on indique que ce fichier est un "form" qui enverra les informations récupérées sur le serveur*
 <p>Votre nom : <input type="text" name="rcnom" /></p>

 <p>Votre ville : <input type="text" name="rcville" /></p>

 <p>adresse mail : <input type="text" name="rcmail" /></p>

 <p>Votre numéro de téléphone : <input type="text" name="rctel" /></p>
	<select name="rcproj" >
*plus haut chaque ligne collecte une information qu'elle classe par la suite en lui donnant un nom*

<label for="rcproj">L'objectif de votre projet</label>
<select name="rcproj" >
  <option value="Wordpress">Wordpress</option>
  <option value="Vue.js">Vue.js</option>
</select><br>
*les 5 lignes au dessus désignent une séction avec box à cocher. On choisi entre les 2 options et on coche celle souhaitée. Par la suite le choix est sauvegardé selon l'opion choisie. 
 <p><input type="submit" name="rcproj" value="OK"></p>
*ici la commmande d'envoi des informations sur le serveur*
</form>
*fermeture de la balise "form" qui signale la fin du formulaire

Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as <?php echo (int)$_POST['age']; ?> ans.

* ces lignes contenant un echo permettent d'envoyer une réponse en affichant des formules enregistrées avec les information s fournies comme l'age ou le nom*