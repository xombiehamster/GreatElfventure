<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        A Choice Made
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
</head>
<body>
    <h1>A Choice Made</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("../Year/05_4_River.php#back2","../Year/05_3_River.php#back2");
        setlast("Bonus/29_A Choice Made.php");
    ?>
</body>
</html>
