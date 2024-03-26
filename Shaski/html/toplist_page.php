<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php 
        echo file_get_contents("../css/toplist_page_styles.css");
    ?>
    </style>
</head>

<?php

require_once('db.php');

$login = $_POST['login'];



$sql = "SELECT * FROM `users` ORDER BY score ASC";
$result = $conn ->query($sql);  

        while ($r = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>{$r['login']} = </td>";
            echo "<td>{$r['score']}</td>";
            echo "</tr>";
        }

?>