<?php
   //Celcius to Farenheit
   function farenheit($celcius){
           return (9/5 * $celcius) + 32;
        }
        echo "F = ";
        echo farenheit(30);
        echo "     ";
    //Farenheit to Celcius
    function celcius($farenheit){
        return (5/9)*($farenheit - 32);
    }
        echo "C = ";
        echo farenheit(100);
    ?>