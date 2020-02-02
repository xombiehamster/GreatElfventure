<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        River Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="River.css">
</head>

<body>
    <h1>Stunts</h1>
    <h2>River Nomads</h2>
    <p>When first constructing a new settlement, you may choose to apply the Settlement Aspect Nomadic to it. A Nomadic settlement can move around the map, moving 20 squares per turn. When traveling upstream on a river, River Elves move at their regular speed.  When traveling downstream, they move at twice their regular speed.  Overland or at sea, they travel at half their regular speed.  </p>
    <p>A Nomadic settlement has the advantage that it can invoke any Aspect of a square it ends on or adjacent friendly settlements and can move away from some negative Aspects if need be. A Nomadic settlement cannot grow above Town size and cannot have any Aspects related to permanently located structures.</p>
    <h2>It Just Fell Over We Swear!</h2>
    <p>When River Elves know how to build something, it’s just as easy for them to take it down.  They are able to use the Infrastructure skill to disassemble buildings instead of Conventional Warfare to Raze, and when doing so maintain a pretense at plausible deniability.  This also limits casualties for the Raze action when they are taking down structures.</p>
    <?php
    if($_SESSION["RIVER"]>=5){
        echo 
        '<h2>Elf Express</h2>
        <p>One of the benefits of being nomadic is that River Elves are able to make deliveries of trade goods possible.  When a River Elf settlement is within two squares of another settlement they are able to complete a Trade action with the other settlement without expending the other settlement’s Economic action for the turn because the other settlement just needs to accept the offer instead of having to also make a delivery of their own.</p>';
    }
    if($_SESSION["RIVER"]>=18){
        echo
        '<h2>Elf Prime</h2>
        <p>River elves are blood in the elven body. Their mastery of trade and networking, as well as the independent nature of the flotillas, allows them to maintain a flow of trade goods far more complex than others could manage.</p>
        <p>Once per turn, the river elves may motivate their economic track without spending a fate point. This may only be done to allow a cooperative Trade check with an allied elven nation with Elf Express. If the other nation does not agree to perform the check cooperatively or Elf Express cannot be used, this stunt cannot be used.</p>
        <p>A single flotilla cannot use this stunt to perform more than one Trade check in a single turn. If the first check on the Economy track is also a trade check, the Elf Prime motivated Trade check must be performed by a separate flotilla.</p>
        <p>This stunt can be used in tandem with Motivation from a separate source, such as spending a fate point.</p>';
    }
    ?>
    <h1>Rituals</h1>
    <?php
    if($_SESSION["RIVER"]>=5){
        echo
        '<h2>River Augury</h2>
        <ul><li><b>Risk:</b> Low</li>
            <li><b>Range:</b> One Settlement</li>
            <li><b>Target:</b> One planned river route</li>
            <li><b>Difficulty:</b> 1</li>
            <li><b>Effect:</b> <p>This ritual will give you information on a planned river route. By outlining a single settlement’s planned route, this spell will give you one of 4 answers relating to the climate specifically: Weal for good results, Woe for bad results, Weal and Woe for a mix of both, and Nothing for the weather not having any huge impact. It cannot predict events not influenced by climate.</p>
                <p>River Augury looks one year into the future and has a %85 chance of an accurate result. If an inaccurate result is made, it will always respond with “Nothing.” If a fate point is spent in the casting of this ritual, it is %100 accurate. Multiple castings of this spell on the same river within the same year give the same results.</p>            
                <p>This spell may be improved by further magic research.</p></li></ul>';
    }else{
        echo '<p>No rituals created... yet!</p>';
    }
    if($_SESSION["RIVER"]>=11){
        echo
        '<h2>River Beacon I</h2>
        <ul>
            <li>Risk - Low</li>
            <li>Target - One River</li>
            <li>Difficulty - 1</li>
            <li>Effect - This ritual will send out a beacon that is only perceptible to river elves. This beacon is perceptible to any river elves currently in contact with that river, all the way to its source. Any river elf who perceives the beacon gets a direction and a sense of welcome and belonging, and a sense that it’s other river elves sending the beacon. When created, this beacon will last for 1d4 turns. The DM will roll a percentile die in secret every turn to see if any river elves perceive the beacon and decide to follow it. If successful, this will provide a New Arrivals Aspect the next turn that can be Invoked to grow existing settlements or create a new one. With the beacon being in its most basic form, the percentage chance of this is currently fairly low. </li>
        </ul>';
    }
    include '../settarget.php'; 
    settarget("River",null,4,null);
    include 'footer.php';
    echo getarrows("2_Leadership.php","4_Details.php");
    echo goback();?>
</body>
</html>
