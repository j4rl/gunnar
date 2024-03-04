<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $db="gunnar";
    $conn=mysqli_connect($server,$user,$pass,$db);

    if(isset($_POST["btn"])){
        $url=$_POST['link'];
        $desc=$_POST['desc'];
        $sql="INSERT INTO `tbllinx`(`url`, `description`) VALUES ('$url','$desc')";
        $result=mysqli_query($conn,$sql);
        header("Location: index.php");
    }else{
        $sql="SELECT * FROM tblLinx";
        $result=mysqli_query($conn,$sql);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <form action="index.php" method="POST">
                <label for="link">Skriv en URL</label>
                <input type="text" name="link" id="link" placeholder="https://" required>
                <label for="desc">Beskrivning</label>
                <input type="text" name="desc" id="desc">
                <input type="hidden" name="linx" value="<?=$strLink?>">
                <button type="submit" name="btn" value="x">Lägg till länk</button>
            </form>
            <?php
                while($row=mysqli_fetch_assoc($result)){
                    echo "<a href='".$row['url']."'>".$row['description']."</a><br>";
                }
            ?>

</body>
</html>