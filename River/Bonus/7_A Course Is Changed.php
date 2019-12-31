<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Course Is Changed
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>A Course Is Changed</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("../Year/03_1_River.php#back","8_A Moonlit Flight.php");
        setlast("Bonus/7_A Course Is Changed.php");
    ?>
</body>
</html>
