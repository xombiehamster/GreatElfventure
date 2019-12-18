<?php session_start(); ?>
<!DOCTYPE html>

<head>
    <title>
        Blade Elf Overview
    </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <h1>Overview</h1>
    <p>Unlike their free-spirited and mystical elf kin, Blade elves are a grounded, stoic, pragmatic, and martial people. Originally slave soldiers of the Lycan Empire, the Blade elves rebelled against their former masters and won their freedom. Though today
        they deeply value their freedom and ability to live in peace, they maintain the martial traditions the Lycans gave them. They consider their skills vital, as their culture encourages them to be ever vigilant against the return of tyranny and slavery.</p>
    <h2>High Concept</h2>
    <p><i>Elves born and bred for war.</i></p>
    <p>The Blade elves were created, not born. Early in their conquests, the Lycans saw the utility of elves for warfare. Lycans took elven infants, those orphaned by their conquests, and found among them the strongest and sturdiest among the elves. These
        became the first Blade elves.</p>
    <p>Blade Elves were trained from birth in all manner of warfare, from the most demanding elite Lycan teachers. Their long lives typically cut short by violence, Blade elves became a society of rigidly enforced stoic discipline and resolve. They had all
        of their elven history and identity stripped away. After they turned on their former masters, they now seek to reconnect with their heritage. They know, however, that they will forever different from their kin- and from this they draw strength.</p>
    <h2>Trouble Concept</h2>
    <p><i>All but the blade was stripped from us.</i></p>
    <p>Everything we knew was stolen from us, and all that we know now is war. We were taught only to fight and follow orders. Freedom and peace, though we now love them, are alien concepts to us. We were not only stripped of such things as history, song, and poetry, but also how to operate a government, how to tend crops, how to build… all of these are things we never knew in our old lives.</p>
    <h1>Goals</h1>
    <ol>
        <li><i>We will be whole again</i><br/>Blade elves wish to become a complete society. Currently, they are essentially a military and camp followers that have settled down into a fort. They will have much rebuilding, physical and cultural, before they are a society.</li>
        <li><i>Watchers on the wall</i><br/>Having seen tyranny firsthand from both sides, the Blade elves have decided that they have a duty to use their prowess to protect against tyranny instead of letting themselves become a tool for it again.</li>
    </ol>
    <h1>Milestones</h1>
    <h2>Before the War</h2>
    <p><i>Family in chains, brothers in arms.</i></p>
    <p>Unlike most, we know nothing before the Empire. We know not where we were taken from, who are parents were. Our parents were our drill masters, our siblings the soldiers beside us. Our history began and ended with our rank and unit. The only cause we had to die for was each other. The only bond we had was that between slaves, soldiers, and as a family. That bond was all we had to live for, and now it is strong as steel.</p>
    <p><b>Upgrade:</b> Our history of withstanding hardship as one provides a permanent Upgrade to the <i>Loyalty</i> skill.</p>
    <h2>Joining the War</h2>
    <p><i>The duty of all soldiers is eternal vigilance.</i></p>
    <p>Betraying everything you've ever known is not a decision made lightly, no matter how just the cause. Make no mistake: though we do not regret our treachery to our old masters, we still feel the sting of the dishonor. After all, we did not only betray and kill our “parents,” we betrayed and killed our own siblings who stayed loyal- whom we had sworn to fight and die for.</p>
    <p>There was no one reason, no one tragic event. The Lycans had assumed us blindly obedient and faithful, but the qualities of discipline, loyalty, and intuition that made us good soldiers kept our eyes open. We fought the rebel, saw their tenacity and spirit. We saw their cause, heard their plight. We realized that our love and loyalty to our family was being used as a weapon to commit atrocity after atrocity. That we were being used as a weapon to shatter cultures the way ours had been shattered. Our wisest eventually came to a decision: the crime of treachery was less than the crime of tyranny. It is a lesson we will not forget.</p>
    <p><b>Upgrade:</b> The dubious “gift” of having Lycan military discipline, organization, and determination drilled into us provides a permanent upgrade to the <i>Logistics</i> skill.</p>
    <h2>During the War</h2>
    <p><i>The price of freedom and peace can only be paid with blood.</i></p>
    <p>We were all trained from birth that death and sacrifice were necessary in war. We were all veterans before our fateful act of treachery. We had all lost family to violence before. We went in with eyes open, knowing full well what the cost would be.</p>
    <p>That didn't make it hurt any less. Though we joined the rebellion when it was well underway, we were one of the few groups of true professional soldiers in the rebellion. Most others were civilians who were turned into soldiers later in life. We had learned the trade from childhood. Wherever the battle was fiercest, that was where we were needed and that was where we went. We never once backed down from a battle, never once wanted for volunteers. There was not a one among us who was afraid to go.</p>
    <p>This time, it was different. This time, our cause was ourselves. Each one of our siblings who fell was one who would never taste of the peace and freedom to come, but each one who fell had sacrificed their lives to bring their loved ones to that reward. We will not forget those sacrifices, or what they brought us.</p>
    <p><b>Upgrade:</b> Our brutal experience of placing ourselves the front lines of a brutal war provides a permanent Upgrade to the <i>Conventional Warfare</i> skill.</p>
    <h2>The Post-War Dream</h2>
    <p><i>NEVER AGAIN!</i></p>
    <p>For the first time in any of our lives, we are free. For the first time ever, our blades are at peace. We embrace this with open arms. We want nothing more than to settle down and forget that the horror of war even exists, to reconnect with our heritage and throw down our blades. To experience the innocence we were never allowed to have.</p>
    <p>We know that this is not possible.</p>
    <p>As we connect with our fellows and learn of the past, we are certain that we will never be the same as other elves. We will never be able to regain what we lost. We accept this as our duty, for to forget our way of blades is to forget those who sacrificed all to bring us here.</p>
    <p>As we learn more of history, we become more certain that tyranny will come again in time. When that time comes, Blade Elves will stand ready once again. We will not forget who we are. We will not beat our swords into plowshares. We will hone the blade the Lycans gave it, and use it for our own cause. Never again will a Blade Elf live in chains. Never again will we be used for atrocity and tyranny. Though we will never regain our innocence, we see with eyes open. Ours was stripped away, but we will swear an oath to our fellows, to the world, to any people who seek to live free. Our oath, for all time, is two simple words: <i>NEVER AGAIN!</i></p>
    <p><b>Upgrade:</b> Our ongoing commitment to maintain a military peacekeeping force as a bulwark against tyranny provides us a permanent Upgrade to the <i>Military Science</i> skill.</p>
    
    <?php
        include '../settarget.php'; 
        settarget("Blade",null,1);
        include '../footer.php';
        echo getarrows(null,"1_Factions.php");
    ?>
</body>
</html>
