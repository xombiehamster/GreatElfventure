<?php 
include '../header.php'
?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Year 1 - Fall
    </title>
</head>

<body>
    <p><b>Economic:</b> With Eina motivating the work efforts with the blessings of Calestros, work begins on building a lift - a “fall hopper” - made of pulleys and sturdy ropes with boulders for counterbalance.  They put to use the extra materials on hand that were left over from the original raft construction projects.  This makes use of the Investment trapping of Infrastructure with 2 Ability, 1 Proficiency, and 2 Boost dice: 5 advantage, 3 successes, 0 triumphs</p>

    <?php 
        if ($_SESSION["RIVER"] < 3){
            $_SESSION["RIVER"] = 3;
           
        }
        echo $_SESSION["RIVER"]," index var<br/>";
    ?>
    <table style="width:100%">
        <tr>
            <a href="01_1_River.php">BACK</a>
        </tr>
        <tr>
            <a href="01_3_River.php">NEXT</a>
        </tr>
    </table>
    <?php include '../footer.php'?>
</body>
