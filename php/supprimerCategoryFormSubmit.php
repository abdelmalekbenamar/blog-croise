<?php
require_once("../classes/category.php");
echo $_POST["idArticleASupprime"];

$category = new Category();
$category->deleteCategory($_POST["idArticleASupprime"]);
header("Location: ../parametreCategories.php");