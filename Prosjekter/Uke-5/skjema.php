<h1>Oppgave 2:</h1>

<form method="get">
<p>Navn:</p><input type="text" name="name">
<p>Alder:</p><input type="text" name="age">
<p>Bosted:</p><input type="text" name="place"> <br>
<input type="submit" name="form2" value="Send inn">
</form>

<?php
    $validInput = true;
    $required = array("name", "age", "place");
    foreach($required as $value){
        if (empty($_GET[$value])){
            $validInput = false;
        }
    }
    if(isset($_GET["form2"]) && $validInput){
        echo "<div class='liste'><ol>";
        foreach($required as $value){
            echo "<li>" . $_GET[$value] . "</li>";
        }
        echo "</ol></div>";
    }



?>