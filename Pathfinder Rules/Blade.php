<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Blade Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<H1> Blade Elves </H1>
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
        <td>Standard (+2 Dex, -2 Cha, +2 Wis)</td>
    </tr>
    <tr>
        <th>Languages</th>
        <td>Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Skaplyndi)</td>
    </tr>
    <tr>
        <th colspan="2">Defense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Elven Immunities</i></td>
        <td>Blade Elves are immune to magic sleep effects and gain a +2 racial saving throw bonus against enchantment spells and effects.</td>
    </tr>
    <tr>
        <td><i>Iron Loyalty</i></td>
        <td>Blade Elves receive a +2 bonus on all saving throws versus fear, as well as all saving throws against mind affecting abilities that would make them betray, abandon, or otherwise fail their allies. These bonuses stack with their natural elven immunities.</td>
    </tr>
    <tr>
        <th colspan="2">Feat and Skill Racial Traits</th>
    </tr>
    <tr>
        <td><i>Keen Senses</i></td>
        <td>Skill bonus (Perception) - Elves receive a +2 racial bonus on Perception checks.</td>
    </tr>
    <tr>
        <td><i>Disciplined Leadership</i></td>
        <td>Blade Elves may use their wisdom bonus instead of their charisma bonus to determine their Leadership score, as well as on any check made to lead their allies in battle.</td>
    </tr>
    <tr>
        <th colspan="2">Offense Racial Traits</th>
    </tr>
    <tr>
        <td><i>Weapon Mastery</i></td>
        <td>Blade Elves are proficient in all bows, all weapons with the word “elven” in the name, and all swords and swordlike weapons (including bastard swords, daggers, elven curve blades, falchions, greatswords, kukris, longswords, punching daggers, rapiers, scimitars, short swords, and two-bladed swords.)</td>
    </tr>
    <tr>
        <th colspan="2">Senses Racial Traits</th>
    </tr>
    <tr>
        <td>Low-light vision</td>
    </tr>
</table>
<?php 
    include "../footer.php";
    echo getarrows(null,null);
?>
</body>