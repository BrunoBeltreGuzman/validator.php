<?php

require_once "../src/validator.php";
require_once "test.php";

$value = true;
$expected = true;
$result = isBoolean($value);
test($result, $expected);


$value = "true";
$expected = true;
$result = isBoolean($value);
test($result, $expected);



$value = 50;
$expected = true;
$result = isNotBoolean($value);
test($result, $expected);

$value = false;
$expected = true;
$result = isNotBoolean($value);
test($result, $expected);
