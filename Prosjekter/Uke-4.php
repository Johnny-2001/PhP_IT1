<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Uke 4</title>
    <link rel="stylesheet" href="Stilark/uke4.css">
</head>
<body>
    <header> 
    <h1>Oppgaver Uke 4 - Johnny</h1>
    </header>
    
    <div class="innpakning">
    <div class="row1">
    <h1>Oppgave 10.12:</h1>

    <p>Skriv inn en dato:</p>

    <form method="get" id="form">
    <p>Dato:</p><input type="text" name="day"> <br> 
    <p>Måned:</p><input type="text" name="month"> <br>
    <p>År:</p><input type="text" name="year"> <br>
    <input type="submit" name="form1" value="Submit"> 
    </form>

    <?php
        $current_date = date_create();

        $validInput = true;
        $required = array("day", "month", "year");
        foreach ($required as $field) {
            if (empty($_GET[$field])){
                $validInput = false;
            }
        }
           if(isset($_GET["form1"])){
            if($validInput){
                $day = $_GET["day"];
                $month = $_GET["month"];
                $year = $_GET["year"];

                if (checkdate((int)$month, (int)$day, (int)$year)){
                $born_date = date_create("$year-$month-$day"); 
            
                echo "<p>Fødselsdato: " . date_format($born_date, "d/m/Y") . "</p>";

                $diff = date_diff($born_date, $current_date)->format("%y");
                echo "<p>";
                if ($diff < 18){
                    echo "Du er ikke 18 år";
                }
                else if ($diff == 18){
                    echo "Du er 18 år!";
                }
                else {
                    echo "Du er over 18 år!";
                }
                echo "</p>";
            } else{
                echo "<p>Det er ikke en gyldig dato</p>";
            }
        }else{
            echo "<p>Det er ikke en gyldig input</p>";
        }
    } 
    ?>
    </div>
    <div class="row1">
    <h1>Oppgave 10.18:</h1>
    <?php 
    echo "<p>";
    for($i=0; $i<=20; $i++){
        if ($i%2 == 1){
        continue;
    }
    echo "$i    ";
    }
    echo "</p>
";
    ?>
    </div>
    <div class="row1">
    <h1>Oppgave 10.19:</h1>

    <form method="get" id="form">
    <p>Antall rader:</p><input type="text" name="rows"> <br> 
    <input type="submit" name="form2" value="Submit"> 
    </form>
    <?php 
    $rows = 16;

    if(isset($_GET["form2"])&& !(empty($_GET["rows"]))){
        $rows = $_GET["rows"];
    }
    echo "<table>";
   for($x=0; $x<=$rows; $x++){
        echo "
            <tr>
                <td>$x</td>
                <td>$x</td>
            </tr>
            ";
    } 
    echo "</table>";
   ?>
   </div>
   </div>

</body>
</html>