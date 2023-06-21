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
    <form action="tirage.php" method="post">
    <div id="formulaire">
        <?php
        for($i=1;$i<50;$i++):
        ?>
        <div class="case">
            <input type="checkbox" name="loto[]" id="case<?=$i?>" value="<?=$i?>">
            <label for="case<?=$i?>"><?=$i?></label>
        </div>
        <?php endfor; ?>
    </div>
    <button type="submit">Valider la grille</button>
    </form>

</body>
</html>