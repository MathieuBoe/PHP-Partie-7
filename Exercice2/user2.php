<?php 
$title = 'user2';

include 'header.php'; ?>
<p>Bonjour <?= $_POST['prenom'].' '.$_POST['nom'];?></p>

<?php include 'footer.php';?>