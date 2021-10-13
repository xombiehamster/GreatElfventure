<?php
# This include handles the entire table generation for when the crag elves are not in the list.

echo '<div class="w3-panel w3-dark-gray">';
echo '<table class="w3-table w3-striped w3-grey" style="width:100%" id="special">';
echo '<tr class="w3-black">'; // six columns
echo '<th>Blade Elves</th>';
echo '<th>Crag Elves</th>';
echo '<th>Dark Elves</th>';
echo '<th>Dreamdust Elves</th>';
echo '<th>Fire Elves</th>';
echo '<th>River Elves</th>';
echo '<th>Winged Elves</th>';
echo '</tr>';
echo '<tr>';
echo '<td>'.getList("Blade",$_SESSION["BLADE"]).'</td>';
echo '<td>'.getList("Crag",$_SESSION["CRAG"]).'</td>';
echo '<td>'.getList("Dark",$_SESSION["DARK"]).'</td>';
echo '<td>'.getList("Dreamdust",$_SESSION["DREAMDUST"]).'</td>';
echo '<td>'.getList("Fire",$_SESSION["FIRE"]).'</td>';
echo '<td>'.getList("River",$_SESSION["RIVER"]).'</td>';
echo '<td>'.getList("Winged",$_SESSION["WINGED"]).'</td>';
echo '</tr>';

include 'getPotlucks.php';
echo getPotlucks($_SESSION["YEAR"]);

echo '<tr>';
echo '<td>'.getMeta("Blade",$_SESSION["B_META"]).'</td>';
echo '<td>'.getMeta("Crag",$_SESSION["C_META"]).'</td>';
echo '<td>'.getMeta("Dark",$_SESSION["DA_META"]).'</td>';
echo '<td>'.getMeta("Dreamdust",$_SESSION["DR_META"]).'</td>';
echo '<td>'.getMeta("Fire",$_SESSION["F_META"]).'</td>';
echo '<td>'.getMeta("River",$_SESSION["R_META"]).'</td>';
echo '<td>'.getMeta("Winged",$_SESSION["W_META"]).'</td>';
echo '</td></tr>';
echo '<tr><td colspan="6">';
echo '<h3>Bonus Documents></h3>';
echo '</tr>';
echo '<tr>';
echo '<td>'.getBonus("Blade",$_SESSION["B_EXTRA"]).'</td>';
echo '<td>'.getBonus("Crag",$_SESSION["C_EXTRA"]).'</td>';
echo '<td>'.getBonus("Dark",$_SESSION["DA_EXTRA"]).'</td>';
echo '<td>'.getBonus("Dreamdust",$_SESSION["DR_EXTRA"]).'</td>';
echo '<td>'.getBonus("Fire",$_SESSION["F_EXTRA"]).'</td>';
echo '<td>'.getBonus("River",$_SESSION["R_EXTRA"]).'</td>';
echo '<td>'.getBonus("Winged",$_SESSION["W_EXTRA"]).'</td>';
echo '</tr>';
echo '</table>';
echo '<div class=\'w3-card w3-light-grey\'>';
echo '<a href="Great Cookbook.php">Great Elfventure Great Cookbook</a>';
echo '</div>';
echo '</div>';
