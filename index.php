index.php

<form action="action.php" method="post">
*on indique que ce fichier est un "form" qui enverra les informations récupérées sur le serveur*
 <p>Votre nom : <input type="text" name="nom" /></p>

 <p>Votre ville : <input type="text" name="ville" /></p>

 <p>adresse mail : <input type="text" name="mail" /></p>

 <p>Votre numéro de téléphone : <input type="text" name="tel" /></p>

*plus haut chaque ligne collecte une information qu'elle classe par la suite en lui donnant un nom*
 <p><input type="submit" value="OK"></p>
*ici la commmande d'envoi des informations sur le serveur*
</form>
*fermeture de la balise "form" qui signale la fin du formulaire

Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as <?php echo (int)$_POST['age']; ?> ans.

* ces lignes contenant un echo permettent d'envoyer une réponse en affichant des formules enregistrées avec les information s fournies comme l'age ou le nom*