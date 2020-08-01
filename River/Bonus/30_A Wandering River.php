<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Wandering River
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
</head>
<body>
    <h1>A Wandering River</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("../Year/06_1_River.php#back","../Year/06_1_River.php#back");
        setlast("Bonus/30_A Wandering River.php");
    ?>
</body>
</html>
