<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Pair of Monsters
    </title>
</head>

<body>
<h1>A Pair of Monsters</h1>
<p>PLACEHOLDER</p>
<p class="center">-FIN-</p>

<?php
include "../footer.php";
include '../../settarget.php';
settarget("Blade",null,null,6);
echo getarrows("../../Events/05_0.php#jump","../../Events/05_0.php#jump");
#setlast("Bonus/6_A Pair of Monsters.php");
?>
</body>