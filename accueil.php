<?php
// Charger la bibliothèque Symfony/Yaml
require 'yaml/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

// Charger les données YAML
$skills = [];
try {
    $skills = Yaml::parseFile('competences.yaml')['dev'];
} catch (Exception $e) {
    echo "Erreur de lecture du fichier YAML : " . $e->getMessage();
}
?>


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

<?php
// Illustration première page
require_once("yaml/yaml.php");
$homeData = yaml_parse_file("accueil.yaml");
echo "<img id='home' class='background' src='".$homeData['illustration']."'>"

?>

<img class='nameimg' src='css/MAX-TRIBOUILLARD.png'>
<div class="navbar">
        <ul class="menu">
            <li><a href="#home">HOME</a></li>
            <li><a href="#max">MAX</a></li>
            <li><a href="#skillsTitle">SKILLS</a></li>
            <li><a href="#blog">WORK</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </div>
<h1 id='mainTitle' class='mainTitle'>Hey ! &#128516;</h1>
<div class='mainContent'>
<?php

// Accroche et présentation
echo "<h2 id='max' class='max'> Salut, moi c'est ".$homeData['prenom']." - Apprenti développeur. &#128187;</h2>";
echo "<div class='presentation'><h3 id='presentation'>Je me présente ".$homeData['presentation']." <br> ".$homeData['accroche']."</h3></div>";

?>
</div>
<h1 id='skillsTitle' class='skillsTitle'>Skills</h1>

<div class="skillbars">
        <?php foreach ($skills as $skill): ?>
            <div class="skillbar-container">
                <div class="skillbar">
                    <span class="skillbar-name"><?= htmlspecialchars($skill['name']) ?></span>
                    <div class="skillbar-bar" style="--skill-level: <?= htmlspecialchars($skill['level']) ?>%;">
                        <div class="skillbar-fill"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</body>
</html>

