<?php 
include '../header.php'
?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Year 1 - Summer
    </title>
</head>

<body>
    <p><b>Economic:</b> It is an exciting day for the river elves!  Smilisca hangs a brand new rope for mapping the qualities of the river on a special hook on the door to his hut.  Eina blesses a couple forming their first river bond on the day of Embarkment - Asper and Caete Hylodes had been waiting for several years now to form this bond when there was actually a river to ride.  Staurois gives a speech, hails the oarsmen, and the first official new flotilla, dubbed Partager, sets off on its maiden upstream journey.</p>
    <p>Using the <i>Establishment</i> trapping of the <b>Infrastructure</b> skill they create Partager as a Village on the water.  Rolling 2 ability and 1 proficiency: 2 advantage, 0 rolled successes, 1 automatic success, 0 triumphs.</p>
    <p>Partager has a large number of extra passengers as they travel upriver this season.  Winged elves, their goats, dark elves, dreamdust elves, and their goats, makes for a crowded journey.  But it keeps spirits up to not have to head out completely alone right away.  Everyone slowly splits off of the flotilla at different forks in the river until finally the river elves have the water to themselves.</p>

    <?php 
        if ($_SESSION["RIVER"] < 1){
            $_SESSION["RIVER"] = 1;
        }
    ?>
    <table style="width:100%">
        <tr>
            <a href="../index.php">BACK</a>
        </tr>
        <tr>
            <a href="01_2_River.php">NEXT</a>
        </tr>
    </table>
    <?php
        include '../footer.php'
    ?>
</body>
