<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Summer Potluck
    </title>
</head>

<body>

Mighty fine placeholder you got there.

<?php
if($_SESSION["YEAR"]<3){
    $_SESSION["YEAR"]=3;
}
include "../footer.php";
echo getarrows(null,null);
?>
</body>