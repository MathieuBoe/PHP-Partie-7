<?php

$title = 'Exercice5';

include 'header.php';?>
<form action="Exercice5.php" method="get"></form>
<fieldset></fieldset>
<select name="civilite" id="civilite">
    <option value="">Choisissez votre genre</option>
    <option value="Monsieur">Monsieur</option>
    <option value="Madame">Madame</option>
</select>
</fieldset>
<fieldset><input type="text" name="nom" id="nom" placeholder="nom"></fieldset>
<fieldset><input type="text" name="prenom" id="prenom" placeholder="prenom"></fieldset>
<input type="submit" value="Envoyer">
<?php include 'footer.php';?>