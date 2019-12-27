<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        Dreamdust Elf Year 1 - Winter
    </title>
</head>

<body>
<h2>Turn 3 (Year 1, Winter)
</h2>
<table style="width:100%">
        <tr>
            <th>Stress</th>
            <td>Economic 1/5</td>
            <td>Morale 0/5</td>
            <td>Property 1/4</td>
            <td>Military 0/5</td>
        </tr>
        <tr>
            <th>Fate Points</th>
            <td>3/4 Refresh</td>
        </tr>
		</table>
<p>The Dreamdust elves are hopeful about the upcoming meeting with the lizardfolk, but we’re still wary, and concerned about the Coyotes (who we’re assuming are the elves that were spying on us).  But the best thing to do is just forge ahead.
</p>

<p><b>Economic</b> 
</p>
<p>Now that the raids have paused for the moment, we’re trying to start setting up some trade.  The more people we can trade with, the better, goodwill is priceless.  And when we meet with the Machakw, we can find out what they need/want (we’re assuming food, right now) and what they can provide (we’re starting with requests for information and knowledge of local plants, to see what might be useful for drugs and dyes, and it’s worth knowing if we need to keep the goats away from anything).  
</p>
<p>We use the Merchant trapping of the Trade skill to try to work on the trading part of this trade town.  
</p>
<p>Roll: Skill 1 dice + 1 ability dice
</p>
<p>Results: 2 advantage, 2 successes, 0 triumphs
</p>
<p><b>Political</b> 
</p>
<p>Between the Machakw and the Coyotes, we’re being even more watchful.  We might have scared them off when we caught them last season, but better to keep an eye out anyway.  
</p>
<p>We use the Cloak & Dagger trapping of the Spycraft skill to keep an eye out for spies.  
</p>
<p>Roll: Skill 1 dice + 1 ability dice
</p>
<p>Results: 1 advantage, 0 successes, 0 triumphs
</p>
<p><b>Military</b> 
</p>
<p>With the temporary pause in raids, we want to take a little time to find out what’s near Riverhaven.  Our west side is fairly well protected by the river, so we’ll start by scouting towards the east.
</p>
<p>We use the Pathfinders trapping of the Reconnaissance skill to work on scouting the land around Riverhaven.  We want to scout the four squares northeast, east, southeast, and south of Riverhaven.
</p>
<p>Roll: Skill 2 dice + 1 ability dice
</p>
<p>Results: 5 advantage, 1 successes, 0 triumphs
</p>
<p><b>Mental</b>
</p>
<p>Well, we found a flappy who can teach lizardfolk.  Even if it’s not the right dialect, it might give us a better idea of what the Machakw are trying to say.  And might let us listen in on their conversations every now and then.  
</p>
<p>We use the Creation trapping of the Academics skill to learn lizard.  Lizardfolk?  Lizard words.  Talking.  
</p>
<p>Roll: Skill 1 dice + 1 ability dice + 1 boost die (from last round)
</p>
<p>Results: 1 advantage, 1 successes, 0 triumphs
</p>

<h2>Turn 3 Results
</h2>
<p><b>Misc-</b> The chieftain and shaman of the Machakw do not meet with you this turn. At the meeting, Tik’Tak greets you with a small group of scouts. He informs you that Lee’Shaa and Hashkeh are still… discussing what to do about you. Happily, though, he reports that they have agreed to a truce for the time being. The Machakw will not raid you this turn.
</p>

<p><b>Economic-</b> While you aren’t able to do any real negotiation with the Machakw this turn, Pebble is able to wrangle some information out of Tik’Tak about what the Machakw might need. Indeed, food is the primary thing. It seems, though, that they could use practically anything. Notably, it sounds like the Machakw are under a lot of stress right now. Tik’Tak also suggests that indeed, the Machakw might have good information to trade with you.
</p>

<p>During this lul, the trading post starts gently and carefully operating again. Though no one is willing to risk making a trade route right now, they do start gathering supplies. Various delicious and portable foodstuffs are brought out, as well as creature comforts that make the desert more bearable like silks and medicines. Of course, the Dreamdust elves also gather some of their special products that might help the little lizards relax a bit.
</p>

<p>If you do trade with the Machakw to resolve the situation, that check will have a upgrade.
</p>

<p><b>Political-</b> Your watchers stay vigilant night and day. Though there are a few scouting parties that come by  and watch the town for long periods, the Machakw stay true to their word and do not attempt to raid your settlement. Those elves who were spying on you also do not return, whoever the heck that was.
</p>

<p><b>Military-</b> The further they scout northeast, the more Machakw your pathfinders run into. Further from your settlement, they begin to run into several organized patrol and there are several near confrontations. As the truce is still quite unstable, your pathfinders decide to abandon those territories for now in the interest of maintaining peace.
</p>

<p>They are, however, able to scout the two territories to the south and southeast of Riverhaven. While both of these territories have the Scrubland aspects, the one directly to your south has something quite interesting: Strange, long, vine-like cacti that have bright almost fluorescent purple flowers that bloom only at night. Interestingly (because of course they would check,) these flowers can be steeped into an herbal tea. This tea causes deep sleep and vivid lucid dreams. They decide to name these cacti (and the Aspect) Dreamwalker Cacti.
</p>

<p><b>Mental-</b> Frustratingly, whatever dialect of lizardfolk the Machakw speak it’s not the same dialect your winged elf friend speaks. They are unable to recognize the strange barking sounds that the Machakw make, as those are not part of most Lizardfolk languages. Still, some things do translate and this flappy is quite interested in sticking around to make this work.
</p>
<p>Your next check to translate or learn the Machakw language gets a boost die.
</p>

<p><b>Event:</b> Raiders
</p>
<p><b>Status:</b> Uneasy Truce
</p>

<p>You have not heard any kind of detailed response from the Machakw and tensions are still high. While your traders are slowly getting the trading post ready, they are unwilling to leave the safety of the town to trade until they are sure they are in no danger from the Machakw patrols still seen regularly. However, no raids means you suffer no stress this turn.
</p>

    <?php
    include '../../settarget.php'; 
    settarget("Dreamdust",4,null,null);
    include '../footer.php';
    echo getarrows("01_2_Dreamdust.php","01_4_Dreamdust.php");
    setlast("Year/01_3_Dreamdust.php");?>
</body>
