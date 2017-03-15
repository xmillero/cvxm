<?php
// affichage de la page d'accueil
// Tous les autres fichiers de presentation sont dans le repertoire view

if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
?>

<!DOCTYPE html>
<html>
<head>
<title>CV de Xavier MILLERON</title>
<meta charset="UTF-8">
<meta name="description" content="Présentation de mon CV">
<meta name="keywords" content="HTML,CSS,PHP">
<meta name="author" content="Xavier Milleron">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="css/application.css" />
</head>

<?php
//require __DIR__ . '/control/app_index.php';
include('view/header.php');
include('view/content_cv.php');
include('view/footer.php');
?>
</html>