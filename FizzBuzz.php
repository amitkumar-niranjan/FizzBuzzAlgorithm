<?php


echo "Solving Algorith of FizzBuzz <br><br>";
        // if not multiple of 3 and 5 print $i
        // if multiple of 3 and not multiple of 5 print Fizz
        // if multiple of 5 and not multiple of 3 print Buzz
        // if value multiple of 3 and 5 print FizzBuzz
/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    // Write your code here
    
    for($i=1;$i<=$n;$i++)
    {
        //echo "hi";
    if($n>0)
    {
        // echo $i." ->In Multiplication table of 3 and 5->";

        if(($i%3 != 0.00) && ($i%5 != 0.00))
        {
            //echo  "(".number_format(($i%3),2).")(".number_format(($i%5),2).")";
            echo $i."<br>";
        }elseif(($i%3 == 0.00) && ($i%5 != 0.00)){
            echo "Fizz coming in table of 3"."<br>";
        }elseif(($i%3 != 0.00) && ($i%5 == 0.00)){
            echo "Buzz (coming in table of 5)"."<br>";
        }elseif(($i%3 == 0.00) && ($i%5 == 0.00)){
            echo "FizzBuzz coming in table of 3 and 5"."<br>" ;
        }else{
            echo "hi";
        }
        
    }
    }
}

//$n = intval(trim(fgets(STDIN)));
$n = 100;
 fizzBuzz($n);

?>
