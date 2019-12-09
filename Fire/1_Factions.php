<?php session_start(); ?>
<!DOCTYPE html>
<h1><strong>FACTIONS</strong></h1>
<h2><strong>The Ashen</strong></h2>
<p>A small majority of the Fire Elves, for whom (despite the years) the trauma of the Conflagration still feels fresh; some even still claim to feel the burn of the Conflagration&rsquo;s fires, despite both now being much more resistant to it, and even enjoying the sensation of fire in modern times. While not all members of the Ashen (the most dedicated of whom bear ash on their face to mark their allegiance) are obsessed with the past, many of their decisions are ostensibly based on and motivated by Muspelham&rsquo;s fall. They tend to be insular and authoritarian, are the strongest supporters of the Fury, and are more likely to reject outsiders and support military endeavors. They are also the group most motivated by hatred, be it for the Lycans, or to a lesser extent their Blade Elf cousins. Members of this faction tend to be from the military and the lower echelon occupations, though they don&rsquo;t hold the entirety of either. Their official leader is Ashwalker Auburn Tsun.</p>
<h2><strong>Phoenix Imperialis</strong></h2>
<p>A vocal minority of Fire Elves have removed themselves from the Conflagration discussion. Whether out of a desire to &ldquo;let the past die&rdquo;, as the Hunger himself as put it, or because they view the Conflagration as a moment of rebirth for their people, followers of the Phoenix Imperialis (whose symbol is of course a golden phoenix) are expansion-oriented and democratic, likely to push for anything that grows their people&rsquo;s (and faction&rsquo;s) overall power and voice. Members tend to be architects, businesselves, and smithmasters, and their designs tend to be a mix of Lycan-style stonework and smooth Elven curves. Though ostensibly aligned with the Hunger, since the Triumvirate is banned from involvement in political factions, their leader is the &ldquo;Phoenix Lord&rdquo; (a grandiose title popular with the public) Barrabus Leafstorm.</p>
<?php
    include '../settarget.php'; 
    settarget("Fire",null,2);
    include '../footer.php';
    echo getarrows("0_Aspects.php",null);?>
</body>
</html>
