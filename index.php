<?php $strLink=""; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php        
        if(isset($_POST['btn'])){
            $strLink="<a href='".$_POST['link']."'>".htmlentities($_POST['desc'])."</a><br>".$_POST['linx'];
          } ?>
        <a href='länk'></a>
            <form action="index.php" method="POST">
                <label for="link">Skriv en URL</label>
                <input type="text" name="link" id="link" placeholder="https://" required>
                <label for="desc">Beskrivning</label>
                <input type="text" name="desc" id="desc">
                <input type="hidden" name="linx" value="<?=$strLink?>">
                <button type="submit" name="btn" value="x">Lägg till länk</button>
            </form>
          <?=$strLink?>

</body>
</html>