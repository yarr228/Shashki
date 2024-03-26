<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php 
        echo file_get_contents("../css/register_styles.css");
    ?>
    </style>
</head>

<?php

require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$repeatpassword =  $_POST['repeatpassword'];

if (empty($login) || empty($password) || empty($repeatpassword))
{
    echo "Pull a blocks";
} else
{
    if ($password != $repeatpassword)
    {
        echo "Paswword needs same";
    } else
    {
        $sql = "INSERT INTO `users` (login, pass) VALUES ('$login', '$password')";
        if ($conn -> query($sql) === TRUE);
        {
            echo "Succes";
        }
    }
}