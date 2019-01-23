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