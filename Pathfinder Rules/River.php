<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../w3.css">
    <title>
        River Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<div class="w3-container w3-green">
    <H1> River Elves </H1>
    <div class="w3-panel">
        <table class="w3-table">
            <tr>
                <th style="text-align: right">Placeholder for image</th>
                <td style="width:60%">Placeholder for race summary and/or description</td>
            </tr>
        </table>
    </div>
    <div class='w3-panel'><!-- Placeholder for sub-document anchor -->
        <div class="w3-panel w3-round-xlarge w3-light-green">
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
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (+2 Str, &ndash;2 Dex, +2 Int)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Languages</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Sylvan)</td>
                </tr>
            </table>
            <h3>Defense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Elven Immunities</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Elves are immune to magic sleep effects and gain a +2 racial saving throw bonus against enchantment spells and effects.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Skin breathing vulnerability</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Because a river elf’s skin aids in their breathing, they takes a –2 penalty on Fortitude saving throws against gases, contact and inhaled poisons, and all other inhaled effects.</td>
                </tr>
            </table>
            <h3>Feat and Skill Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Keen Senses</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Elves receive a +2 racial bonus on Perception checks.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Amphibious</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">River elves are just as capable on land as in water.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Swamp Stealth</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">River elves receive a +4 bonus to stealth if in water or in swamps or wetlands</td>
                </tr>
            </table>
            <h3>Offense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Weapon familiarity</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Elves are proficient with longbows (including composite longbows), longswords, rapiers, and shortbows (including composite shortbows), and treat any weapon with the word “Elven” in its name as a martial weapon.</td>
                </tr>
            </table>
            <h3>Senses Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Low-light vision</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">River Elves have low-light vision.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Watersense</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Members of this race can sense vibrations in water, granting them blindsense 30 feet against creatures that are touching the same body of water.</td>
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
