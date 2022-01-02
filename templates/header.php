<?php
    include_once("helpers/url.php");
    include_once ("data/posts.php");
    include_once ("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog </title>
    <!-- link css -->
    <link rel="stylesheet" href=" <?= $BASE_URL ?>/estilos/style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? família=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?=$BASE_URL ?>" id="logo">
            <img src="<?=$BASE_URL?>/img/logo.svg" alt="blog">
        </a>

        <!-- nave -->
        <nav class= "navbar">
            <li><a href="<?=$BASE_URL?>"class="nav-link"> home</a></li>
            <li><a href="#"class="nav-link"> categorias </a></li>
            <li><a href="#"class="nav-link"> Sobre </a></li>
            <li><a href="contacto.php"class="nav-link"> contacto</a></li>
        </nav>
    </header>
