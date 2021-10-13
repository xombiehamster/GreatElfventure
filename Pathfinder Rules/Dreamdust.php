<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../w3.css">
    <title>
        Dreamdust Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<div class="w3-container w3-deep-purple">
    <H1> Dreamdust Elves </H1>
    <div class="w3-panel">
        <table class="w3-table">
            <tr>
                <th style="text-align: right">Placeholder for image</th>
                <td style="width:60%">Placeholder for race summary and/or description</td>
            </tr>
        </table>
    </div>
    <div class='w3-panel'><!-- Placeholder for sub-document anchor -->
        <div class="w3-panel w3-round-xlarge w3-purple">
            <h3>Racial Details</h3>
            <table class="w3-table w3-white">
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
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (+2 Dex, -2 Cha, and +2 Con)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Languages</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Sylvan)</td>
                </tr>
            </table>
            <h3>Defense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Dreamspeaker</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">A few elves have the ability to tap into the power of sleep, dreams, and prescient reverie. Elves with this racial trait add +1 to the saving throw DCs of spells of the divination school and sleep effects they cast. In addition, elves with Wisdom scores of 15 or higher may use dream once per day as a spell-like ability (caster level is equal to the elf’s character level). </td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Sense Thoughts</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Some elves are so closely attuned to each other and their environment that they seem able to read each other’s minds and their foes’ thoughts. Elves with this alternate racial trait can use detect thoughts as a spell-like ability once per day, with a caster level equal to their character level.</td>
                </tr>
            </table>
            <h3>Magical Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Keeper of Secrets</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Some elves seek to protect younger races from dangerous lore. The save DCs of enchantment spells they cast against humanoids increase by 1 and they receive a +2 racial bonus on Bluff and Sense Motive checks to omit or cover up facts. </td>
                </tr>
            </table>
            <h3>Offense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Dimdweller</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Whenever characters with this trait benefit from concealment or full concealment due to darkness or dim light, they gain a +2 racial bonus on Intimidate, Perception, and Stealth checks. </td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Poison Use</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Members of this race are skilled with poison and never risk accidentally poisoning themselves when applying it to weapons.</td>
                </tr>
            </table>
            <h3>Senses Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Darkvision</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Though uncommon, some groups of elves are born with darkvision, rather than low-light vision. Elves with this racial trait gain darkvision with a range of 60 feet, but also gain sensitivity to light and are dazzled in areas of bright light or within the radius of a daylight spell.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Light Blindness</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Abrupt exposure to bright light blinds members of this race for 1 round; on subsequent rounds, they are dazzled as long as they remain in the affected area.</td>
                </tr>
            </table>
        </div>
    </div>


            <?php
    include "../footer.php";
    echo getarrows(null,null);
?>
</div>
</body>
