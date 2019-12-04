<?php include 'header.php'?>
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
<ul>
    <li><a href="/Blade/Blade_-1_Aspects.php">Blade Elf Aspects</a></li>
<?php
    if ($_SESSION["BLADE"] == 1){
        echo "<li><a href=\"/Blade/Blade_-1_Factions.php\">Blade Elf Factions</a></li>";
    }
    else echo "<li>",$_SESSION["BLADE"],"</li>";
?>
</ul>
<ul>
    <li><a href="/River/River_-1_Aspects.php">River Elf Aspects</a></li>
</ul>
</body>
</html>