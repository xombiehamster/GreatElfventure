<?php
echo 'Current year:', $_SESSION["YEAR"];
function getarrows($back,$next){
    $str ='<table style="width:100%"><tr>';
    if(!is_null($back)){
        $str .= '<td><a href="'.$back.'">BACK</a></td>';
    }
    $str .= '<td><a href="../../index.php">Go home.</a></td>';
    if(!is_null($next)){
        $str .= '<td><a href="'.$next.'">NEXT</a></td>';
    }
    $str .= '</tr></table>';
    return $str;
}
function getflapstory($local,$point){
    $str ='<table style="width:100%"><tr>';
    if(!is_null($local)){
        $str .= '<td><a href="'.$local.'">Return to Turns</a></td>';
    }
    if(!is_null($point)){
        $str .= '<td><a href="'.$point.'">Go to Narrative</a></td>';
    }
    $str .= '</tr></table>';
    return $str;
}
function getflapnext($tar,$point){
    if($tar>=1){
        return $point;
    } else {
        return null;
    }
}
?>
