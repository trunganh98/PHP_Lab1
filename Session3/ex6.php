<?php
    error_reporting(0);
    function e() {
        echo "This is e() .'</br>' ";
    };

    function f() {
        echo "This is f() .'</br>' ";
        return e;
    };

    function g() {
        echo "This is g() .'</br>' ";
        return f;
    };

    g();
    echo "********** \n";
    g()();
    echo "********** \n";
    g()()();

?>
