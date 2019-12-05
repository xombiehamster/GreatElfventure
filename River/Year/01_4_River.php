<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        River Elf Year 1 - Spring
    </title>
</head>

<body>
<h1>Year 1 - Spring</h1>
    <p><b>Economic:</b> When the flotilla arrives in the Burning Maar, they’re not exactly thrilled to be there.  The lake stinks and they’re constantly on guard for accidental fires catching any of the rafts or the flammable cargo they’ve hauled upstream with them.  It’s uncomfortable and for once nobody actually wants to get in the water.</p>
    <p>They hurry to float the lumber shipment up to Surt so they can turn around and get out of this awful pond as soon as possible.  While making the hand off, Staurois asks the local fire elves what they’ve named the river that leads to them.  In trade, they request a load of volcanic ash to deliver back to Fort Alfyr to help with their concrete needs during their renovations.  Smilisca begs a barrel of charcoal into the deal, for use in making long-burning incense.  Acris quickly realizes that this means he will be doing a lot more sticky, smelly work in the next few months.</p>
    <p>Using the Merchants trapping of Trade to offload this lumber with the fire elves, they roll 2 Ability and 1 Proficiency dice: 2 advantage, 3 successes, 0 triumphs.</p>

    <?php 
        if ($_SESSION["RIVER"] < 5){
            $_SESSION["RIVER"] = 5;
        }
        echo $_SESSION["RIVER"]," index var<br/>";
    ?>
    <table style="width:100%">
        <tr>
            <td><a href="01_1_River.php">BACK</a></td>
            <td><a href="01_3_River.php">NEXT</a></td>
        </tr>
    </table>
    <?php include '../footer.php'?>
    <?php 
        if($_SESSION["YEAR"]<2){
            $_SESSION["YEAR"]=2;
        }
    ?>
</body>
