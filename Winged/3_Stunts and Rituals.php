<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Winged Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Stunts</h1>
    <h2>Overwhelming Enthusiasm</h2>
    <p>Winged elves are enormously curious and intelligent. They absolutely love learning new things, but it is very difficult to get them to change topics if they believe there is more to be learned.</p>

<p>Whenever the winged elves use the Research trapping under Academics on a completely new topic, they receive a bonus ability die. If the GM rules this is a particularly interesting or unusual topic, they instead receive an Upgrade. If they ever use the Research trapping on a different topic after failing a Research check, they receive one Setback die and do not get the bonus if it is a novel topic.</p>

    <h2>Natural Explorers</h2>
    <p>Winged elves can travel farther and faster than most others, and their natural curiosity has them always wanting to see what�s over the horizon.</p>

<p>Their pathfinders and rangers are able to explore one additional square without an increase in difficulty.</p>

 
    <h1>Rituals</h1>
    <h2>Detect Interlopers</h2>
<b>Risk</b>- Low
<b>Duration</b>- 1d4 turns
<b>Target</b>- One settlement
<b>Difficulty</b>- 2
<b>Effect</b>- This ritual places a subtle ward on the targeted settlements. If any hostile faction attempts an Espionage check on the warded settlement, their Espionage roll is automatically compared to the total number of successes the ritual received (not net.) If the ritual has more successes, the ward is discharged. The settlement leaders immediately become aware that there is a spy in their midst and may roll a Cloak and Dagger check to find them. If the settlement had already rolled cloak and dagger, they may instead roll a proficiency die and add those results to their opposed check.

<p>Note that the specific wording of the ward states "intent to harm the settlement or its people" and the ward will not trigger if these conditions are not met.</p>

<p><u>Blood Ward Variation</u></p>
<p>You may now choose to cast a blood ward version of your settlement ward by increasing the difficulty of casting it. It does not increase the risk level of the spell, only the difficulty.</p>

<p>This version of the ward is attuned to wolf elves. If the ward is broken by a wolf elf, it will clearly and positively indicate such. This makes it extremely difficult for them to commit the kind of false flag operations they favor. In addition, if the ward is tripped by a wolf elf, you gain one automatic success on the resulting Cloak and Dagger check as your Skywatchers know what to look for.</p>

<p>This ward could be modified to search for other creature types. Adding options to this ward will require research, but not nearly as difficult as this one. You can maintain a record of as many creatures as you want, but the ward can only detect one at a time.</p>


    <?php
        include '../settarget.php'; 
        settarget("Winged",null,4,null);
        include '../footer.php';
        echo getarrows("2_Leadership.php","4_Details.php");
    ?>
</body>
</html>