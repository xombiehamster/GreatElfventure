<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Man and a Dog
    </title>
</head>

<body>
<h1>A Man and a Dog</h1>
<p>PLACEHOLDER</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,5);
echo getarrows("4_Bits and Pieces.php","../../Events/04_0.php#jump");
setlast("Bonus/5_A Man and a Dog.php");
?>
</body>