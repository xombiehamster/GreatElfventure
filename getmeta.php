<?php
#This function builds an array that holds the list of file titles for each elf.
#Yes, I do have to manually update it when new files get added.
#It is what it is.
function getMArray($elf){
    $arr = array();
    switch($elf){
        case "Blade":
            $arr[0] = "Aspects and Goals";
            $arr[1] = "Factions";
            $arr[2] = "Leadership";
            $arr[3] = "Stunts and Rituals";
        break;
        case "Fire":
            $arr[0] = "Aspects";
            $arr[1] = "Factions";
            $arr[2] = "Leadership";
            $arr[3] = "Stunts and Rituals";
            $arr[4] = "Details and Design Notes";
            $arr[5] = "Ecology of the Burning Maar";
            $arr[6] = "Settlements";
            $arr[7] = "Divisions";
        break;
        case "River":
            $arr[0] = "Aspects and Goals";
            $arr[1] = "Factions";
            $arr[2] = "Leadership";
            $arr[3] = "Stunts and Rituals";
            $arr[4] = "Details";
            $arr[5] = "Settlements";
        break;
        case "Winged":
            $arr[0] = "Aspects and Goals";
            $arr[1] = "Factions";
            $arr[2] = "Leadership";
            $arr[3] = "Stunts and Rituals";
            $arr[4] = "Details";
    }
    return $arr;
}
#This function creates the list of available meta content
#Given an elf and their point in their sequence, it generates the unlocked list.
function getMeta($elf,$sequence){
    if(is_null($sequence)){
        return null;
    }else{
        $list = '<ul>';
        $i = 0;
        $arr = getMArray($elf);
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
