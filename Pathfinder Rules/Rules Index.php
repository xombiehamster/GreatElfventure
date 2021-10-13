<?php 
    session_start(); 
    $doc = "https://docs.google.com/document/d/e/2PACX-1vT7L3V34JReYxQYckTVjqCBM2ekTJOL1XzwVnA6Rkir0Ljr3j2RlPBRTgP6F1AZ1nAkDSkjz_wezCvs/pub?embedded=true";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include '../header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Great Elfventure Grand Rules Document
    </title>
</head>
<body>

<p>Below you'll see the document that includes the rules for the Great Elfventure campaign is a mostly-unedited state.</p>


<iframe src="<?php echo $doc;?>" style="width:100%;height:400px;">
</iframe>

<div style="overflow-x:auto;">
    <table id="special">
        <tr>
        <!-- Headers -->
            <th>Blade Elves</th>
            <?php
                #Crag elves don't appear until after the 2nd Potluck is read.
                if($_SESSION["CRAG"]>0){
                    echo '<th>Crag Elves</th>';
                }?>
            <th>Dark Elves</th>
            <th>Dreamdust Elves</th>
            <th>Fire Elves</th>
            <th>River Elves</th>
            <th>Winged Elves</th>
        </tr>
        <tr>
        <!-- Stats -->
            <td><a href="Blade.php">Pathfinder Stats</a></td>
            <?php
                #Crag elves don't appear until after the 2nd Potluck is read.
                if($_SESSION["CRAG"]>0){
                    echo '<td><a href="Crag.php">Pathfinder Stats</a></td>';
                }?>
            <td><a href="Dark.php">Pathfinder Stats</a></td>
            <td><a href="Dreamdust.php">Pathfinder Stats</a></td>
            <td><a href="Fire.php">Pathfinder Stats</a></td>
            <td><a href="River.php">Pathfinder Stats</a></td>
            <td><a href="Winged.php">Pathfinder Stats</a></td>
        </tr>
        <tr>
        <!-- Additional -->
            <td><!-- Additional --></td>
            <?php
                #Crag elves don't appear until after the 2nd Potluck is read.
                if($_SESSION["CRAG"]>0){
                    echo '<td><!-- Additional --></td>';
                }?>
            <td><!-- Additional --></td>
            <td><!-- Additional --></td>
            <td><!-- Additional --></td>
            <td><!-- Additional --></td>
            <td><a href="Winged-Harrier.php">Racial Archetype - Fighter</a></td>
        </tr>
    </table>
</div>

    <?php 
    include "../footer.php";
    echo getarrows(null,null);
?>
</body>
