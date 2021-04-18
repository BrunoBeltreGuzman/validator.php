<?php

require_once "../src/validator.php";
require_once "test.php";

$value = "";
$expected = true;
$result = isEqual($value);
test($result, $expected);

$value = "Hello Word";
$expected = true;
$result = isEqual($value);
test($result, $expected);


$value = "Hello Word";
$expected = true;
$result = isNotEqual($value);
test($result, $expected);

$value = 50;
$expected = true;
$result = isNotEqual($value);
test($result, $expected);
