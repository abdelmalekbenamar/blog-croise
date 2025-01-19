<?php 

require_once("../classes/category.php");


$category = new Category();
$category->AddCategory($_POST["titreNouvelleCategory"]);
header("Location: ../parametreCategories.php");