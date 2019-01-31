<h1>Oppgave 1:</h1>

<?php
    $antallElever = array(
        "Dalane VGS" => "800",
        "Sauda VGS" => "400",
        "Bryne VGS" => "1500",
        "Sandnes VGS" => "1000"
    );

    foreach($antallElever as $skole => $elever){
        echo "<p>Det er $elever elever på $skole</p><br>";
    }
    
?>