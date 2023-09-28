<?php

$variable = 'aaaaaa';

echo $variable . "<br />";

$variable = 'bbbbbbb';

echo $variable . "<br />";

function a() {
    $variable = 'cccccccccc'; //to nie zmieni wartości oryginalnej zmiennej
}

a();

echo $variable . "<br />";

function b() {
    global $variable;
    $variable = 'ddddddd';
}

b();

echo $variable . "<br />";

function c() {
    global $new;
    $new = 'new';
}

c();

echo $new . "<br />";

include ("./2.php");

global $otherVariable;

echo $otherVariable . "<br />";

d();

$a = 5;

echo $a . "<br />";

function e($a) {
    $a = 10;
}

e($a);

echo $a . "<br />";


function f(&$a) {
    $a = 10;
}

f($a);

echo $a . "<br />";