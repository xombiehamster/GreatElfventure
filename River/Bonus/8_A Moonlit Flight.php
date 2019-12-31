<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Moonlit Flight
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>A Moonlit Flight</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("7_A Course Is Changed.php","../Year/03_1_River.php#back");
        setlast("Bonus/8_A Moonlit Flight.php");
    ?>
</body>
</html>
