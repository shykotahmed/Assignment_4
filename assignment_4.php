<?php

/*-------------------------------------------------------------------------------------
1.Write a PHP function to sort an array of strings by their length, in ascending order. 
(Hint: You can use the usort() function to define a custom sorting function.)
---------------------------------------------------------------------------------------*/

function sort_by_length($arr) {
    usort($arr, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
  }
  
  $words = array("apple", "orange", "banana", "kiwi");
  $sorted_words = sort_by_length($words);
  print_r($sorted_words);

  echo PHP_EOL;

  

//Array([0] => kiwi [1] => apple [2] => orange [3] => banana)






/*------------------------------------------------------------------------------------
2.Write a PHP function to concatenate two strings, but with the second string starting 
from the end of the first string.
------------------------------------------------------------------------------------*/

function concatenate($str1, $str2) {
    return $str1 . ($str2);
  }
  $str1 = "Hello";
  $str2 = "World";
  $result = concatenate($str1, $str2);
  echo $result;

  echo PHP_EOL;
  //Output: HelloWorld






/*---------------------------------------------------------------------------------------
3.Write a PHP function to remove the first and last element from an array and return the 
remaining elements as a new array.
----------------------------------------------------------------------------------------*/

function removeFirstLastElement($arr){
    array_shift($arr);
    array_pop($arr);
    return $arr;
  } 
  $fruits = ['Mango','Banana','Apple','Orange','Blueberries'];
  $arrView = removeFirstLastElement($fruits);
  print_r($arrView);

echo PHP_EOL;

//Output: Array([0] => Banana[1] => Apple [2] => Orange)




/*------------------------------------------------------------------------------
4.Write a PHP function to check if a string contains only letters and whitespace.
--------------------------------------------------------------------------------*/

function validationCheck($string)
{
if (!preg_match("/^[a-zA-Z\s]+$/", $string)) {
return $errors[] = "Name must only contain letters!";
} else {
return "valid input";
}
  
}
$string = "hello bangladesh";

echo validationCheck ($string);
echo PHP_EOL;


//Output: valid input


/*-----------------------------------------------------------------------------
5.Write a PHP function to find the second largest number in an array of numbers.
-------------------------------------------------------------------------------*/

$array = [10,2,6,7,5,4,8,3,1];
rsort($array);
echo "The Second largest number is= ". $array[1];

//Output: The Second largest number is= 8





testt skfhhfksdf

















?>
