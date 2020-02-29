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
    <ul>
        <li><a href="#1">Shadimon and Hunger</a></li>
    </ul>
    <hr/>
    <h2>Shadimon and Hunger</h2>

    <p class="center"><a href="#top">-FIN-</a></p>
    <hr/>



    <?php
    include "../footer.php";
    include '../../settarget.php';
    settarget("Blade",null,null,11);
    echo getarrows("../../Events/06_0.php#jump","10_Open Athlon I.php");
    #setlast("Bonus/4_Bits and Pieces.php");
    ?>
</body>