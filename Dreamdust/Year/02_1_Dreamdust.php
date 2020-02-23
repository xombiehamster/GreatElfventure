<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Dreamdust Elf Year 2 - Summer
    </title>
   
<link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>

<body>
<h1>Turn 5 (Year 2, Summer)</h1>
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
            <td>4/4 Refresh</td>
        </tr>
		</table>

<p>The Machakw are our buddies now!  We’re working on trying to build up Riverhaven, now that we don’t have to worry about raids.  We’ve got a few special orders we’re trying to fill, and we’re trying to build up relations with anyone else in the area.  
</p>
<p><b>Economic</b>
</p>
<p>We use the Establishment trapping of the Infrastructure skill to split off a new nomadic settlement, now that Riverhaven is stable.  
</p>
<p>Roll: Skill 1 dice + 1 ability dice + 1 upgrade
</p>
<p>Results: 0 advantage, 3 successes, 0 triumphs
</p>
<p>I’m using my Nomadic stunt to split a group off and start them wandering along the river fork towards Watchtower Rock.  We’ve told the winged elves we’re going that way, and hoping they’ll show up to trade.  So we’ll be carrying some trade good samples, mostly of woven blankets and fabrics.  
</p>
<p><b>Political</b> 
</p>
<p>STILL WARY.  That’s not going away anytime soon.  
</p>
<p>We use the Cloak & Dagger trapping of the Spycraft skill to keep an eye out.  Both eyes.  All the eyes.
</p>
<p>Roll: Skill 1 dice + 1 ability dice
</p>
<p>Results: 2 advantage, 0 successes, 0 triumphs
</p>
<p><b>Military</b> 
</p>
<p>Time to try scouting northwards again!  
</p>
<p>We use the Pathfinders trapping of the Reconnaissance skill to work on scouting the land around Riverhaven.  We try scouting northwest, north, northeast, and east of Riverhaven.
</p>
<p>Roll: Skill 2 dice + 1 ability dice + Machakw Pathfinder boost die
</p>
<p>Results: 3 advantage, 2 successes, 0 triumphs
</p>
<p><b>Mental</b>
</p>
<p>It’s been long enough for all of our magi to recover and brace themselves to try the water-locating ritual again.  We target the line of four squares due north of Riverhaven.  
</p>
<p>We use the Magic trapping of the Mysticism skill to cast the ritual.  
</p>
<p>Roll: Skill 1 dice + 1 ability dice + 1 upgrade
</p>
<p>Results: 3 advantage, 1 successes, 0 triumphs
</p>
<p><h2>Turn 5 Results</h2>
</p>
<p>Misc- At the beginning of the year, a group of dreamdust elves saunters up to your camp. They mention that sourpuss Lock is combing through his territory, and getting any elves he finds to pack up and leave. Sure, Lock gives them supplies but it’s kinda rude. They’re more than happy to join your group, and note that more are coming. The trip across the badlands isn’t that terrible for dreamdust elves, so they immediately pitch in to help.
</p>
<p><b>Economic-</b> Congratulations! You have constructed your first fully nomadic settlement!
</p><ul><li><b>Name:</b> Up to you</li> 
<li><b>Description:</b> Up to you</li>
<li><b>Size:</b> Village</li>
<li><b>Settlement Aspects</b></li>
<li><b>Nomadic Settlement</b></li>
<li>Empty Slot</li>
<li><b>Garrison:</b> One slot empty</li></ul> 
<p>Okay so technically speaking, you’re not supposed to be able to create and move a settlement on the same turn, but for sheer coincidence sake I am going to allow it just this once.
</p>
<p>This settlement comes to the base of Watchtower Rock, noting a waterfall feeding the river that leads to it coming out of a cave to the west. Of course, they aren’t able to get to the top of the tower. After a couple of days, though, they see an extremely concerned looking (but unharmed) group of winged elf pathfinders led by Dhakamari descending from the tower.
</p>
<p>As to what they are concerned about, well, you’ll have to ask Aeden when he gets his results…
</p>
<p>Oh, and the strain on resources means you will take a setback die on improving or creating any aspects next turn.
</p>
<p><b>Political-</b> My legal team has advised me to use the phrase "you have found no spies."
</p>
<p><b>Military-</b> With the help from the Machakw scouts, you are finally able to scout all of the squares surrounding Riverhaven! Thanks to the Machakw they actually got ahead of schedule and were able to get that last square polished off.
</p>
<p>(Un?)fortunately, none of these squares contain anything wildly radical. They are mostly more scrubland. However, you are now reasonably certain that Riverhaven is in a safe location and there is nothing nasty lurking nearby.
</p>
<p>You also do not lose the boost die from the Machakw scouts. They appear to be sticking around at least for a while longer.
</p>
<p><b>Mental-</b> Water detecting spell detects water!
</p>
<p>You have detected a large source of potable water in the furthest north square designated. I have placed a blue circle on that square to identify it for you. You aren’t sure what the water source is, but your magi did an excellent job of figuring out its exact location.
</p>
<p>A Pathfinders check to find this source of water will receive an upgrade.</p>
    
    <?php
        include '../../settarget.php'; 
        settarget("Dreamdust",6,null,null);
        include '../footer.php';
        echo getarrows("01_4_Dreamdust.php","02_2_Dreamdust.php");
        setlast("Year/02_1_Dreamdust.php");
    ?>
</body>
