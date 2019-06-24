<?php

/*1.	Smallest of Three Numbers
function smallestNum($num1, $num2, $num3){
    $result = min($num1, $num2, $num3);
    echo $result;
}
smallestNum();
*/

/*2.	Vowels Count
function vowelsCount($str){
    $formStr = str_split($str);
    $arrCount = count($formStr);
    $vowels = 0;
    for($i = 0; $i < $arrCount; $i++){
        if(preg_match("/[aeiou]/i", $formStr[$i])){
            $vowels++;
        }
    }
    echo "$vowels";
}

vowelsCount("I love PHP it's the best language");
*/

/*3.	Characters in Range
function charsRange($char1, $char2){
    $asc1 = ord($char1);
    $asc2 = ord($char2);
    $diMin = min($asc1, $asc2);
    $diMax = max($asc1, $asc2);
    for($i = $diMin + 1; $i < $diMax; $i++){
        echo chr($i) . " ";
    }
}

charsRange("#", ":");
*/

/*4.	Password Validator
function validPassword($str)
{

    $input = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);

    $passCount = count($input);


    preg_match('/[0-9]/', $str, $n, PREG_OFFSET_CAPTURE);
    preg_match('/[A-z]/i', $str, $chars, PREG_OFFSET_CAPTURE);

    $validations = 0;

    if ($passCount < 6 || $passCount > 10) {
        echo "Password must  be between 6 and 10 characters"."\n";
        $validations = 1;
    }
    if (count($n) + count($chars) != $passCount) {
        echo "Password must consist only of letters and digits"."\n";
        $validations = 1;
    }
    if (count($n) < 2) {
        echo "Password must have at least 2 digits"."\n";
        $validations = 1;
    }
    if ($validations === 0) {
        echo "Password is valid";
    }


}

validPassword('Pa$s$s');
*/

/*5.	Add and Subtract //////// oddly easy problem :/
function addAndSub ($num1, $num2, $num3){
    $num1x = number_format($num1);
    $num2x = number_format($num2);
    $num3x = number_format($num3);

    $result = ($num1x + $num2x) - $num3x;

    echo $result;
}

addAndSub(42,
    58, 100);
*/

/*
function midCharacters($str){
    $strx = (string)$str;
    $exStr = preg_split('//', $strx, 0, PREG_SPLIT_NO_EMPTY);

    if(count($exStr) % 2 == 1){
      $odd = floor(count($exStr)/2);
      echo $exStr[$odd];
    }else{
        $equal = floor(count($exStr)/2)-1;
        $equalx = floor(count($exStr)/2);

        echo $exStr[$equal] . $exStr[$equalx];
    }
}
midCharacters('3245');
*/

/*7.	NxN Matrix
function matrix ($n) {
    $num = number_format($n);
    for($i = 0; $i < $num; $i++){
        for($j = 0; $j<$num;$j++){
            echo $num . ' ';
        }
        echo PHP_EOL;
    }
}

matrix('7');
*/

/* 8.	Factorial Division
function factorial($num1, $num2){

    $num1x = number_format($num1);
    $num2x = number_format($num2);

    $n1 = $num1x-1;
    $n2 = $num2x-1;

  for($i = 1; $i <= $num1x; $i++){
      $num1x *= $n1;
    if($n1 != 1) {
        $n1--;
    }
  }
    for($i = 1; $i <= $num2x; $i++){
        $num2x *= $n2;
        if($n2 != 1) {
            $n2--;
        }
    }

    $res = $num1x / $num2x;
    echo number_format($res,2);

}


factorial(6, 2);
*/

/*9.	Palindrome Integers
$input = explode(PHP_EOL, readline());

$arrInp = [];

$firIndex = [];
$num = 0;
if($num == 0){
    $num++;
    $firIndex[0] = $input;

}

$i=0;

while($input != "END"){
    $input = readline();
    $arrInp[$i] = $input;
    $i++;
}
array_unshift($arrInp, $firIndex[0][0]);

$arrInpx = array_pop($arrInp);

$countArr = count($arrInp);

for($k = 0; $k  <  $countArr; $k++){
    $deepArrInp[$k] = str_split($arrInp[$k]);
}



foreach($deepArrInp as $key => $value){
    if($value == array_reverse($value)){
        echo "true". PHP_EOL;
    }else{
        echo "false". PHP_EOL;
    }
}
*/

/*10.	Top Number
$num = (int) readline();

$arrNums = [];
$approve = [];
$approved = [];

$f = 0;
$s =0;

for($i = 0; $i <= $num;$i++){
    $newI = str_split($i);
    for($k = 0; $k < count($newI); $k++){
        if($newI[$k] % 2 == 1){
            $approve[$f] = implode($newI);
            $f++;
            break;
        }
    }
}

$f = 0;

for($j = 0; $j < count($approve); $j++){

    $newJ = str_split($approve[$j]);
    $arrSum = array_sum($newJ);

    if ($arrSum % 8 == 0){
        $approved[$f] = implode($newJ);
        $f++;
    }

}

foreach($approved as $value){
    echo $value . PHP_EOL;
}
*/
















