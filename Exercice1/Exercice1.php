<?php 
$title = 'Exercice1';

include 'header.php'; ?>

<form action="user.php" method="get">
<fieldset>
<input type="text" name="prenom" id="prenom" placeholder="Prénom">
</fieldset>
<fieldset>
<input type="text" name="nom" id="nom" placeholder="Nom">
<input type="submit" name="submit" id=submit">
</fieldset>
</form>
<?php include 'footer.php';?>