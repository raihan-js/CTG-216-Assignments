<?php


// /**Assignment 
//  * Task 1
//  */
echo "<h3>Task 1</h3><br>";

//with increment
for ($c = 10000; $c <= 10050; $c++) {
      echo "$c <br>";
}


//with decrement
for ($c = 10000; $c >= 9950; $c--) {
      echo "$c <br>";
}


/**
 * Task 2 - (500 times, divisible by 3 and 4)
 */
echo "<h3>Task 2 - (500 times, divisible by 3 and 4)</h3><br>";

for ($i = 1; $i <= 500; $i++) {
      if ($i % 3 == 0 && $i % 4 == 0) {
            echo "$i <br>";
      }
}


/**
 * Task 3 - (For loop, 3 increment, if divisible by 11, then break)
 */
echo "<h3>Task 3 - (For loop, 3 increment, if divisible by 11, then break)</h3><br>";

for ($x = 1; $x <= 100; $x = $x + 3) {
      echo "$x <br>";
      if ($x % 11 == 0) {
            echo "$x is divisible by 11";
            break;
      }
}


/**
 * Task 4 -(Multiplication table of number 2,3,4 and 5)
 */
echo "<h3>Task 4 -(Multiplication table of number 2,3,4 and 5)</h3><br>";


for ($a = 2; $a <= 5; $a++) {

      for ($b = 1; $b <= 10; $b++) {
            $result = $a * $b;
            echo "$b x $a = $result<br>";
      }
}

/**
 * Task 5 - (For loop, increment 6, if divisible by 5 then break)
 */
echo "<h3>Task 5 - (For loop, increment 6, if divisible by 5 then break)</h3><br>";


for ($y = 1; $y <= 100; $y = $y + 6) {
      echo "$y <br>";
      if ($y % 5 == 0) {
            echo "$y is divisible by 5 <br>";
            break;
      }
}
