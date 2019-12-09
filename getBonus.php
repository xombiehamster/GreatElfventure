<?php
#This function builds an array that holds the list of file titles for each elf.
#Yes, I do have to manually update it when new files get added.
#It is what it is.
function getArray($elf){
    $arr = array();
    switch($elf){
        case "Blade":
            $arr[0] = "Aspects and Goals";
            $arr[1] = "Factions";
            $arr[2] = "Stunts and Rituals";
            $arr[3] = "Leadership";
        break;
        case "Fire":
            $arr[0] = "Aspects";
            $arr[1] = "Factions";
            $arr[2] = "Stunts and Rituals";
            $arr[3] = "Leadership";
            $arr[4] = "Details and Design Notes";
            $arr[5] = "Ecology of the Burning Maar";
            $arr[6] = "Settlements";
            $arr[7] = "Divisions";
            $arr[8] = "A Tourist in Surt";
        break;
        case "River":
            $arr[0] = "Aspects and Goals";
            $arr[1] = "Factions";
            $arr[2] = "Stunts and Rituals";
            $arr[3] = "Leadership";
            $arr[4] = "Details";
            $arr[5] = "A Measure of Hospitality";
            $arr[6] = "Settlements";
        break;
    }
    return $arr;
}
#This function creates the list of available bonus content
#Given an elf and their point in their sequence, it generates the unlocked list.
function getBonus($elf,$sequence){
    if(is_null($sequence)){
        return null;
    }else{
        $list = '<ul>';
        $i = 0;
        $arr = getArray($elf);
        while($i<=$sequence){
            $list .= '<li><a href="'.$elf.'/'.$i.'_'.$arr[$i].'.php">';
            $list .= $arr[$i];
            $list .= '</a></li>';
            $i ++;
        }
        $list .= '</ul>';
        return $list;
    }
}
?>