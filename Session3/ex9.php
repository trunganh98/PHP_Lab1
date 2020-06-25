<?php
    class Greetings {
        private $word = "Hello";
    }
    $closure = function ($whom) {
        echo "$this -> word $whom " . "</br>";
    };
?>
