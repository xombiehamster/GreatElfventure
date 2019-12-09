<?php 
    include 'header.php';
    include 'getList.php';
    include 'getBonus.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>
        Great Elfventure
    </title>
</head>
<body>
<H1> Great ElfVenture Read Through </H1>

<p>This story is built out of many interconnected chains created over the course of a game of CivElf. 
    These include Roleplay Events, Turn Actions, and various Stories. As a reader, you have the choice of which order to read the text. 
    You can chose to follow a single Elven nation's story, or you can retun to the index at any time to change to a different path.</p>
<p>Some bonus text will be unlocked by following a story thread to its reveal.  Other metadata type text will also be unlocked by reading 
    to the point where it becomes relevant. There will be links within the text to anything extra.</p>
</ln>
<p>Please understand that this is very much an Early Access Pre-Alpha project at the moment. It is far from complete. Submit your bug 
    reports to me through <a href="mailto:deep_space@writing.com">email</a>.
</p>
<ln/>
<p>Every year starts with a <a href="/Events/01_0.php">Potluck</a>, so one point of entry is to start reading from the very first one.</p>
<p>Alternatively, you can jump right in to reading the yearly tales of the lives of the elves with the Blade Elves' first turns.</p>

<table style="width:100%">
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
    <!-- Turn Documents -->
    <td>
        <?php echo getList("Blade",$_SESSION["BLADE"]);?>
    </td>
    <?php
    #Making sure there's no mysterious blank Crag space.
    if($_SESSION["CRAG"]>0){
        echo '<td>'.getList("Crag",$_SESSION["CRAG"]).'</td>';
    }?>
    <td>
        <?php echo getList("Dark",$_SESSION["DARK"]);?>
    </td>
    <td>
        <?php echo getList("Dreamdust",$_SESSION["DREAMDUST"]);?>
    </td>
    <td>
        <?php echo getList("Fire",$_SESSION["FIRE"]);?>
    </td>
    <td>
        <?php 
            echo getList("River",$_SESSION["RIVER"]);
        ?>
    </td>
    <td>
        <?php echo getList("Winged",$_SESSION["WINGED"]);?>
    </td>
</tr>
    <!-- Literally just a line. -->
    <tr><td colspan = "7"><hr/></td>
</tr>
<?php
    # Potluck documents
    include 'getPotlucks.php';
    echo getPotlucks($_SESSION["YEAR"]);
?>
<tr>
    <!-- Literally just a line. -->
    <td colspan = "7"><hr/></td>
</tr>
<tr>
    <!-- Bonus documents -->
    <td>
        <?php echo getBonus("Blade",$_SESSION["B_EXTRA"]);?>
    </td>
    <?php 
    #Crag removal.
    if($_SESSION["CRAG"]>0){
        echo '<td>'.getBonus("Crag",$_SESSION["C_EXTRA"]).'</td>';
    }?>
    <td>
        <?php echo getBonus("Dark",$_SESSION["DA_EXTRA"]);?>
    </td>
    <td>
        <?php echo getBonus("Dreamdust",$_SESSION["DR_EXTRA"]);?>
    </td>
    <td>
        <?php echo getBonus("Fire",$_SESSION["F_EXTRA"]);?>
    </td>
    <td>
        <?php echo getBonus("River",$_SESSION["R_EXTRA"]);?>
    </td>
    <td>
        <?php echo getBonus("Winged",$_SESSION["W_EXTRA"]);?>
    </td>
</tr>
<tr>
    <!-- Literally just a line. -->
    <td colspan = "7"><hr/></td>
</tr>
</table>
<?php include 'footer.php';
    #Displaying the status of all session variables.
    echo '<br/>Status string: ',getstatus();
?>
<!-- Link to form to set all session variables. -->
<p><a href="resume.php">Pick up where you left off.</a></p>
<img src="Images/Elfwiggle.gif" alt="Elfwiggle" class="center">
</body>
</html>