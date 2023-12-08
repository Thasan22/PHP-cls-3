<?php

//elseif condition with function

function greaterNumber($a, $b, $c){

if($a>$b && $a>$c){
    echo "$a is greater than $b and $c <br><br>";
}elseif($b>$a && $b>$c){
    echo "$b is greater than $a and $c <br><br>";
}else{
    echo "$c is greater than $a and $b <br><br>";
}
}
greaterNumber(30,20,50);



//nested condition with function

function login($u_name,$pass){
if($u_name == "thasan"){
    if($pass == "ab123"){
        echo "<h1>Login success!</h1>";
    }else{
        echo "<h1>Password is incorrect!!</h1>";
    }
}else{
    echo "<h1>User name is incorrect!!</h1>";
} 
}
login("thasan","ab123");


//ARRAY

$info = [
    "name"=> "Thasan",
    "age"=> 22,
    "boardExamYear"=> [
        "ssc"=> 2018,
        "hsc"=> 2020,
        "b. sc."=> 2025
    ],
];


echo "<pre>";

print_r($info);
print_r("My name is ".$info["name"] . ". " ."I am ".$info["age"]." years old. "."My board exam year, SSC- ".$info["boardExamYear"]["ssc"].", HSC- ".$info["boardExamYear"]["hsc"].", B. Sc.- ".$info["boardExamYear"]["b. sc."]);

echo "</pre>";





?>