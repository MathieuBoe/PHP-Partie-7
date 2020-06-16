<?php 
$title = 'user';

include 'header.php'; ?>
<p>Bonjour <?= $_GET['prenom'].' '.$_GET['nom'];?></p>

<?php include 'footer.php';?>