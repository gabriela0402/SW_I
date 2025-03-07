<?php

$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$num3 = $_GET['n3'];

if ($num1>$num2 && $num1>$num3){
    echo "O número maior é $num1";
}elseif($num2>$num1 && $num2>$num3){
    echo "O número maior é $num2";

}elseif($num3>$num1 && $num3>$num2){
    echo "O número maior é $num3";
}

?>