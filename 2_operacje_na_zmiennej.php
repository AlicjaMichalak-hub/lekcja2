<?php
// weersja PHP
echo PHP_VERSION,'<br>';
// echo phpinfo();


$pow = 2 ** 8;

echo $pow,'<br>'; //256


echo 'a','b','c'; //abc
echo '<br>';
echo 'a'.'b'.'c'; //a+b+c => abc

// operatory bitowe
// and &, or |, xor ^, not ~, <<, >>
$x = 0b1010;
echo "<hr>$x<br>";

$x = $x << 2; //101000(2) => 8+32=40
echo "$x<br>";

$x = $x >> 1; //101000(2) => 4+16=20
echo "$x<br>";


//porównanie <=>
$x = 10;
$y = 20;
echo $x <=> $y;
$result = $x <=> $y;
echo $result;
 ?>
$x=1;
$y=1.0;

if ($x==$y)


  if ($x==$y)
{
  echo 'Zmienne są róqne<br>';
  
}else {
  
}

echo gettype($x); //integer
echo gettype($y); //double

##################

/*

preinkrementacja ++$x
predekrementacja --$x
postinkrementacja $x++
postkrementacja $--
*/

$x=1;
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=$x++;
echo $x; //3
echo $y; //2
$y=++$x*2-1;
echo $x; //4
echo $y; //7
