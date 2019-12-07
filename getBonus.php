<?php
function getArray($elf){
    $arr = array();
    switch($elf){
        case "Blade":
            $arr[0] = "Aspects";
            $arr[1] = "Factions";
            $arr[2] = "Skills and Stunts";
        break;
        case "Fire":
            $arr[0] = "Aspects";
            $arr[1] = "Factions";
        break;
        case "River":
            $arr[0] = "Aspects";
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
function getBonus($elf,$sequence){
    if(is_null($sequence)){
        return null;
    }else{
        $list = '<ol>';
        $i = 0;
        $arr = getArray($elf);
        while($i<=$sequence){
            $list .= '<li><a href="'.$elf.'/'.$i.'_'.$arr[$i].'.php">';
            $list .= $arr[$i];
            $list .= '</a></li>';
            $i ++;
        }
        $list .= '</ol>';
        return $list;
    }
}
?>