<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Winged Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<H1> Winged Elves </H1>
<table style="width:100%">
    <tr>
        <th>Type</th>
        <td>Humanoid (elf)</td>
    </tr>
    <tr>
        <th>Size</th>
        <td>Medium</td>
    </tr>  
    <tr>
        <th>Base Speed</th>
        <td>Normal (30ft), Fly (50ft, average maneuverability)</td>
    </tr>
    <tr>
        <th>Ability Score Modifiers</th>
        <td>Standard (+2 Dex, –2 Con, +2 Int)</td>
    </tr>
    <tr>
        <th>Languages</th>
        <td>Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Sylvan)</td>
    </tr>
    <tr>
        <th colspan="2">Defense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Elven Immunities</i></td>
        <td>Winged Elves are immune to magic sleep effects and gain a +2 racial saving throw bonus against enchantment spells and effects.</td>
    </tr>
    <tr>
        <td><i>Fly</i></td>
        <td>Winged elves have a fly speed of 50ft with average maneuverability. They have a wingspan of ~12 feet and cannot fly in an area where they cannot fully extend their wings. They cannot fly while wearing heavy armor or carrying a heavy load. Due to their wings, they must have their armor specially made to fit them. Whenever buying armor, winged elves must spend 50% more of its base price.</td>
    </tr>
    <tr>
        <th colspan="2">Feat and Skill Racial Traits</th>
    </tr>
    <tr>
        <td><i>Keen Senses</i></td>
        <td>Skill bonus (Perception) - Elves receive a +2 racial bonus on Perception checks.</td>
    </tr>
    <tr>
        <td><i>Swimming Hindrance</i></td>
        <td>They are not able to swim well due to their wings being a hindrance. They recieve a -4 Racial Penalty to their Swim checks.</td>
    </tr>
    <tr>
        <th colspan="2">Offense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Weapon familiarity</i></td>
        <td>Winged elves are proficient with bows (including composite longbows) of both elven and non-elven make.</td>
    </tr>
    <tr>
        <th colspan="2">Senses Racial Traits</th>
    </tr>
    <tr>
        <td><i>Sharp-eyed</i></td>
	<td>Winged elves gain an additional +2 to visual perception checks in conditions of good light (not dim or dark).</td>
    </tr>
    <tr>
        <th colspan="2">Racial Feats</th>
    </tr>
    <tr>
        <td><i>Dive Attack</i></td>
	<td>A winged elf can make a dive attack. A dive attack is treated like a charge, but they must descend a minimum of 30 feet and attack with a piercing weapon. If the hit is successful, it deals double damage.</td>
     </tr>
     <tr>
        <th colspan="2">Racial Archetypes</th>
     </tr>
     <tr>
        <td><i>Harrier</i></td>
	<td>Fighter archetype</td>
     </tr>
</table>
<?php 
    include "../footer.php";
    echo getarrows(null,null);
?>
</body>
