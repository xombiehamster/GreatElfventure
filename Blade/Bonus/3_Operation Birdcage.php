<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Operation Birdcage
    </title>
</head>

<body>
<h1>Operation Birdcage</h1>
<p>PLACEHOLDER</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,3);
echo getarrows("../../Events/03_0.php#jump","../../Events/03_0.php#jump");
setlast("Bonus/3_Operation Birdcage.php");
?>
</body>