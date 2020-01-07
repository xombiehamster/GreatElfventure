<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        A Placeholder Potluck
    </title>
</head>

<body>

Mighty fine placeholder you got there.

<?php
if($_SESSION["YEAR"]<6){
    $_SESSION["YEAR"]=6;
}
include "../footer.php";
echo getarrows(null,null);
#settarget("Blade",null,null,6);
echo goback();
setlast("Events/06_0.php");
?>
</body>