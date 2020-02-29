<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Bits and Pieces
    </title>
</head>

<body>
    <h1 id="top">Bits and Pieces</h1>
    


    <?php
    include "../footer.php";
    include '../../settarget.php';
    settarget("Blade",null,null,10);
    echo getarrows("../../Events/06_0.php#back","../../Events/06_0.php#back");
    #setlast("Bonus/4_Bits and Pieces.php");
    ?>
</body>