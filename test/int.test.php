<?php

require_once "../src/validator.php";
require_once "test.php";

$value = 50;
$expected = true;
$result = isInt($value);
test($result, $expected);

$value = 50.5;
$expected = true;
$result = isInt($value);
test($result, $expected);

$value = 50.5;
$expected = true;
$result = isNotInt($value);
test($result, $expected);


$value = 300;
$expected = true;
$result = isNotInt($value);
test($result, $expected);
