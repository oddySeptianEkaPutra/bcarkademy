<?php

    function is_username_valid($username) {
        if (!preg_match("/^[a-zA-z]{6}$/",$username)) {
            echo "false"; 
        } else {
            echo "true";
        }
    }

    function is_password_valid($password) {
        if (!preg_match("/^(?=.*[7])(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{5,10}$/",$password)) {
            echo "false"; 
        } else {
            echo "true";
        }
    }

    echo 'is_username_valid("coba12") <br> return: '; 
    echo is_username_valid("coba12");
    echo '<br><br>';

    echo 'is_username_valid("devina") <br> return: '; 
    echo is_username_valid("devina");
    echo '<br><br>';

    echo 'is_password_valid("p@ssW0rd9") <br> return: '; 
    echo is_password_valid("p@ssW0rd9");
    echo '<br><br>';

    echo 'is_password_valid("7Ark@demi") <br> return: '; 
    echo is_password_valid("7Ark@demi");

?>