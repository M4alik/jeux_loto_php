<?php
if(!isset($_POST['loto']) || count($_POST['loto'])!==6){
    header('Location: index.php');
}

$grille = $_POST['loto'];
$tirage=[];
while(count($tirage)<6){
    $numero = rand(1,49);
    array_push($tirage,$numero);
    $tirage = array_unique($tirage);
}

$compteur = 0;
foreach($grille as $value){
   if(in_array($value, $tirage)){
        $compteur++;
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOTO</title>
</head>
<body>
    <h1>Resultat du tirage</h1>
    <div id="grille">
        <?php 
        foreach($grille as $value) : 
            if(in_array($value, $tirage)) :
        ?>
            <div class="numero vert"><?=$value?></div>
        <?php else : ?>
            <div class="numero rouge"><?=$value?></div>
        <?php 
            endif;
        endforeach; 
        ?>
    </div>
    <div id="tirage">
        <?php foreach($tirage as $value) : ?>
            <div class="numero"><?=$value?></div>
        <?php endforeach; ?>
    </div>
    <div>Nombre de numéros trouvés : <?=$compteur?></div>
</body>
</html>