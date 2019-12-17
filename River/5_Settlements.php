<?php session_start(); ?>
<!DOCTYPE html>

<head>
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
        <li><b>Settlement Aspects:</b>
        <li><i>Nomadic Flotilla:</i> The homes of the river elves float on water.</li>
        <li><i>Construction Rafts:</i> Several of the elves in this flotilla have dedicated their homes to serving as construction crews.
Whenever Partager assists in a construction project (whether invoked or not) they automatically add one advantage to the results thanks to the experience of the engineers and construction workers in the settlement.  This trait will persist even if the Aspect is improved later.</li></li>
    <li><b>Size:</b> Village</li>
    <li><b>Garrison:</b> Currently full with the Angry Alligators.</li>
    </ul>
<?php
if ($_SESSION["RIVER"]>=5){
    echo "<h2>Winter Quarters</h2>
    <p>Founded as an outpost, the River Elves’ Winter Quarters is a fairly unique settlement.  Throughout most of the year it is manned by a small group of semi-permanent residents, a core group of elves who guard its borders and keep up its infrastructure.  But in the winter, when all the flotillas return, this small outpost swells enormously in population.</p>
<ul><li><b>Aspects:</b>
    <li><i>Territory Aspects:</i>
    <li>Coastal Marsh</li>
    <li>Sustainable Forestry</li>
    <li>Wildlife and Fisheries</li></li>
    <li><b>Settlement Aspects:</b>
    <li>Skeleton Krewe: not yet</li></li>
    <li><b>Size:</b> Outpost</li>
    <li><b>Garrison:</b> Currently full with the Brave Beavers
    </li></ul>";
}
        include '../footer.php';
        echo getarrows("4_Details.php",null);
    ?>
</body>
</html>
