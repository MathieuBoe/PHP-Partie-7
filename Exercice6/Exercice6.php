<?php

$title = 'Exercice6';

include 'header.php';?>
<!-- <div class="formulaire"> -->
<form action="Exercice6.php" method="get" class="formy">
<fieldset></fieldset>
<select name="civilite" id="civilite">
    <option value="">Choisissez votre genre</option>
    <option value="Monsieur">Monsieur</option>
    <option value="Madame">Madame</option>
</select>
</fieldset>
<fieldset><input type="text" name="nom" id="nom" placeholder="nom"></fieldset>
<fieldset><input type="text" name="prenom" id="prenom" placeholder="prenom"></fieldset>
<input type="submit" name="submit" id="submit">
</form>
<!-- </div> -->
<?php if ((!empty($_GET['nom']))&&(!empty($_GET['prenom']))&&(!empty($_GET["civilite"]))){
    echo $_GET['civilite'].$_GET['prenom'].$_GET['nom']; ?>
    <style type="text/css">.formy{
        display:none;
        }</style>
<?php }
include 'footer.php';?>