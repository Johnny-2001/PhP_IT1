<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Test</title>
</head>
<body>
<?php
    $path = "./Prosjekter";
    $files = array_diff(scandir($path), array(".", ".."));
    
    
    foreach($files as $file){
        if (strpos($file, ".php")){
            echo "<ul><li><a href='/Prosjekter/$file'>$file</a></li></ul>";
        }
    }
    ?>
</body>
</html>