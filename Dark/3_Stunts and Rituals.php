<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../header.php'; ?>
    <title>
        Dark Elf Stunts and Rituals
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Stunts</h1>
    <h2>Adaptive Engineering</h2>
    <p>Dark elf sappers are extremely adept at finding ingenious solutions to large problems.  If a division with engineers is unoccupied and at full strength in an underground location, you may use the Reconnaissance skill under a trapping of recovery.  This occupies the division for one turn, and they gain the Fatigued condition afterwards.  Can only be used once a year.</p>
    <h2>Tunnel Fighting</h2>
    <p>Dark elves are masters of operations and fighting in close confined quarters.  Any military skills used in squares that contain tunnels, caves, mines, or other underground aspects receive a boost die.</p>
    
    <?php
    include '../settarget.php'; 
    settarget("Dark",null,null,null);
    include '../footer.php';
    echo getarrows("2_Leadership.php",null);?>
</body>
</html>
