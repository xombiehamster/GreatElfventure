<?php session_start();
include 'footer.php';

$cookiename = "savestate";
$curr = getstatus();
if(!isset($_COOKIE[$cookiename])) {
    setcookie($cookiename, $curr, time() + 3600);
}else{
    if(statuscomp($_COOKIE[$cookiename],$curr)<0){
        setcookie($cookiename,$curr,time() + 3600);
    }else{
        setstatus($_COOKIE[$cookiename]);
    }
}


?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
       Resume 
    </title>
</head>

<body>
    <p>Cookie saved status:
        <php?
              if(!isset($_COOKIE[$cookiename])) {
                echo $cookie_name.' is not set';
               } else {
                    echo $_COOKIE[$cookiename];
              }
              ?></p>
    <p>This page uses a cookie to save your current status.  You can override it using the form below.</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Status: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "You have to enter something for this to work.";
    } else {
        setstatus($name);
        }
    }
}
?>
<p><a href="index.php">Go home.</a></p>

</body>
</html>
