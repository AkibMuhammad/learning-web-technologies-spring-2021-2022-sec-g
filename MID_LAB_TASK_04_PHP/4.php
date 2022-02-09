<?php
    
    $number1=45;
    $number2=35;
    $number3=57;

    if($number3 > $number1 && $number3 > $number2)
    {
    	echo "Number3 is the largest";
    }
    
    else if ($number2 > $number1 && $number2 > $number3)
    {
    	echo "Number2 is the largest";
    }

    else
    {
    	echo "Number1 is the largest";
    }
?>