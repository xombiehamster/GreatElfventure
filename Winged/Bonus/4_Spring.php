<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Spring, Year 1
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>

<body>
<p>A Placeholder</p>
      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,4);
    #Footer content
    include '../footer.php';
    echo getflapstory("../Year/01_4_Winged.php",null);
    echo getarrows("3_Winter.php",getflapnext($_SESSION["W_EXTRA"],"5_Second Summer.php"));?>
</body>
</html>
