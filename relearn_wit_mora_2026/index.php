<?php
echo "Hello world 1";
echo "<br>";












// ==== Summary Comment ==== //
// you can vesit 'w3schools.com' to know more.

// 1--- print php code --- //
// echo "Text";
// print("Text");
// echo "Current PHP version: " . phpversion();

// 2--- variables --- //
// $name = "value"; 

// 3--- comment types --- //
// 1- (// ) 2- (# ) 3- (/* */)

// 4--- Data types --- //
// $name = "Text"; \\string var
// $name = 10; \\ int var
// $name = 15.50 ; \\ float var
// $name = true ; \\ boolean var
// var_dump($name);

// 5--- Constants variable--- //
// define("varName", "varValue", 'case_insensitive default is'(false));

// 6--- Operators --- //
// + , - , * , / 
// += , -= , *= , /= . (for making calculations on the value of the same var.)
// == , !== . (equal or not equal.)

// 7--- if, else, ifelse --- //
// if($name == "value"){do some action} else{do alternative action}
// if($name == "value"){do some action} elseif($name == "other value"){do an other action} ... else{do final action}

// 8--- while loop --- //
// $name="value"; while($name <= "value"){ echo "..."; $name++; }

// 9--- do while loop --- //
// $name="value"; do{do some action} while($name <= "value");

// 10--- for loop --- //
// for($name = "value"; $name <= "target"; $name++){do some action}

// 11--- foreach loop --- //
/*
    $i= array("القاهرة", "الجيزة", "الاسكندرية", "المنصورة");

    foreach($i as $x){
        echo "<option>".$x."</option>";
    }
*/

// 12--- indexed array --- //
/* 
$i= array("السباحة", "قرة القدم", "القراءة", "الكتابة");

echo $i["0"];

// ******in an other way******** //
$i["0"]= "القاهرة";
$i["1"]= "الجيزة";
$i["2"]= "الاسكندرية";
$i["3"]= "اسوان";

echo $i["2"];
*/

// 13--- Associative array --- //
//

?>

<?= '<br> print this string' ?>