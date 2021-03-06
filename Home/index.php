<?php
include("../class/conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/header.css">
    <link rel="stylesheet" href="/public/css/section.css">
    <link rel="stylesheet" href="/public/css/options.css">
    <link rel="stylesheet" href="/public/css/home-home.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Programação WEB</title>
</head>
<body>
    <?php
        include "../header.php";
        include "./sections.php";
        include "../options.php";
    ?>
</body>
</html>
<script src="/public/js/nav.js"></script>
<script src="https://kit.fontawesome.com/4095fc3d99.js" crossorigin="anonymous"></script>