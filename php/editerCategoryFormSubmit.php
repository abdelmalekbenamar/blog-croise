<?php
require_once("../classes/category.php");

$category = new Category();

echo $_POST["titreCategoryAModifier"] . "  " . $_POST["idCategory"];

$category->modifyCategory($_POST["idCategory"], $_POST["titreCategoryAModifier"]);
header("Location: ../parametreCategories.php");