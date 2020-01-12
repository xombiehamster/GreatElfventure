<?php 
    session_start();
    include 'getList.php';
    include 'getBonus.php';
    include 'getMeta.php';
    if(is_null($_SESSION["CRAG"]) && $_SESSION["YEAR"]>=2){
        $_SESSION["CRAG"] = 2;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'header.html'; ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
        Great Elfventure
    </title>
</head>
<body>
<div style="overflow-x:auto;">
    <?php
        if($_SESSION["CRAG"]>0){
            echo '<img src="images/ExampelvesCrag.png" alt="Gosh that sure is a lot of elves">';
        }
        else{
            echo '<img src="images/Exampelves.png" alt="Gosh that sure is a lot of elves">';
        }
    ?>
</div>
<H1> Great ElfVenture Read Through </H1>

<p>This story is built out of many interconnected chains created over the course of a game of <span class="big"><a href="/Pathfinder 
Rules/Rules Index.php">CivElf</a></span>. 
    These include Roleplay Events, Turn Actions, and various Stories. As a reader, you have the choice of which order to read the text. 
    You can chose to follow a single Elven nation's story, or you can return to the index at any time to change to a different path.</p>
<p>Some bonus text will be unlocked by following a story thread to its reveal.  Other metadata type text will also be unlocked by reading 
    to the point where it becomes relevant. There will be links within the text to anything extra.</p>
<p>Please understand that this is very much an Early Access Pre-Alpha project at the moment. It is far from complete. Submit your bug 
    reports to me through <a href="mailto:deep_space@writing.com">email</a>.
</p>
<h3 id="jump">Supporting Document: <a href="Introduction.php">Contextual Introduction</a></h3>
<p>The Blade Elves are an NPC faction designed to be used as the tutorial for how the game (and the read-through) should flow.  Reading 
    their example turns is a good way to get a feel for what to expect from the actual players, and to figure out the site navigation.  
    Consider them the training wheels.</p>
<p>Every year starts with a <span class="big"><a href="/Events/01_0.php">Potluck</a></span>, so one point of entry is to start reading 
    from the very first one.</p>
<p>Alternatively, you can jump right in to reading the yearly tales of the lives of the elves with the Blade Elves' first turns.</p>

<div style="overflow-x:auto;">
    <table style="width:100%" id="special">
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
        <?php
            # Potluck documents
            include 'getPotlucks.php';
            echo getPotlucks($_SESSION["YEAR"]);
        ?>
        <tr>
            <!-- Meta documents -->
            <td>
                <?php echo getMeta("Blade",$_SESSION["B_META"]);?>
            </td>
            <?php 
            #Crag removal.
            if($_SESSION["CRAG"]>0){
                echo '<td>'.getMeta("Crag",$_SESSION["C_META"]).'</td>';
            }?>
            <td>
                <?php echo getMeta("Dark",$_SESSION["DA_META"]);?>
            </td>
            <td>
                <?php echo getMeta("Dreamdust",$_SESSION["DR_META"]);?>
            </td>
            <td>
                <?php echo getMeta("Fire",$_SESSION["F_META"]);?>
            </td>
            <td>
                <?php echo getMeta("River",$_SESSION["R_META"]);?>
            </td>
            <td>
                <?php echo getMeta("Winged",$_SESSION["W_META"]);?>
            </td>
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
    </table>
</div>

<?php include 'footer.php';
    #Displaying the status of all session variables.
    echo '<br/>Status string: ',getstatus();
?>
<!-- Link to form to set all session variables. -->
<p><a href="resume.php">Save progress or pick up where you left off.</a></p>
<img src="Images/Elfwiggle.gif" alt="Elfwiggle" class="center">
</body>
</html>