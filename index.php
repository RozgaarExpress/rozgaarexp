<?php 



echo $ss = 'PHP is a very popular language';
function isVowel($c)
{
	$vov = ['a','A','e','E','i','I','o','O','u','U'];

    if(in_array($c, $vov)){
		return true;
    }
    else{
    	return false;
	}
}

function reverseVowel($str)
{
    $j=0;
    // Storing the vowels separately
    $vowel= array();
    $stlen = strlen($str);

    for($i=0; $i<$stlen; $i++){

        if (isVowel($str[$i]))
            $vowel[$j++] = $str[$i];
    }
    //print_r($vowel);

   for($i=0; $i<$stlen; $i++){
        if (isVowel($str[$i]))
             $str[$i] = $vowel[--$j] ;
		}
		return $str;
}

echo reverseVowel($ss);

exit();
echo "<pre/>";

$A = [5, 1, 1, 1, 2, 2, 4, 4, 4, 4, 4, 4, 7, 7, 11, 13, 18, 10, 90, 100, -20, 2, 1, 1, 5];
$k =3;
$otput= "";
$arr = array_count_values($A);
arsort($arr);

foreach ($arr as $key => $value) {
	if($value >=$k){
		$otput.= $key;
	}
}
echo 'output : '. $otput;
//print_r($arr);





exit();

echo "<br/>-----------------------Replace special Charecheter by comma rest of hyphan and all numeric value-------------<br/>";

 $str = '\\,3;//4;6\\-3_\n4';

$str = preg_replace('/[^a-zA-Z0-9-.]/', ',', $str);
echo $str."<br/>";
$arr = array_filter(explode(',', $str));
//print_r($arr);
echo getSumIntVal($arr);


function getSumIntVal($val){
	$len = count($val);
	$arrsum =array();
	
	//print_r($val);
	foreach ($val as $key => $value){ 
		//echo $value;
	if(is_numeric($value)){
		      $arrsum[] = $value;
		} 
		else{
			$slen = strlen($value);
			for($j=0; $j<$slen; $j++){
				$v = substr($value, $j,1);
				if(is_numeric($v)){
		  	    	$arrsum[] = $v;
				} 
			}
		}
	}
	
	//print_r($arrsum);
	return array_sum($arrsum);
}




echo "<br/>-----------------------Reverse Number-------------<br/>";
$rnum = 12345;
$len = strlen($rnum);
$rev =0;
for($i=$len; $i>=0; $i--){
	echo substr($rnum,$i,1);
}

echo "<br/>";

while(floor($rnum)){
	$rem = $rnum % 10;
	$rev = $rev * 10 + $rem;
	$rnum = $rnum / 10;
}
echo $rev;

echo "<br/>-----------------------Amstong Testin-------------<br/>";

$number = 371;

$num = $number;
$sum =0;

while ($num != 0) {
	$rem = $num % 10;
	$sum = $sum + ($rem * $rem * $rem);
	$num = $num/10;
}
//echo $sum;
if($number == $sum){
	echo $number ." is an Armstrong Number ";
} else {
	echo $number ." is not an Armstrong Number ";
}


echo "<br/>";
echo "<br/>";


$variable1 = 'Hello';

$variable2 = 'World';

echo $variable3 = $variable1.$variable2;
echo "<br/>";
echo $variable3 = "$variable1 $variable2";
echo "<br/>";

$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;

echo "<br />";
echo $x;

echo "<br />";
echo $x---$x--;

echo "<br />";
echo $x;

echo "<br/>";

echo "<br/>";

echo "-------------------------Find prime Number from an Array-----------------------------<br/><pre>";

$arr = array(3,4,6,7,8,9,10,11,13,15,17);

$alen= count($arr);
$bool =true; 

for ($i=0; $i < $alen; $i++) { 

	for($a=2; $a<=$arr[$i]/2; $a++){
		
		if($arr[$i] % $a == 0){
			//echo $arr[$i]." Is not Prime<br/>";
			$bool=false;
			break;			
		} else{
		echo $arr[$i]." Is Prime<br/><br/>";
		break;	
	}
		
}
}

echo "-------------------------Xento Interview Q-Fabonacci-------------------------------------<br/><pre>";

function getFabSec($arr){

$arr1 = array();
$lenth = count($arr);
for($a=0; $a<$lenth; $a++){
	$num = $arr[$a];
	$fabarr = getFabSer($num);
	if(in_array($num, $fabarr)){
		$arr1[] = $num;
	}	
}
return $arr1;
}

function getFabSer($num){
	$arr1 = array();
	$first =0;
	$second =1;
	$third =0;
	$arr1[0] = 0;
	$arr1[1] = 1;
	for($i=1; $i<=$num;$i++){	
		$third = $first+$second;
		$arr1[] = $third;
		$first = $second;
		$second= $third;
		
	}
	return $arr1;
}


print_r(getFabSec([10,20,1,13]));

echo "-------------------------Reverse String-------------------------------------<br/><pre>";

	echo $str = "Pramod Yaduvanshi";
    ECHO "<BR/>";
	 $slen= strlen($str);
	 for($l=$slen-1; $l>=0; $l--){
	 	//echo $str[$l]; 
	 	//OR
	 	echo substr($str,$l,1);
	 }

echo "-------------------------Sorting array() Without functon-------------------------------------<br/><pre>";

$ar = array(1,2,6,3,9,7,5,4);
print_r($ar);
$lenar = count($ar);
$temp = "";
for($i=0; $i<$lenar;$i++){
	for($j=0; $j<$lenar;$j++){
		if($ar[$i]< $ar[$j]){
			$temp = $ar[$i];
			$ar[$i] = $ar[$j] ;
			$ar[$j] = $temp;
		}
	}
}
print_r($ar);

echo "----------------Get 10 digite mobile number --------------<br/>";

$str = '09696330333';
echo substr($str, -10)."<br/>";


echo "<br/>----------------Get numeric digite from string--------------<br/>";

$ss  = "Welcome123to56India";
$len = strlen($ss);
$intv ="";
for ($i=0; $i <= $len ; $i++) { 
	if(is_numeric(substr($ss, $i,1))){
		$intv .= $ss[$i] ;
	}
}
echo $intv;


echo "<br/>---------------Check Polidrome Number --------------<br/>"; 

$num=121;

$pol= $num;

$rem=0;
$revrs=0;
while (floor($num)) {
	$rem = $num%10;
    $revrs = $revrs * 10 + $rem;
	$num = $num/10;
}
//echo $revrs;

if($pol == $revrs){
	echo $pol . " is Polidrome Number";
} else{
	echo $pol . " is not Polidrome Number";
}

	
echo "<br/>---------------Febonacci Series in php--------------<br/>"; 

 $num =10;
 $N1=0;
 $N2=1;
 $ser="";

 echo $N1.$N2;
 for ($i=0; $i <10; $i++) { 
 	$sum = $N1+$N2;
 	$N1 = $N2;
 	$N2 = $sum;
 	$ser .= $sum;
 	
 }
echo $ser;

echo "<h3>Fibonacci series using recursive function:</h3>"; 

function FabSer($num){
	if($num ==0){
		return 0;
	} else if($num ==1){
		return 1;
	} else{
		$serval = (FabSer($num-1) + FabSer($num-2));
		return $serval;
	}
}

$num =10;

for ($i=0; $i < $num ; $i++) { 
	echo FabSer($i);
}

echo "<h3>Sum of Each Digit </h3>"; 

$num = 14597;
$sum=0;

while (floor($num)) {
	$rem = $num%10;
	$sum = $sum + $rem;
	$num = $num/10;
}
echo $sum;

echo "<h3>Find the factorial of 5! </h3>"; 

$facnum = 5;
$fact = 1;
 for($f=$facnum; $f>=1; $f--){
 	$fact = $fact * $f;
 }
  echo $fact;

?>