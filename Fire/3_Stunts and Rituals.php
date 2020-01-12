<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="Fire.css">
    <title>
        Fire Elf Stunts and Rituals
    </title>
</head>
<h1><strong>RITUALS</strong></h1>

<p><strong>DETECT ORES</strong></p>
<ul>
<li><strong>Risk- </strong>Low</li>
<li><strong>Range</strong>- 15 squares</li>
<li><strong>Target</strong>- Up to 4 squares, which must be touching</li>
<li><strong>Difficulty</strong>- 2</li>
 <li><strong>Effect</strong>- This ritual will tell you which, if any, of the targeted squares contain any Aspects related to usable deposits of valuable minerals. It will not tell you the specific Aspects or their exact location in the square, only that they exist and which squares they are in</li>
 </ul>
    
    <p><strong>DEEP SCAN</strong></p>
<ul>
<li><strong>Risk </strong>- Low</li>
<li><strong>Range </strong>- One Territory</li>
<li><strong>Target </strong>- One territory that has already been pathfound.</li>
<li><strong>Difficulty </strong>- 1</li>
<li><strong>Effect </strong>- This ritual provides a detailed look at the geology under a territory that has already been explored. It reveals any Aspects relating to subsurface features that may have been missed by surface pathfinders, such as hidden caves, volcanic activity, deep mineral deposits, and seismic faults. In addition, the detailed geological information it provides gives an automatic Upgrade to the next use of any Aspects in that territory related to underground features.</li>
</ul>
    
    <p><strong>Bad Dog, No Treat!</strong></p>
<ul>
<li><strong>Risk- </strong>Medium</li>
<li><strong>Range</strong>- 5 squares from casting location (Allied Settlement)</li>
<li><strong>Target</strong>- 1 Square</li>
<li><strong>Difficulty</strong>- 1</li>
<li><strong>Effect</strong>- This ritual will cause any and all wolf elves in the targeted territory to temporarily be surrounded by a stinking orange cloud of sulphuric smoke. This choking acrid substance sticks to and stains skin and clothing with a bright orange pigment does not wash out easily, and produces a foul scent that can be detected for hours or even days after exposure.</p>
<p>While this ritual technically takes place over a very short duration, it can be carefully timed to target (or hopefully target) a specific group of wolf elves or even interrupt a specific known wolf elf activity.</p>
<p>When cast, target both a specific territory and a specific track - Economic, Political, Military, or Mental. Any wolf elf activities in that territory for that turn will have one difficulty die added to their dice pool as their personnel struggle with the noticeable and aggravating smoke.</p>
<p>Note your timing of the effect when you cast the ritual. Causing the effect to take place at a critical moment, such as during a military operation or during an event wolf elf spies are trying to influence, may upgrade the difficulty die to a challenge die.</p>
<p>Note that it is possible for spies to evade detection even with this ritual going off. As with all magic, there are countermeasures. If a spy is indoors, able to flee, or able to counter with alchemy or spells of their own, it may not work. This will be decided by nation level dice, and it is <em>not</em> an automatic "detect spies" button.</p>
<p>If it comes down to character scale, this ritual will be treated as a <em>Stinking Cloud</em> spell, except 5 foot radius that is both centered on and travels with each wolf elf in the area. The spell has saving throws and duration as if Fury had used her highest available spell slot to cast it, and can be countered by any means that could counter Fury actually casting a spell.&nbsp;</p>
<p>Also at character scale, affected creatures are marked with orange stains and a foul scent. The scent provides a +10 bonus to any opposed perception checks to identify them by scent. The pigment immediately ruins most disguises and must be covered with another disguise check at a -5 penalty. These effects can only be removed with magic or alchemical detergents and last 2d4 days.</p></li>
</ul>
    
    <p><strong>Partial rituals (have the basis for but are not completed yet);</strong></p>

    <p><strong>&ldquo;Intent to harm&rdquo; ward</strong></p>
<p>Basically, you cast it, it lasts 1d4 turns, if anyone attempts to spy on you the ward triggers and alerts your leaders, allowing you a reflexive C&amp;D or a bonus proficiency die if you already made one</p>
<p>May also have roleplaying consequences, as the ritual delivered is set to trigger on anyone "intending to do harm on the settlement or its occupants"</p>
    
<h1><strong>STUNTS</strong></h1>
<h2><strong>Fire for Effect</strong></h2>
<p>The Fire Elves have been known to use their natural resistances (fire) to great effect in combat, but doing so comes at a strong resource cost, as much of their supplies literally go up in smoke.</p>
<p>The Fire Elves can take 1 economic stress to upgrade a conventional warfare or special operations test.</p>
<h2><strong>Convection</strong></h2>
<p>Fire Elves are defined, if anything, by passion; the drive and energy that bore them through the Conflagration remains both a powerful motivation and an unrelenting force within their lives. Stresses that should break them bend in the face of it, and those who would push against them find themselves burned in return.</p>
<p>Any time the Fire Elves opt to take Consequences as a direct result of stress inflicted by another nation within the past turn, they may spend a Fate Point to inflict a 1d3 strength Consequence on the stress-inflicting nation. That nation does not recover any stress from taking this consequence.</p>
<h2><strong>Hot Gates</strong></h2>
<p>One of the few aspects of Blade Elf culture to survive the Conflagration was their skill at warfare. The Fire Elves, trained by scholars, engineers, and military experts from the back lines of the Blade Elves, and heat-forged into a unified force by the end of the Rebellion, have learned how to fortify any encampment in their favor, and turn the very field of battle against an opponent.</p>
<p>A dug in Fire Elf unit may choose to apply any Advantage (max 4) received on a conventional warfare skill on their current territory as Threat to an opponent's roll.</p>
<h2><strong>Red Gold</strong></h2>
<p>The Marr is a natural source of alchemical components, and the Fire Elves of Surt were quick to exploit it. By adopting some of these components into their currency (the base unit of which was the Firebird, a one-ounce piece featuring an unusual red tint), the Fire Elves made it possible for the currency itself to be used in spellcasting and magic item creation.&nbsp;</p>
<p>Nations that conduct in Trade or Mercantilism checks within Surt gain a boost die to the next Research, Creation, Trade, or Mercantilism check involving magical or alchemical materials they make. This boost die expires within the next three seasons.</p>

<?php
    include '../settarget.php'; 
    settarget("Fire",null,4,null);
    include 'footer.php';
    echo getarrows("2_Leadership.php","4_Details and Design Notes.php");
    echo goback();?>
</body>
</html>
