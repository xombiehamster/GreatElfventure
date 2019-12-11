<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Blade Elf Factions
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h2>The Gladeseekers</h2>
    <p>Not everyone sees the martial traditions that the Lycans imposed on the Blade elves as a boon. Some see it as a violation of their identity and want nothing more than to leave it behind forever. They see the constant cries of peace, freedom, never
        again, and such as bombastic propaganda. They wish to shed off the last of the chains the Lycans left on them and become fully elven again. This small growing political group calls themselves the Gladkeepers. Not all wish to abandon their martial
        ways entirely, but many are coming to see violence and war as a curse upon any who practice it. </p>
    <h2>The Whetstones</h2>
    <p>Within the most hardened veterans of the Blade elf military exists a group that call themselves the Whetstones. They have taken the general belief that Blade elves have a duty to protect and taken it to a religious extreme. Unable to openly practice
        their religion under the Lycans, their deep faith in Calaestros was hidden for many years.</p>
    <p>Now, this group has come to believe that the Blade elves were fated to be forged into the form they have now- the blade of Calaestros. They believe it is not just the duty but the destiny of the Blade elves to be eternal guardians against tyranny
        and evil. They will promote this goal- and the requisite “sword sharpening"- above all others.</p>
    <?php
        include '../settarget.php'; 
        settarget("Blade",null,2,null);
        include '../footer.php';
        echo getarrows("0_Aspects.php","2_Stunts and Rituals.php");
    ?>
</body>
</html>