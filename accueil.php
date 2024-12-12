<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max .T - PORTFOLIO</title>
    <link href="css//base.css" rel="stylesheet" />
</head>
<body>
    
<?php

require_once("yaml/yaml.php");
$data = yaml_parse_file("yaml/accueil.yaml");

echo "<h1> Bienvenue sur le portfolio de ".$data['prenom']."</h1>";
echo "<p> Je me présente  ".$data['presentation']."</p>";
echo "<p>"

?>

</body>
</html>

