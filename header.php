<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f10tme | Kayıt Ol</title>
</head>

<body>
<h1>f10tme</h1>
<?php

if ($_SESSION["user"]["status"] == true) {
    ?>
    <a href="index.php?p=home">Anasayfa</a>
    <a href="index.php?p=exit">Çıkış Yap</a>
    <?php
}else {
    ?>
    <a href="index.php?p=signup">Giriş Yap</a>
    <a href="index.php?p=signin">Kaydol</a>
    <?php
}

?>


<style>

    form{
        margin-block:20px;
    }
</style>