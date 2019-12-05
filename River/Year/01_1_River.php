<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Year 1 - Summer
    </title>
</head>

<body>
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
    <p><b>Economic:</b> It is an exciting day for the river elves!  Smilisca hangs a brand new rope for mapping the qualities of the river on a special hook on the door to his hut.  Eina blesses a couple forming their first river bond on the day of Embarkment - Asper and Caete Hylodes had been waiting for several years now to form this bond when there was actually a river to ride.  Staurois gives a speech, hails the oarsmen, and the first official new flotilla, dubbed Partager, sets off on its maiden upstream journey.</p>
    <p>Using the <i>Establishment</i> trapping of the <b>Infrastructure</b> skill they create Partager as a Village on the water.  Rolling 2 ability and 1 proficiency: 2 advantage, 0 rolled successes, 1 automatic success, 0 triumphs.</p>
    <p>Partager has a large number of extra passengers as they travel upriver this season.  Winged elves, their goats, dark elves, dreamdust elves, and their goats, makes for a crowded journey.  But it keeps spirits up to not have to head out completely alone right away.  Everyone slowly splits off of the flotilla at different forks in the river until finally the river elves have the water to themselves.</p>

    <?php 
        if ($_SESSION["RIVER"] < 2){
            $_SESSION["RIVER"] = 2;
        }
        echo $_SESSION["RIVER"]," index var<br/>";
    ?>
    <table style="width:100%">
        <tr>
            <td><a href="../index.php">BACK</a></td>
            <td><a href="01_2_River.php">NEXT</a></td>
        </tr>
    </table>
    <?php
        include '../footer.php'
    ?>
</body>
