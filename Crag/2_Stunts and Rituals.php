<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Crag Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Stunts</h1>
    <h2>The Stone Is Our Home</h2>
    <p>The majority of Crag Elf adaptations allow them to live in an unusually untapped location; mountainous regions, but above the surface, not below it.  The magic that comes naturally to all elves has been shaped to give them unparalleled communion with the very bones of The World, and rarely in these climes can they be lead astray.</p>
    <p>Whenever the Rangers or Pathfinders trapping is used on a Mountainous location (up to DM Discretion), gain a bonus die on the roll.</p>
    <h2>The Hills Have Eyes</h2>
    <p>Crag Elf society is aggressively insular, as their teachings long foretold, accurately it seems, that interference from the outside would lead only to ruin and downfall.  This lack of exposure to external duplicity or skullduggery makes them poor masters of spycraft, save that those operating within Crag Elf lands will find themselves constantly under watchful, judging eyes.  Sometimes, it seems as if even the stone they trod wishes to reveal their secrets.  </p>
    <p>Should their suspicions be aroused, there is little subtlety to be found in the preventive measures they take.</p>
    <p>Crag Elves may use their Mysticism skill instead of Spycraft when undertaking the Cloak and Dagger trapping.  Due to the crude methods used, one advantage should be subtracted from their pool before determining how many may be used to gain information from this check.</p>
    <h1>Rituals</h1>
    <p>Crag elves don't have any rituals yet... That anyone knows of.</p>
    <?php
        include '../settarget.php'; 
        settarget("Crag",null,3,null);
        include 'footer.php';
        echo getarrows("1_Factions.php","3_Leadership.php");
        echo getlast();
    ?>
</body>
</html>