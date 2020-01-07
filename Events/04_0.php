<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Peaceful Potluck
    </title>
</head>

<body>

Mighty fine placeholder you got there.

<?php
if($_SESSION["YEAR"]<4){
    $_SESSION["YEAR"]=4;
}
include "../footer.php";
echo getarrows(null,null);
settarget("Blade",null,null,7);
echo goback();
setlast("Events/04_0.php");
?>
</body>