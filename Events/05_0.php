<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Potluck with a View
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
setlast("Events/05_0.php");
?>
</body>