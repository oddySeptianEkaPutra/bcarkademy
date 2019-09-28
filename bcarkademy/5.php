<?php 
    
    function countChar($words, $key) {
        $count = 0;
        $chars = str_split($words);

        $i = 0;
        foreach ($chars as $char) {
            if ($char[$i] == "$key") {
                $count++;
            }
        }

        if ($count > 0) {
            return $count;
        } else {
            $error = "Not found!"; 
            return $error;
        }
    }

    echo 'countChar("arkademy", "a") <br>';
    echo "Output: ".countChar("arkademy", "a");
    echo "<br><br>";

    echo 'countChar("javascript", "x") <br>';
    echo "Output: ".countChar("javascript", "x");

?>