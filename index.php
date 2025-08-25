<?php

$a=0;
while ($a <= 10 ){

  echo $a;
    $a++;


}

// do loop 


$i= 8;
do{
    echo $i ;
    $i++;
}
while ($i) ;

// for loop another way

for ( $i = 0; $i <= 10; $i += 1){
    echo $i;

}

//The switch statement 
$lifespan=30;

switch($skills){

    case "kick" :
        $lifespan -= 2;
    case 'Upercut':
        $lifespan -= 5;

//include 

include("a.php") ;

// include require reuire once 


}

//function 

function greetinG(){
    return " good morning pinaple" ;

}

echo greetinG();

function addtonum($a,$b){
    return $a + $b ;

}

addtonum(4,6);

function  Admin(){
    echo "limited to user only ";


}

function User(){

}
function Strudent(){

}
function Guese(){

}

$input = 0;

switch($input){
    case 1:
        User();
        break;
}

$x = 4;
$test = function (){

}





?>
