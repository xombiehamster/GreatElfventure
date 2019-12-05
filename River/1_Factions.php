<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Factions
    </title>
</head>

<body>
    <h1>Factions</h1>
    <p>Placeholder</p>
    
    <?php 
        if($_SESSION["R_EXTRA"] < 2){
            $_SESSION["R_EXTRA"] = 2;
        }
    ?>
    <?php include '../footer.php';?>
</body>
</html>
