<?php
#Generates navigation arrows to the desingated targets.
function getarrows($back,$next){
    $str = 'Current year: '.$_SESSION["YEAR"];
    $str .='<table id="nav"><tr>';
    if(!is_null($back)){
        $str .= '<td><a href="'.$back.'">BACK</a></td>';
    }
    $str .= '<td><a href="../index.php">Go home.</a></td>';
    if(!is_null($next)){
        $str .= '<td><a href="'.$next.'">NEXT</a></td>';
    }
    $str .= '</tr></table>';
    return $str;
}

#This is the order of the status string.
function elfOrd($ind){
    switch ($ind){
        case 0:
            return "YEAR";
        break;
        case 1:
            return "BLADE";
        break;
        case 2:
            return "CRAG";
        break;
        case 3:
            return "DARK";
        break;
        case 4:
            return "DREAMDUST";
        break;
        case 5:
            return "FIRE";
        break;
        case 6:
            return "RIVER";
        break;
        case 7:
            return "WINGED";
        break;
        case 8:
            return "B_EXTRA";
        break;
        case 9:
            return "C_EXTRA";
        break;
        case 10:
            return "DA_EXTRA";
        break;
        case 11:
            return "DR_EXTRA";
        break;
        case 12: 
            return "F_EXTRA";
        break;
        case 13:
            return "R_EXTRA";
        break;
        case 14:
            return "W_EXTRA";
        break;
        case 15:
            return "B_META";
        break;
        case 16:
            return "C_META";
        break;
        case 17:
            return "DA_META";
        break;
        case 18:
            return "DR_META";
        break;
        case 19: 
            return "F_META";
        break;
        case 20:
            return "R_META";
        break;
        case 21:
            return "W_META";
        break;
    }
    return null;
}

#Returns null if given a negative - this permits the status string to contain the null values of unset session variables.
function numfix($var){
    if(is_numeric($var)){
        if($var<0){
            return null;
        }else{
            return $var;
        }
    }else {
        return null;
    }
}

#Gets the current status of all session variables.
function getstatus(){
    $ret = "";
    $i = 0;
    while($i<22){
        if(is_null($_SESSION[elford($i)])){
            $ret .= "-1 ";
        }else{
            $ret.=$_SESSION[elford($i)]." ";
        }
        $i++;
    }
    return $ret;
}

#Sets the status of all session variables.
function setstatus($str){
    $arr = explode(" ",$str);
    $ind = 0;
    while ($ind<22){
        if(!is_numeric($arr[$ind])){
            return 1;
        }
        $ind++;
    }
    $ind = 0;
    while ($ind<22){
        $_SESSION[elford($ind)] = numfix($arr[$ind]);
        $ind++;
    }
    return null;
}

#Compares two status strings to see which is greater.
function statuscomp($s1,$s2){
    $arr1 = explode(" ",$s1);
    $arr2 = explode(" ",$s2);
    $ret = 0;
    $ind = 0;
    while ($ind<22){
        if(is_null($arr1[$ind])){
            $arr1[$ind] = -1;
        }
        $ind++;
    }
    $ind = 0;
    while ($ind<22){
        if(is_null($arr2[$ind])){
            $arr2[$ind] = -1;
        }
        $ind++;
    }
    $ind = 0;
    while ($ind<22){
             if($arr1[$ind]<$arr2[$ind]){
                $ret--;
            }else if($arr1[$ind]>$arr2[$ind]){
                $ret++;
             }
        $ind++;
    }
    return $ret;
}
?>
