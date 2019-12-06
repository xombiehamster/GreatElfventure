<?php
function getPotlucks($year){
    $str = "<tr>";
    $ind = 0;
    $arr = array();
    while ($ind < $year){
        $arr[$ind] = 'Events/'.getStringYear($year).'_'.$ind.'.php';
        $ind++;
    }
    #BLADE
    $str .= '<td>';
    if(!is_null($arr[0])){
        $str .= '<ul><li><a href="'.$arr[0].'">Year 1: Goodbye Potluck</a></li>';
    }
    if(!is_null($arr[1])){
        $str .= '<li><a href="'.$arr[1].'">Year 2: A New Year</a></li></ul></td>';
    }else{
        $str .= '</ul></td>';
    }
    #CRAG
    if($_SESSION["CRAG"]>0){
        $str .= '<td></td>';
    }
    #DARK
    $str .= '<td></td>';
    #DREAMDUST
    $str .= '<td></td>';
    #FIRE
    $str .= '<td>';
    if(!is_null($arr[2])){
        $str .= '<ul><li><a href="'.$arr[2].'">Year 3: Summer Potluck</a></li></ul>';
    }
    $str .= '</td>';
    #RIVER
    $str .= '<td>';
    if(!is_null($arr[3])){
        $str .= '<ul><li><a href="'.$arr[3].'">Year 4: A Peaceful Potluck</a></li></ul>';
    }
    $str .= '</td>';
    #WINGED
    $str .= '<td></td>';
    ####
    $str .= "</tr>";
    return $str;
}