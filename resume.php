<?php session_start(); 
function numfix($var){
    if(is_numeric($var)){
        if($var<0){
            return null;
        }else{
            return $var;
        }
    }else {
        return null;
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Status: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
include 'footer.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "You have to enter something for this to work.";
    } else {
        $arr = explode(" ",$name);
        $ind = 0;
        while ($ind<15){
            $_SESSION[elford($ind)] = numfix($arr[$ind]);
            $ind++;
        }
    }
}
?>
<p><a href="index.php">Pick up where you left off.</a></p>

</body>
</html>