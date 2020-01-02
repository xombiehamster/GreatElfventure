<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Shady Stowaway
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>A Shady Stowaway</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("../Year/05_2_River.php#back","../Year/05_2_River.php#back");
        setlast("Bonus/21_A Shady Stowaway.php");
    ?>
</body>
</html>
