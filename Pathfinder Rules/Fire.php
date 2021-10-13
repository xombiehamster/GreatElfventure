<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../w3.css">
    <title>
        Fire Elf Pathfinder Race Statistics
    </title>
</head>
<body>
<div class="w3-container w3-deep-orange">
    <H1> Fire Elves </H1>
    <div class="w3-panel">
        <table class="w3-table">
            <tr>
                <th style="text-align: right">Placeholder for image</th>
                <td style="width:60%">Placeholder for race summary and/or description</td>
            </tr>
        </table>
    </div>
    <div class='w3-panel'><!-- Placeholder for sub-document anchor -->
        <div class="w3-panel w3-round-xlarge w3-orange">
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
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (+2 Dex, &ndash;2 Con, +2 Cha)</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Languages</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Standard (Elven and Common, bonus language: Celestial, Draconic, Gnoll, Gnome, Goblin, Orc, and Skaplyndi)</td>
                </tr>
            </table>
            <h3>Racial Traits</h3>
            <table class="w3-table w3-white">
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Improved Elemental Resistance (fire)</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Fire elves have Fire Resistance 10, a direct side effect of the flesh-warping magics of the Conflagration, and the only reason any elves from Muspelham survived.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Pyromaniac(fire)</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Benefit: Members of this race are treated as +1 level higher when casting spells with the fire descriptor, using granted powers of the Fire domain, using bloodline powers of the fire elemental bloodline, using the revelations of the oracle&rsquo;s flame mystery, and determining the damage of alchemist bombs that deal fire damage. This trait does not give members of this race early access to level-based powers; it only affects powers that they could already use without this trait. If a member of this race has a Charisma score of 11 or higher, it also gains the following spell-like abilities: At Will&mdash;<em>Spark</em>, range touch only. The caster level for these spell-like abilities is equal to the user&rsquo;s character level.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Improved Elemental Resistance (fire)</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Fire elves have Fire Resistance 10, a direct side effect of the flesh-warping magics of the Conflagration, and the only reason any elves from Muspelham survived.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Craftselves</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">enefit: Having once served as the industrial base that supported the Blade Elf armies, surviving Fire Elves tend to have some professional skills and training. Their new abilities have led to inventive new crafting techniques, often involving direct exposure to intense heat while working. Members of this race gain a +2 racial bonus on all Craft or Profession checks to create objects from metal or stone.</td>
                </tr>s
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Fire in the Blood</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Benefit: Members of this race gain fast healing 2 for 1 round anytime they take fire damage (whether or not this fire damage overcomes their fire resistance, if any). Members of this race can heal up to 2 hit points per level per day with this ability, after which it ceases to function.</td>
                </tr>
                <tr class="w3-border-bottom w3-border-light-blue">
                    <th style="text-align: right">Lightbringer</th>
                    <td class='w3-border-left w3-border-pale-red' style="width:80%">Members of this race are immune to light-based blindness and dazzle effects, treated as one level higher when determining the effects of any light-based spells (or spell-like and supernatural abilities) they cast. Members with int 10+ can cast Light at will, self-only, as a spell-like ability.</td>
                </tr>
            </table>
    </div>
<?php
    include "../footer.php";
    echo getarrows(null,null);
?>
</div>
