<?php session_start(); ?>
<!DOCTYPE html>

<head><?php include '../../header.php'; ?>
    <title>
        An Uncharted Course
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../River.css">
</head>
<body>
    <h1>An Uncharted Course</h1>
    <p>placeholder</p>
    <p class="center">-FIN-</p>
    <?php 
        include '../footer.php';
        echo getarrows("../Year/05_4_River.php#back","../Year/05_3_River.php#back");
        setlast("Bonus/28_An Uncharted Course.php");
    ?>
</body>
</html>
