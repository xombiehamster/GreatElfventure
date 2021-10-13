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
<html lang="en-US">
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <title>
        Great Elfventure
    </title>
</head>
<div class="w3-container w3-khaki" style="overflow-x:auto;">
    <br>
    <div class="panel w3-center">
    <?php
        if($_SESSION["CRAG"]>0 && $_SESSION["YEAR"]<4){
            echo '<img src="images/ExampelvesCrag.png" class="w3-round" alt="Gosh that sure is a lot of elves">';
        }
        else{
            if($_SESSION["YEAR"]<4){
                echo '<img src="images/Exampelves.png" class="w3-round" alt="Statistically significant quantities of elves!">';
            }
            else{
                echo '<img src="images/ExampelvesVaqueros.png" class="w3-round" alt="Gotta collect them all!">';
            }
        }
    ?>
    </div>


<div class="w3-panel w3-yellow"><H1> Great ElfVenture Read Through </H1>

    <div class="w3-panel w3-card-4 w3-pale-yellow">

        <p>This story is built out of many interconnected chains created over the course of a game of <span class="big"><a href="Pathfinder Rules/Rules Index.php">CivElf</a></span>.
            These include Roleplay Events, Turn Actions, and various Stories. As a reader, you have the choice of which order to read the text.
            You can chose to follow a single Elven nation's story, or you can return to the index at any time to change to a different path.</p>
        <p>Some bonus text will be unlocked by following a story thread to its reveal.  Other metadata type text will also be unlocked by reading
            to the point where it becomes relevant. There will be links within the text to anything extra.</p>
        <p>Please understand that this is very much an Early Access Pre-Alpha project at the moment. It is far from complete. Submit your bug
            reports to me at deep_space@writing.com.
        </p>
    </div>

<h3 id="jump">Supporting Document: <a href="Introduction.php">Contextual Introduction</a></h3>

    <div class="w3-panel w3-card-4 w3-pale-yellow">
        <p>The Blade Elves are an NPC faction designed to be used as the tutorial for how the game (and the read-through) should flow.  Reading
            their example turns is a good way to get a feel for what to expect from the actual players, and to figure out the site navigation.
            Consider them the training wheels.</p>
        <p>Every year starts with a <span class="big"><a href="/Events/01_0.php">Potluck</a></span>, so one point of entry is to start reading
            from the very first one.</p>
        <p>Alternatively, you can jump right in to reading the yearly tales of the lives of the elves with the Blade Elves' first turns.</p>
    </div>

</div>

<?php
    IF($SESSION["CRAG"]>0) {
        include 'phase2.inc';
    } ELSE {
        include 'phase1.inc';
    }
?>


    <br>
<div class="w3-container w3-center">
<?php include 'footer.php';
    #Displaying the status of all session variables.
    echo '<br/>Status string: ',getstatus();
?>
<!-- Link to form to set all session variables. -->
<p><a href="resume.php">Save progress or pick up where you left off.</a></p>
<img src="images/elfwiggle.gif" alt="Elfwiggle" class="center">
</div>
</body>
</html>
