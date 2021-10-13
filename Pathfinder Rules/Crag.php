<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../w3.css">
    <title>
        Crag Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<div class="w3-container w3-dark-grey">
    <H1> Crag Elves </H1>
    <div class="w3-panel">
        <table class="w3-table">
            <tr>
                <th style="text-align: right">Placeholder for image</th>
                <td style="width:60%">Placeholder for race summary and/or description</td>
            </tr>
            <tr>
                <th style="text-align: right"><H3>NOTE:</H3></th>
                <td style="width:60%">Info below is for a different race.</td>
            </tr>
        </table>
    </div>
    <div class='w3-panel'><!-- Placeholder for sub-document anchor -->
        <div class="w3-panel w3-round-xlarge w3-grey">
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
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (+2 Dex, -2 Str, +2 Wis)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Languages</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (Elven, and Common, bonus language: Draconic, Gnoll, Sylvan, Undercommon, Dwarven, Abyssal, and Infernal)</td>
                </tr>
            </table>
            <h3>Defense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Elven Immunities</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Dark Elves are immune to magic sleep effects and gain a +2 racial bonus on saving throws made against enchantment spells and effects.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Unearthly Grace</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">As long as a Dark Elf wears light or no armor, they gain a +2 dodge bonus to their armor class.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Thin Blooded</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Dark Elves do not thrive well outside of heated environments.  They take a -2 on saves vs cold environments or spells with the cold descriptor.</td>
                </tr>
            </table>
            <h3>Offense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Weapon Familiarity</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Dark Elves are proficient with all daggers, knives, razors, and similar weapons.</td>
                </tr>
            </table>
            <h3>Feat and Skill Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Keen Senses</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Elves gain a +2 racial bonus to Perception checks. </td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Cave hearing</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Dark elves ears are extremely well adapted for underground living.  When underground, in a dungeon, indoors, or otherwise in a confined area, Dark Elves get an additional +2 to sound based perception checks and can pinpoint the exact location of a sound if they pass the DC by 10 or more, even through solid matter such as dirt or a wall.</td>
                </tr>
            </table>
            <h3>Movement Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Swift as Shadows</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Dark Elves reduce the penalty for using Stealth at their full speed by 5, and reduce the Stealth check penalty for sniping by 10.</td>
                </tr>
            </table>
            <h3>Senses Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Darkvision + Light Sensitivity</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Dark Elves have a darkvision of 60 feet due to their nocturnal nature.  As a result, they are dazzled as long as they remain in an area of bright light.</td>
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
