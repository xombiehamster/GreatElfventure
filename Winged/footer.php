<?php
echo 'Current year:', $_SESSION["YEAR"];
# Function builds the table for navigation arrows.
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
# Function adds a block for a narrative/turns hop.
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
# Function makes certain that the next narrative link isn't available unless it's been reached through the turn sequence.
function getflapnext($tar,$get,$point){
    if($tar>$get){
        return $point;
    } else {
        return null;
    }
}
# Function sets last location of narrative.
function setlast($curr){
    $_SESSION["LAST"] = 'Winged/'.$curr;
    return null;
}
# Function returns to narrative from Meta.
function goback(){
    if(is_null($_SESSION["LAST"])){
        return null;
    } else{
        $ret = '<p><a href="../'.$_SESSION["LAST"].'">Return to whence you came</a></p>';
    }
    return $ret;
}
?>
