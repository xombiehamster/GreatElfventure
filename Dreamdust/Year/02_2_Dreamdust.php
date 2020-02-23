<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>
        Dreamdust Elf Year 2 - Fall
    </title>
   
<link rel="stylesheet" type="text/css" href="../Dreamdust.css">
</head>
<body>
<h1>Turn 6 (Year 2, Fall)</h1>
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
<p>We’re bracing for refugees, but not sure what all we should do about it.  There’s ongoing discussion.  
</p>
<p><b>Economic</b> 
</p>
<p>We use the Investment trapping of the Infrastructure skill to set up some group housing.  Better to have it onhand in case of sudden refugees.  Food is a concern-- it takes time for goats to make more goats-- but housing is important.  Hopefully Lock has outfitted folks well enough that shelter and water will be the most urgent needs.  
</p>
<p>Roll: Skill 1 dice + 1 ability dice + 1 upgrade
</p>
<p>Results: 2 advantage, 1 successes, 0 triumphs
</p>
<p>(under effect of setback die)
</p>
<p><b>Political </b>
</p>
<p>Three guesses what we’re doing!  If you guessed that we continue using the Cloak & Dagger trapping of the Spycraft skill to keep an eye out… you’re right.  HOW DID YOU KNOW THAT.  ARE YOU WATCHING US.  O.O
</p>
<p>Roll: Skill 2 dice + 1 ability dice
</p>
<p>Results: 1 advantage, 1 successes, 0 triumphs
</p>
<p><b>Military</b> 
</p>
<p>We use the Pathfinders trapping of the Reconnaissance skill to check out the water source north of us that our spell located last turn.  
</p>
<p>Roll: Skill 2 dice + 1 ability dice + Machakw Pathfinder boost die + upgrade to check out water
</p>
<p>Results: 2 advantage, 2 successes, 0 triumphs
</p>
<p><b>Mental</b>
</p>
<p>If refugees are coming, food will be a concern sooner or later.  We know what was edible back home, but we’re still learning the land here.
</p>
<p>We use the Research trapping of the Academic skill to investigate edible plants (are there date palms? Cacti?) and other sources of food (Does the river have fish in it?).
</p>
<p>Roll: Skill 1 dice + 1 ability dice
</p>
<p>Results: 0 advantage, 0 successes, 0 triumphs
</p>
<h2>Turn 6 Results</h2>
<p><b>Economic-</b> Success! Riverhaven now has the aspect Extra Housing. Your builders are starting to warm up to local techniques of building with adobe, as well as learning some ways of making pottery and decorations from the Machakw. In true dreamdust elf fashion, they have found ways to make adobe bricks and structures far more colorful. They are beginning to make a bright jewel in the desert that stays colorful and welcoming, even in the dark.
</p>
<p>These houses currently stand empty, but by getting ahead of the ball you are able to make them quite cozy and well laid out. If a large number of refugees do arrive, they will find Riverhaven able to accept them. The town will be planned out and comfortable, instead of a haphazard mess like some others.
</p>
<p>Note that the Extra Housing Aspect can be invoked on an Infrastructure check to grow Riverhaven to Town size.
</p>
<p><b>Political-</b> Your spyhunters and the Machakw are getting increasingly worried about the Coyotes. The Machakw report to you that they’ve been seeing patrols of Coyotes on horses headed northeast. The Coyotes haven’t found Tk’eek and appear to be leaving Riverhaven alone for now, but concerns are  growing. Though neither settlement has caught anyone snooping, the Machakw are moving Tk’eek across the river, to 2 squares south and 2 squares west of Riverhaven.
</p>
<p>The good news is that Chief Hashkeh and Lee’Shaa are starting to warm up to thinking of dreamdust elves as allies. They tell you the location of Tk’eek without you even needing to ask. 
</p>
<p><b>Military-</b> A little snooping around the territory that your ritual detected magic in reveals its source. In the northern part of that square is what appears to be an abandoned ranch. The water source is an Arteseian Well Aspect located in a basin at the center of the ranch. The Abandoned Ranch appears to have been a casualty of war. It was surrounded by a large amount of pasture and what may have been a large amount of dry farming. It was a complex of a few adobe buildings and wooden barns, probably multiple families in one area.
</p>
<p>There are signs of conflict in the area, but it appears that whoever lived here fled. Your Machakw pathfinders note that this was one of the farms the Coyotes lived in before the war. When the wolves and “orangeskins” (probably hobgoblins you realize by now) fought in this area, the coyotes were forced to flee. They suspect that they headed east, like most of the rest of the Coyotes.
</p>
<p>As it is, this would be a good resting stop for a travelling nomadic settlement. The buildings have been stripped and the barns collapsed, but adobe walls last a long time and the water source is pure and clear. It could be restored, but that could take some work. 
</p>
<p>In addition to the territory with the ranch, you have scouted the two squares between your explored territory and it. These two squares have only the Scrubland Aspect, but have no threats to speak of.
</p>
<p>Your Machakw pathfinders are still hanging around and providing that boost die. They seem to like you. 
</p>
<p><b>Mental-</b> The Machakw didn’t come up with the saying “the desert never gives, only takes” out of nowhere. The issue isn’t so much knowing what you can eat or drink and where you can find it as finding enough. The river does have fish and there are a wide variety of edible plants and animals around, but life is harsh for anything and everything here. Not quite so harsh as the deserts you are used to, though. Your survival experts are managing to find enough food for your current group without problems, but a sudden large group of refugees arriving could be dangerous to your food stability. Even if it’s not sudden, if you intend Riverhaven to grow you will need a regular supply of food. Your traditional methods of scavenging may not be enough.
</p>
<p>On the upswing, one thing is certain. Between the well you found and the Coldwater river, you aren’t going to run out of water. The well is a fantastic water source, and the Coldwater is a wide river that runs exceptionally clean. These are a blessing to your people.</p>
    <?php
        include '../../settarget.php'; 
        settarget("Dreamdust",7,null,null);
        include '../footer.php';
        echo getarrows("02_1_Dreamdust.php","02_3_Dreamdust.php");
        setlast("Year/02_2_Dreamdust.php");
    ?>
</body>
