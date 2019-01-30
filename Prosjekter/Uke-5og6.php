<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PhP: Uke 5-6</title>
    <link rel="stylesheet" href="./Stilark/uke5-6.css">
</head>
<body>
<form method="get" id="form">
    <p>Antall rader:</p><input type="text" name="rows"> <br> 
    <input type="submit" name="form" value="Submit"> 
    </form>
<?php 
    $rows = 9;
    if(isset($_GET["form"])&& !(empty($_GET["rows"]))){
        $rows = $_GET["rows"];
    }
    echo "<table>";
    for($i=1; $i <= $rows; $i++){
        if($i == 1){
            for ($j = 0; $j <= $rows; $j++){
                echo "<td class='rad'>$j</td>";
            }
        }
        echo "<tr><td class='rad'>$i</td>";
        for ($x=1; $x <= $rows; $x++){
            $produkt = $i * $x;
            echo   "<td>
                    $produkt
                    </td>
                    ";
        }
        echo "</tr>";
    }
    echo "</table>"
?>
    
</body>
</html>