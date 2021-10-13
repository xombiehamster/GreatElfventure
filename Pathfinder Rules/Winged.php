<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../w3.css">
    <title>
        Winged Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<div class="w3-container w3-cyan">
    <H1> Winged Elves </H1>
    <div class="w3-panel">
        <table class="w3-table">
            <tr class="w3-border-bottom w3-border-light-blue">
                <th style="text-align: right">Placeholder for image</th>
                <td style="width:60%">Placeholder for race summary and/or description</td>
            </tr>
        </table>
    </div>
    <div class='w3-panel'><!-- Placeholder for sub-document anchor -->
        <div class="w3-panel w3-round-xlarge w3-light-blue">
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
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Normal (30ft), Fly (50ft, average maneuverability)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Ability Score Modifiers</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (+2 Dex, –2 Con, +2 Int)</td>
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
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Winged Elves are immune to magic sleep effects and gain a +2 racial saving throw bonus against enchantment spells and effects.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Fly</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Winged elves have a fly speed of 50ft with average maneuverability. They have a wingspan of ~12 feet and cannot fly in an area where they cannot fully extend their wings. They cannot fly while wearing heavy armor or carrying a heavy load. Due to their wings, they must have their armor specially made to fit them. Whenever buying armor, winged elves must spend 50% more of its base price.</td>
                </tr>
            </table>
            <h3>Feat and Skill Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Keen Senses</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Skill bonus (Perception) - Elves receive a +2 racial bonus on Perception checks.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Swimming Hindrance</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">They are not able to swim well due to their wings being a hindrance. They recieve a -4 Racial Penalty to their Swim checks.</td>
                </tr>
            </table>
            <h3>Offense Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Weapon familiarity</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Winged elves are proficient with bows (including composite longbows) of both elven and non-elven make.</td>
                </tr>
            </table>
            <h3>Senses Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Sharp-eyed</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Winged elves gain an additional +2 to visual perception checks in conditions of good light (not dim or dark).</td>
                </tr>
            </table>
            <h3>Racial Feats</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Dive Attack</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">A winged elf can make a dive attack. A dive attack is treated like a charge, but they must descend a minimum of 30 feet and attack with a piercing weapon. If the hit is successful, it deals double damage.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th colspan="2">Racial Archetypes</th>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right"><i>Harrier</i></th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Fighter archetype</td>
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
