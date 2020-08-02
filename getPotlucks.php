<?php
#This function builds the table row for potlucks, placing them under their correct host elf type.
function getPotlucks($year){
    $str = "<tr>";
    $ind = 1;
    $arr = array("");
    while ($ind <= $year){
        $arr[$ind] = 'Events/'.getStringYear($ind).'_0.php';
        $ind++;
    }
    #BLADE
    $str .= '<td>';
    if(!is_null($arr[1])){
        $str .= '<ul><li><a href="'.$arr[1].'">Year 1: Goodbye Potluck</a></li>';
    }
    if(!is_null($arr[2])){
        $str .= '<li><a href="'.$arr[2].'">Year 2: A New Year</a></li>';
    }
    if(!is_null($arr[7])){
        $str .= '<li><a href="'.$arr[7].'">Year 7: A Potluck Disassembled</a></li>';
    }else{
        $str .= '</ul></td>';
    }
    #CRAG
    if($_SESSION["CRAG"]>0){
        $str .= '<td>';
        if(!is_null($arr[6])){
            $str .= '<ul><li><a href="'.$arr[6].'">Year 6: Precipitous Potluck</a></li></ul>';
        }
        $str .= '</td>';
    }
    #DARK
    $str .= '<td></td>';
    #DREAMDUST
    $str .= '<td></td>';
    #FIRE
    $str .= '<td>';
    if(!is_null($arr[3])){
        $str .= '<ul><li><a href="'.$arr[3].'">Year 3: Summer Potluck</a></li></ul>';
    }
    $str .= '</td>';
    #RIVER
    $str .= '<td>';
    if(!is_null($arr[4])){
        $str .= '<ul><li><a href="'.$arr[4].'">Year 4: A Peaceful Potluck</a></li></ul>';
    }
    $str .= '</td>';
    #WINGED
    $str .= '<td>';
    if(!is_null($arr[5])){
        $str .= '<ul><li><a href="'.$arr[5].'">Year 5: A Potluck with a View</a></li></ul>';
    }
    $str .= '</td>';
    ####
    $str .= "</tr>";
    return $str;
}