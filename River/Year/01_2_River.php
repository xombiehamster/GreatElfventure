<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Year 1 - Fall
    </title>
</head>

<body>
    <h1>Year 1 - Fall</h1>
    <table style="width:100%">
        <tr>
            <th>Stress</th>
            <td>Economic 0/5</td>
            <td>Morale 0/5</td>
            <td>Property 0/4</td>
            <td>Military 0/5</td>
        </tr>
        <tr>
            <th>Fate Points</th>
            <td>3/3 Refresh</td>
            <td>0 Bonus</td>
        </tr>
    </table>
    <p><b>Economic:</b> With Eina motivating the work efforts with the blessings of Calestros, work begins on building a lift - a “fall hopper” - made of pulleys and sturdy ropes with boulders for counterbalance.  They put to use the extra materials on hand that were left over from the original raft construction projects.  This makes use of the Investment trapping of Infrastructure with 2 Ability, 1 Proficiency, and 2 Boost dice: 5 advantage, 3 successes, 0 triumphs</p>

    <?php 
        if ($_SESSION["RIVER"] < 3){
            $_SESSION["RIVER"] = 3;
           
        }
        echo $_SESSION["RIVER"]," index var<br/>";
    ?>
    <table style="width:100%">
        <tr>
            <td><a href="01_1_River.php">BACK</a></td>
            <td><a href="01_3_River.php">NEXT</a></td>
        </tr>
    </table>
    <?php include '../footer.php'?>
</body>
