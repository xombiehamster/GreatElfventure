<?php 
    include 'header.php';
    include 'getList.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>
    Great Elfventure
</title>
</head>
<body>
<H1> Great ElfVenture Read Through </H1>
<?php
    echo "Hello World!";
?>

<p>This story is built out of many interconnected chains created over the course of a game of CivElf. 
    These include Roleplay Events, Turn Actions, and various Stories. As a reader, you have the choice of which order to read the text. 
    You can chose to follow a single Elven nation's story, or you can retun to the index at any time to change to a different path.</p>
<p>Some bonus text will be unlocked by following a story thread to its reveal.  Other metadata type text will also be unlocked by reading 
    to the point where it becomes relevant. There will be links within the text to anything extra.</p>
</ln>
<p>Please understand that this is very much an Early Access Pre-Alpha project at the moment. It is far from complete. Submit your bug 
    reports to me through <a href="mailto:deep_space@stories.com">email</a>.
</p>
<ln/>
<p>Every year starts with a <a href="/Events/01_0.php">Potluck</a>, so one point of entry is to start reading from the very first one.</p>

<table style="width:100%">
<tr>
    <th>Blade Elves</th>
    <?php
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
    <td>
        <?php echo getList("Blade",$_SESSION["BLADE"]);?>
    </td>
    <?php
    if($_SESSION["CRAG"]>0){
        echo '<tr>'.getList("Crag",$_SESSION["CRAG"]).'</tr>';
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
        <?php echo getList("River",$_SESSION["RIVER"]);?>
    </td>
    <td>
        <?php echo getList("Winged",$_SESSION["WINGED"]);?>
    </td>
</tr>
</table>

<ul>
    <li><a href="/Blade/Blade_-1_Aspects.php">Blade Elf Aspects</a></li>
<?php
    if ($_SESSION["BLADE"] == 1){
        echo '<li><a href=/Blade/Blade_-1_Factions.php>Blade Elf Factions</a></li>';
    }
    else echo "<li>",$_SESSION["BLADE"],"</li>";
?>
</ul>
<ul>
    <li><a href="/River/River_-1_Aspects.php">River Elf Aspects</a></li>
</ul>
</body>
</html>