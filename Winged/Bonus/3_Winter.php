<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Winter, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>

<body>
<p>A Placeholder</p>
      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,3);
    #Footer content
    include '../footer.php';
    echo getflapstory("../Year/01_3_Winged.php",null);
    echo getarrows("1_Fall.php",getflapnext($_SESSION["W_EXTRA"],"4_Spring.php"));?>
</body>
</html>
