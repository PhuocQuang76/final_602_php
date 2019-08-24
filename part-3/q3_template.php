<?php
    $chars = array("a","b","i","c","e","f",0,"z",2);
    $vowels = "";
    $consonants = "";
    $number = "";

    foreach ($chars as $char){
        if(is_int($char) ){
            echo $number = $number.$char;

        }else if($char == "a" || $char == "i" || $char == "e") {
            echo $vowels = $vowels.$char;
        }
        else{
            echo $consonants = $consonants.$char;
        }
    }

    echo "<br>";
    echo "Vowels: ".$vowels."<br>";
    echo "Consonants: ".$consonants."<br/>";
    echo "Numbers: ".$number;
