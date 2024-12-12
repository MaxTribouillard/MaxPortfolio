<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max .T - PORTFOLIO</title>
    <link href="css//base.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Changa+One:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Racing+Sans+One&family=Squada+One&display=swap" rel="stylesheet">

</head>
<body>
    
<img class='background' src='css/2615525.jpg'>

<img class='nameimg' src='css/MAX-TRIBOUILLARD.png'>
<div class="navbar">
        <ul class="menu">
            <li><a href="#home">HOME</a></li>
            <li><a href="#aboutus">SKILLS</a></li>
            <li><a href="#blog">WORK</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </div>


<?php

require_once("yaml/yaml.php");
$data = yaml_parse_file("yaml/accueil.yaml");

echo "<h1> Bienvenue sur le portfolio de ".$data['prenom']."</h1>";
echo "<p> Je me présente  ".$data['presentation']."</p>";
echo "<p>"

?>

</body>
</html>

