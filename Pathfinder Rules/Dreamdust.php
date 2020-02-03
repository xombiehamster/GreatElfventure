<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Dreamdust Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<H1> Dreamdust Elves </H1>
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
        <td>Standard (+2 Dex, -2 Cha, and +2 Con)</td>
    </tr>
    <tr>
        <th>Languages</th>
        <td>Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Sylvan)</td>
    </tr>
    <tr>
        <th colspan="2">Defense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Dreamspeaker</i></td>
        <td>A few elves have the ability to tap into the power of sleep, dreams, and prescient reverie. Elves with this racial trait add +1 to the saving throw DCs of spells of the divination school and sleep effects they cast. In addition, elves with Wisdom scores of 15 or higher may use dream once per day as a spell-like ability (caster level is equal to the elf’s character level). </td>
    </tr>
    <tr>
        <td><i>Sense Thoughts</i></td>
        <td>Some elves are so closely attuned to each other and their environment that they seem able to read each other’s minds and their foes’ thoughts. Elves with this alternate racial trait can use detect thoughts as a spell-like ability once per day, with a caster level equal to their character level.</td>
    </tr>
    <tr>
        <th colspan="2">Magical Racial Traits</th>
    </tr>
    <tr>
        <td><i>Keeper of Secrets</i></td>
        <td>Some elves seek to protect younger races from dangerous lore. The save DCs of enchantment spells they cast against humanoids increase by 1 and they receive a +2 racial bonus on Bluff and Sense Motive checks to omit or cover up facts. </td>
    </tr>
    <tr>
        <th colspan="2">Offense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Dimdweller</i></td>
        <td>Whenever characters with this trait benefit from concealment or full concealment due to darkness or dim light, they gain a +2 racial bonus on Intimidate, Perception, and Stealth checks. </td>
    </tr>
    <tr>
        <td><i>Poison Use</i></td>
        <td>Members of this race are skilled with poison and never risk accidentally poisoning themselves when applying it to weapons.</td>
    </tr>
    <tr>
        <th colspan="2">Senses Racial Traits</th>
    </tr>
    <tr>
        <td><i>Darkvision</i></td>
	<td>Though uncommon, some groups of elves are born with darkvision, rather than low-light vision. Elves with this racial trait gain darkvision with a range of 60 feet, but also gain sensitivity to light and are dazzled in areas of bright light or within the radius of a daylight spell.</td>
    </tr>
    <tr><td><i>Light Blindness</i></td>
        <td>Abrupt exposure to bright light blinds members of this race for 1 round; on subsequent rounds, they are dazzled as long as they remain in the affected area.</td>
    </tr>

</table>
<?php 
    include "../footer.php";
    echo getarrows(null,null);
?>
</body>
