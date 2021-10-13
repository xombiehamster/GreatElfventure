<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../w3.css">
    <title>
        Blade Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<div class='w3-container w3-indigo'>
    <H1> Blade Elves </H1>
    <div class="w3-panel">
        <table class="w3-table">
            <tr>
                <th style="text-align: right">Placeholder for image</th>
            <td style="width:60%">Placeholder for race summary and/or description</td>
            </tr>
        </table>
    </div>
    <div class='w3-panel'><!-- Placeholder for sub-document anchor -->
        <div class="w3-panel w3-round-xlarge w3-blue">
            <h3>Racial Details</h3>
            <table class='w3-table w3-white'>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Type</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Humanoid (elf)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Size</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Medium</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Base Speed</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Normal (30ft)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Ability Score Modifiers</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (+2 Dex, -2 Cha, +2 Wis)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Languages</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Skaplyndi)</td>
                </tr>
            </table>
        <h3>Defense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Elven Immunities</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Blade Elves are immune to magic sleep effects and gain a +2 racial saving throw bonus against enchantment spells and effects.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Iron Loyalty</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Blade Elves receive a +2 bonus on all saving throws versus fear, as well as all saving throws against mind affecting abilities that would make them betray, abandon, or otherwise fail their allies. These bonuses stack with their natural elven immunities.</td>
                </tr>
            </table>
        <h3>Feat and Skill Racial Traits</h3>
            <table class='w3-table w3-white'>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Keen Senses</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Skill bonus (Perception) - Elves receive a +2 racial bonus on Perception checks.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Disciplined Leadership</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Blade Elves may use their wisdom bonus instead of their charisma bonus to determine their Leadership score, as well as on any check made to lead their allies in battle.</td>
                </tr>
            </table>
        <h3>Offense Racial Traits</h3>
            <table class='w3-table w3-white'>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Weapon Mastery</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Blade Elves are proficient in all bows, all weapons with the word “elven” in the name, and all swords and swordlike weapons (including bastard swords, daggers, elven curve blades, falchions, greatswords, kukris, longswords, punching daggers, rapiers, scimitars, short swords, and two-bladed swords.)</td>
                </tr>
            </table>
        <h3>Senses Racial Traits</h3>
            <table class='w3-table w3-white'>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Low-light vision</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Blade Elves are endowed with Low-light vision.</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
<?php
    include "../footer.php";
    echo getarrows(null,null);
?>
</div>
</body>