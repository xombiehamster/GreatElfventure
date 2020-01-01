<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Bits and Pieces
    </title>
</head>

<body>
<h1>Bits and Pieces</h1>
<p>PLACEHOLDER</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,4);
echo getarrows("../../Events/04_0.php#jump","5_A Man and a Dog.php");
#setlast("Bonus/4_Bits and Pieces.php");
?>
</body>