<h1>Oppgave 10.19:</h1>

    <form method="get" id="form">
    <p>Antall rader:</p><input type="text" name="rows"> <br> 
    <input type="submit" name="form2" value="Submit"> 
    </form>
    <?php 
    $rows = 12;

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