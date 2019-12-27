<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dreamdust Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Factions</h1>
    <h2>Mystics</h2>
    <p>"I saw five vultures flying North!  You know what that means, Dave!"</p>
    <h2>Pragmatists</h2>
    <p>"STOP TALKING ABOUT VULTURES STEVE, NO ONE CARES ABOUT THE VULTURES."</p>
        
    <?php
    include '../settarget.php'; 
    settarget("Dreamdust",null,2,null);
    include 'footer.php';
    echo getarrows("0_Aspects.php","2_Leadership.php");
    echo goback();?>
</body>
</html>
