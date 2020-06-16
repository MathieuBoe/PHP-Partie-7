<?php 
$title = 'user3';
$lastname = ($_GET['nom']) ?? '';
$firstname = ($_GET['prenom']) ?? '';
include 'header.php';?>
<p>Bonjour <?php echo trim(htmlspecialchars($firstname)).' '.trim(htmlspecialchars($lastname));?></p>
<p>Bonjour <?php echo trim(strip_tags($firstname)).' '.trim(strip_tags($lastname));?></p>


<?php include 'footer.php';?>