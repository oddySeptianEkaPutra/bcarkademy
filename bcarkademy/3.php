<?php   
    
    function sortNumber($words) {
        $chars = str_split($words);
        $i = 0;
        $numbers = [];
        $letters = [];

        foreach ($chars as $char) {
            if (is_numeric($char[$i])) {
                $numbers[] = $char[$i];
            } else {
                $letters[] = $char[$i];
            }
        }

        if (count($numbers) != 0) {
            $j = 0;
            $numbs = $numbers;
            sort($numbs);
            foreach ($numbs as $numb) {
                echo $numb[$j];
            }
        } else {
            $error = "No number found in parameter!";
            return $error;
        }
    }

    echo 'sortNumber("48172a94") <br> Output: '; 
    echo sortNumber("48172a94");
    echo '<br><br>';

    echo 'sortNumber("abc") <br> Output: '; 
    echo sortNumber("abc");
    echo '<br><br>';

    echo 'sortNumber("94a") <br> Output: '; 
    echo sortNumber("94a");

?>