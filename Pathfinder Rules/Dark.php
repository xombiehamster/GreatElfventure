<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Dark Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<H1> Dark Elves </H1>
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
        <td>Normal (30ft)</td>
    </tr>
    <tr>
        <th>Ability Score Modifiers</th>
        <td>Standard (+2 Dex, -2 Str, +2 Wis)</td>
    </tr>
    <tr>
        <th>Languages</th>
        <td>Standard (Elven, and Common, bonus language: Draconic, Gnoll, Sylvan, Undercommon, Dwarven, Abyssal, and Infernal)</td>
    </tr>
    <tr>
        <th colspan="2">Defense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Elven Immunities</i></td>
        <td>Dark Elves are immune to magic sleep effects and gain a +2 racial bonus on saving throws made against enchantment spells and effects.</td>
    </tr>
    <tr>
        <td><i>Unearthly Grace</i></td>
        <td>As long as a Dark Elf wears light or no armor, they gain a +2 dodge bonus to their armor class.</td>
    </tr>
    <tr>
        <td><i>Thin Blooded</i></td>
        <td>Dark Elves do not thrive well outside of heated environments.  They take a -2 on saves vs cold environments or spells with the cold descriptor.</td>
    </tr>
    <tr>
        <th colspan="2">Offense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Weapon Familiarity</i></td>
        <td>Dark Elves are proficient with all daggers, knives, razors, and similar weapons.</td>
    </tr>
    <tr>
        <th colspan="2">Feat and Skill Racial Traits</th>
    </tr>
    <tr>
        <td><i>Keen Senses</i></td>
        <td>Elves gain a +2 racial bonus to Perception checks. </td>
    </tr>
    <tr>
        <td><i>Cave hearing</i></td>
        <td>Dark elves ears are extremely well adapted for underground living.  When underground, in a dungeon, indoors, or otherwise in a confined area, Dark Elves get an additional +2 to sound based perception checks and can pinpoint the exact location of a sound if they pass the DC by 10 or more, even through solid matter such as dirt or a wall.</td>
    </tr>
    <tr>
        <th colspan="2">Movement Racial Traits</th>
    </tr>
    <tr>
        <td><i>Swift as Shadows</i></td>
        <td>Dark Elves reduce the penalty for using Stealth at their full speed by 5, and reduce the Stealth check penalty for sniping by 10.</td>
    </tr>
    <tr>
        <th colspan="2">Senses Racial Traits</th>
    </tr>
    <tr>
        <td><i>Darkvision + Light Sensitivity</i></td>
	<td>Dark Elves have a darkvision of 60 feet due to their nocturnal nature.  As a result, they are dazzled as long as they remain in an area of bright light.</td>
    </tr>
</table>
<?php 
    include "../footer.php";
    echo getarrows(null,null);
?>
</body>
