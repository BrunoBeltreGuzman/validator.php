<?php

require_once "../src/validator.php";
require_once "test.php";

$value = "B";
$expected = true;
$result = isChart($value);
test($result, $expected);


$value = "Bobo";
$expected = true;
$result = isChart($value);
test($result, $expected);


$value = "Bobo";
$expected = true;
$result = isNotChart($value);
test($result, $expected);


$value = "A";
$expected = true;
$result = isNotChart($value);
test($result, $expected);
