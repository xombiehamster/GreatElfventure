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
echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
setlast("Bonus/4_Bits and Pieces.php");
?>
</body>