<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Crag Elf Year 1 - Summer
    </title>
</head>

<body>
   OH NO I'M GOING TO HAVE TO MAKE UP SOMETHING HERE SINCE I MISSED THIS TURN
    <?php
    include '../../settarget.php'; 
    settarget("Crag",2,0,null);
    include '../footer.php';
    echo getarrows(null,"01_2_Crag.php");
    setlast("Year/01_1_Crag.php");?>
</body>
