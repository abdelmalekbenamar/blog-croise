<?php
require_once("../classes/tag.php");

$tag = new Tag();


$tag->deleteTag($_POST["idTagASupprime"]);
header("Location: ../parametreTags.php");