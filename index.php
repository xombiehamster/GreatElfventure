<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>
    Great Elfventure
</title>
</head>
<body>
<H1> Great ElfVenture Read Through </H1>
<?php
    echo "Hello World!";
?>
<a href="Blade_-1_Aspects.php">Blade Elf Aspects</a>
<?php
    if ($_SESSION["BLADE"] == 1){
        echo "<a href=\"Blade_-1_Factions.php\">Blade Elf Factions</a>";
    }
    else echo $_SESSION["BLADE"];
?>
</body>
</html>