<!DOCTYPE html>
<html lang="en">
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
    <?php
        $current_date = date_create();
        $born_date = date_create("2001-07-16");

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
        echo "</p>
";
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
    
    <?php 
    echo "<table>";
   for($x=0; $x<=25; $x++){
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