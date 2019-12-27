<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Plan Comes Together
    </title>
</head>

<body>
<h1>A Plan Comes Together</h1>
<p>PLACEHOLDER</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,2);
echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
setlast("Bonus/03_0b.php");
?>
</body>