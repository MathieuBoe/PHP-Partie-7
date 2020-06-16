<?php
    $titre= 'exercice5';
    include 'header.php';
    $lastNamePost = $_POST['lastName'] ?? '';
    $firstNamePost = $_POST['firstName'] ?? '';
    $civilityPost = $_POST['civility'] ?? '';
    $file = $_FILES['filesend'] ? $_FILES['filesend']['name'] : '';
    var_dump($file);
include 'header.php'; ?>


// CORRECTION 

<div class="m-4 p-4 col-4 border border-secondary">
<form method="post" action="#" enctype="multipart/form-data">
    <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
    <div class="form-group">
        <select class="custom-select" name="civility">
            <option value='' disabled="disabled" selected="selected" hidden="hidden">Civilité</option>
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nom</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Prénom</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Age</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="age" placeholder="33">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Charger un fichier</label>
        <input type="file" class="form-control" id="formGroupExampleInput2" name="file" placeholder="Charger un fichier">
    </div>
    <button type="submit" class="btn btn-success">Valider</button>
</form>
</div>

<?php include 'footer.php';?>