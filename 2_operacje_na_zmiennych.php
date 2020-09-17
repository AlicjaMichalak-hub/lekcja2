<?php 
//wersja php
echo PHP_VERSION,'<br>';
//echo phpinfo()
$pow=2**8;
echo $pow,'<br>'; //potega

echo 'a','b','c';//abc szybciej
echo '<br>';
echo 'a'.'b'.'c';//a+b+c = abc

//operatory bitowe
// and &, or /, xor ^, not ~, << >>,
$x = 0b1010;
echo "<hr>$x<br>";
$x = $x << 2; //101000(2) - 8+32=40
echo "$x<br>";

$x = $x >> 1; //10100(2) - 4+16=20
echo "$x<br>";

//porownanie <=>
$x = 10;
$y = 20;
echo $x <=> $y;
$result = $x <=> $y;
echo $result;

$x=1;
$y=1;

    if($x==$y){
    echo 'Zmienne sa rowne <br>';
    }    else{
    echo 'Zmienne sa rozne <br>';
    }

    echo gettype($x); //intiger
    echo gettype($y); //double/float (uzywane naprzemiennie)
    /*
    preinkrementacja ++$x
    predekrementacja --$x
    postinkrementacja $x++
    postdekrementacja $x--
    */
    $x=1;
    $x=$x++;
    echo $x; //1
    $x=++$x;
    echo $x; //2
    $y=$x++;
    echo $x; //3
    echo $y; //2
    $y=++$x * 2 -1;
    echo $x; //4
    echo $y; //7
echo "<br>";
    $x=2;
    echo $x++; // 2
    echo ++$x; // 4
    echo $x; // 4
    $y=$x++; // 4
    echo $y; // 5
    echo ++$y; //7


    //operatory rzutowania
    //bool, int, float, string, array, object, unset
$test='123abc';
$test1=0;
$test2=20;

$x=(int)$test;
echo "<hr>$x<br>";
echo 'Typ danych $x: ', gettype($x);
echo "<br>";
echo $x=(bool)$test1; //false
echo 'Typ danych $x: ',gettype($x);
?>
