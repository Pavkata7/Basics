<?php

/*1.	Train
$input = (int)readline();
$arr = [];
$sum = 0;

for($i = 0; $input > $i; $i++){
    $arr[$i] = (int) readline();
    $sum += $arr[$i];
    echo "$arr[$i] ";
}
echo PHP_EOL;
echo $sum;
*/

/*2.	Common Elements
$input = (string) readline();
$input2 = (string) readline();

$arr = explode(" ",$input);
$arr2 = explode(" ", $input2);

$result = array_intersect($arr2, $arr);

$finalResult = implode(" ", $result);

echo $finalResult;
*/

/*3.	Zig-Zag Arrays
$input = (int) readline();
$array = [];
$resultArr1 = [];
$resultArr2 = [];

for($i = 0; $i < $input; $i++){
    $array = readline();
    $arrayFinal = explode(" ", $array);

    if($i % 2 == 0){
        $resultArr1[] = $arrayFinal[0];
        $resultArr2[] = $arrayFinal[1];
    }else if($i % 2 == 1){
        $resultArr2[] = $arrayFinal[0];
        $resultArr1[] = $arrayFinal[1];

    }
}
$finalResult1 = implode(" ", $resultArr1);
$finalResult2 = implode(" ", $resultArr2);
echo $finalResult1;
echo "\n";
echo $finalResult2;
*/

/*4.	Array Rotation
$input = explode(" ", readline());
$n = (int)readline();
$finalArray;
//$shift;

for($i = 0; $i < $n;$i++){
    $input[count($input)] = $input[0];
    unset($input[0]);
    $input = array_values($input);


}
$finalArray = implode(" ",$input);
echo $finalArray;
*/

/*5.	Top Integers
$input = explode(" ",readline());
$countArr = count($input);
$finalArr = [];


for($i=0; $i < $countArr ;$i++){

    $biggerInt = true;
    $currentEl = $input[$i];

    for($j=$i+1; $j < $countArr;$j++) {

        $nextEl = $input[$j];

        if($currentEl <= $nextEl){
            $biggerInt = false;
            break;
        }

    }

    if($biggerInt){
        $finalArr[] = $currentEl;
    }
}
$formatArr = implode(" ", $finalArr);
 echo $formatArr;
*/

/*6.	Equal Sums
$input = explode(" ", readline());
$revInput = array_reverse($input);
$countArr = count($input);
$middleInd = max($input);
$findInd = array_search($middleInd, $input);

$rightSum = 0;
$leftSum = 0;

//var_dump($middleInd);

//var_dump($findInd);

//var_dump($countArr);

if($countArr > $findInd+2){
    for($i = $findInd+1; $i<$countArr;$i++){
        $rightSum += $input[$i];
    }
}elseif($countArr == $findInd+2){
    $rightSum = $input[$countArr-1];
}
if($findInd > 1){
    for($i = 0; $i < $findInd;$i++){
        $leftSum += $input[$i];
    }
}elseif($findInd == 1){
    $leftSum = $input[0];
}

if($countArr == 1){
    echo "0";
}

if($leftSum == $rightSum && $countArr != 1){
    echo "$findInd";
}elseif($leftSum != $rightSum){
    echo"no";
}
*/

/*7.	Max Sequence of Equal Elements
$input = explode(" ", readline());

$arrArray = [];
$j = 0;

$countArr = count($input);

for($i = 0; $i < $countArr;$i++){
    while($input[$i] == $input[$i+1]){
        $arrArray[$j][$i] = $input[$i];
        $i++;
    }
    $j++;
}
$arrArray = array_values($arrArray);
$arrArray = max($arrArray);
$arrArray = array_values($arrArray);
$arrArray[] = $arrArray[0];

$finalResult = implode(" ", $arrArray);

echo "$finalResult";
*/

/*8.	Magic Sum
$input = explode(" ", readline());
$inputN = (int) readline();
$hm;
$mh;

$midArr = [];

$arrCount = count($input);

for($i = 0; $i < $arrCount; $i++){
    for ($j = 0; $j < $arrCount; $j++){
        if($input[$i] + $input[$j] == $inputN){
            $hm = array_search($input[$i], $input);
            $mh = array_search($input[$j], $input);
            $midArr[] = $hm;
            $midArr[] = $mh;
        }
    }

}


$finalArr = array_unique($midArr);
$finalArr = array_values($finalArr);

$finalCount = count($finalArr);


for($i = 0; $i <= ($finalCount / 2)+1;$i++){
    echo $input[$finalArr[$i]] . " " . $input[$finalArr[$i+1]];
    echo "\n";
    $i++;
}
*/


















