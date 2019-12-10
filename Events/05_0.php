<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Asavardi Potluck
    </title>
</head>

<body>

Mighty fine placeholder you got there.

<?php
if($_SESSION["YEAR"]<5){
    $_SESSION["YEAR"]=5;
}
include "../footer.php";
echo getarrows(null,null);
?>
</body>