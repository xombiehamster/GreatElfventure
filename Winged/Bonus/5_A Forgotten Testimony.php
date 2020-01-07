<?php session_start(); ?>
<!DOCTYPE html>

<head>
<?php include '../../header.php'; ?>
    <title>
        A Forgotten Testimony
    </title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../Winged.css">
    <link rel="stylesheet" type="text/css" href="../../Blade/NPC.css">
</head>

<body>
<h1>A Forgotten Testimony</h1>

<p id="VissLetter">To the one who finds my remains</p>
<p id="VissLetter">My fellows said they would return in a few months once the war was over. I never saw them again. The last supply delivery was eleven years ago. I do not need to be a prophet to know what happened.</p>
<p id="VissLetter">I have devoted my life to Luna and the stars, and they tell me all I need to know. The signs are clear. All of my calculations and divinations agree. The Lycan Empire has been destroyed. The age of the Wolf has closed. It was destined to happen someday. This is not what turns my spirit to ash.</p>
<p id="VissLetter">Luna has stopped speaking to me. Once, I could hear her voice faintly in my dreams every night. Sometimes even while awake, when close to deciphering a pattern, I could hear her. Now, only silence. I still see her cross the sky every night, I still calculate her phases and movements, yet I hear nothing. For years I have been desperately begging for her to speak to me, but my despair receives no acknowledgement.</p>
<p id="VissLetter">Why did she abandon us?</p>
<p id="VissLetter">This question became my only reason for living. I don't eat much. Simple fare gathered from the land. I ate only as much as I needed and devoted myself fully to the question. Meditating, praying, spending hour after hour examining the infinite mystery of the stars.</p>
<p id="VissLetter">Now, as I feel my life ebb away, I finally understand.</p>
<p id="VissLetter">We failed her. Utterly. We failed to become what we were destined to become. We were not the children that our mother chose us to be. Now, we fade. I cannot read our future. Perhaps we will disappear and our mother will die, perhaps things come in cycles and we will be able to try again. I do not know. The stars won't show me that.</p>
<p id="VissLetter">I do know a few things about you. The stars showed me that much. I know this age will belong to you. I know you suffered great crimes at the hands of my people. I know you despise me. I will not ask you for forgiveness. We have neither earned it nor need it.</p>
<p id="VissLetter">I will ask, no beg of you two things. The dying wishes of a sad old woman.</p>
<p id="VissLetter">First, please send my soul to Luna. I have not the strength.</p>
<p id="VissLetter">Second, like this new age, this observatory now belongs to you. This building and the archive beneath it contains my life's work. I know you have no reason to value anything created by one so deservedly hated as me, but please do not let it be wasted.</p>
<p id="VissLetter">Thank you.</p>
<p id="VissLetter">Viss Heita, Oracle of Luna</p>

      <?php
    #Update bonus sequence
    include '../../settarget.php'; 
    settarget("Winged",null,null,5);
    #Footer content
    include '../footer.php';
    echo getarrows("../Year/02_1_Winged.php#jump","../Year/02_1_Winged.php#jump");
    setlast("Bonus/5_A Forgotten Testimony.php");?>
</body>
</html>
