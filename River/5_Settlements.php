<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        River Elf Settlements
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Settlements</h1>
    <h2>Partager</h2>
    <p>The first of the new flotillas is named for the word ‘<a href="https://www.lsu.edu/hss/french/undergraduate_program/cajun_french/cajun_french_english_glossary.php">to share</a>’ in an old dialect of Sylvan that isn’t spoken on this side of the continental divide.  Partager is the first flotilla that’s embarked in this region, and has pride of place as the Oarmaster’s own raft travels in it.</p>
    <ul>
        <li><b>Settlement Aspects:</b><ul>
        <li><i>Nomadic Flotilla:</i> The homes of the river elves float on water.</li>
        <li><i>Construction Rafts:</i> Several of the elves in this flotilla have dedicated their homes to serving as construction crews.
Whenever Partager assists in a construction project (whether invoked or not) they automatically add one advantage to the results thanks to the experience of the engineers and construction workers in the settlement.  This trait will persist even if the Aspect is improved later.</li></li></ul>
    <li><b>Size:</b> Village</li>
    <li><b>Garrison:</b> Currently full with the Angry Alligators.</li>
    </ul>
<?php
if ($_SESSION["RIVER"]>=5){
    echo "<h2>Winter Quarters</h2>
    <p>Founded as an outpost, the River Elves’ Winter Quarters is a fairly unique settlement.  Throughout most of the year it is manned by a small group of semi-permanent residents, a core group of elves who guard its borders and keep up its infrastructure.  But in the winter, when all the flotillas return, this small outpost swells enormously in population.</p>
<ul><li><b>Aspects:</b>
    <li><i>Territory Aspects:</i><ul>
    <li>Coastal Marsh</li>
    <li>Sustainable Forestry</li>
    <li>Wildlife and Fisheries</li></li></ul>
    <li><b>Settlement Aspects:</b><ul>
    <li>Skeleton Krewe: not yet</li></li></ul>
    <li><b>Size:</b> Outpost</li>
    <li><b>Garrison:</b> Currently full with the Brave Beavers
    </li></ul>";
}
if ($_SESSION["RIVER"]>=11){
    echo "<h2>Arpenter</h2>
    <p>The second flotilla is named for the word “to survey,” and it is their mission to go beyond the expected, safe routes and explore the world around them.  They must boldly go where no flotilla has gone before, to seek new people to trade with and new things to trade for.  They are the explorers, the adventurers, and those who seek a life of thrilling novelty.</p>
<ul><li><b>Aspects:</b>
    <li><b>Settlement Aspects:</b><ul>
    <li><i>Brightwood Nomads:</i> This flotilla has been created with lightweight, fast moving rafts made of Brightwood. When moving through water, this flotilla moves with a +10 Bonus to its speed- so 30 when traveling upstream, 50 when traveling downstream, and 20 when moving along a coastline. The lighter weight boats do make travelling overland easier, providing a move speed of 15. While fast, Brightwood is fragile and this flotilla is more vulnerable to Events that might cause damage to the flotilla, upgrading the difficulty made to withstand such tragedies once.</li></li></ul>
    <li><b>Size:</b> Village</li>
    <li><b>Garrison:</b> Currently full with the Crafty Crawfish
    </li></ul>";
}
if ($_SESSION["RIVER"]>=15){
    echo "<h2>Envoyer</h2>
    <p>The third flotilla created on the Eastern shores is named for the Sylvan word, “to travel,” and it is designed to do that in a way that has not been attempted before.  The new flotilla design is built to cross open water across the vast and salty oceans.  It is an attempt at trying something completely new and different, and is very experimental.</p>
<ul><li><b>Aspects:</b>
    <li><b>Settlement Aspects:</b>
    <li><i>Ocean Nomads - Ironsides:</i> This flotilla has been created with heavy, durable ships made for resisting the absolute worst the ocean has to throw at them and going days or weeks on open water. They can move at their normal speed along coastlines, and unlike a normal flotilla they can cross deep ocean albeit at half speed.
    <li><i>Ironsides:</li> Due to the unique and durable construction of these ships, Envoyer receives a boost die on any check made to resist physical damage to the flotilla, including Events and military attacks.</li></li></li>
    <li><b>Size:</b> Village</li>
    <li><b>Garrison:</b> None
    </li></ul>";
}
        include '../footer.php';
        echo getarrows("4_Details.php",null);
        echo goback();
    ?>
</body>
</html>
