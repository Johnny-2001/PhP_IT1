<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gangetabellen</title>
    <style>
    table{
       border-collapse: collapse;
    }
    td{
        border: 1px solid black;
        width: 50px;
        height: 50px;
        text-align: center;
    }
    .rad{
        background-color: #ACACAC;
    }
    </style>
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