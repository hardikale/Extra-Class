<?php 
$num1 = 10;
$num2 = 20;
$sum = $num1 + $num2;

echo "The sum is " . $sum;
echo "<br>";
echo "The sum of $num1 and $num2 is $sum";
echo "<br>";
echo 'The sum of $num1 and $num2 is $sum';

$fruits = ["apple", "banana", "cherry"];
echo "<br>";
foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>