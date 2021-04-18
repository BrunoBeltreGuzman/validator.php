<?php

require_once "../src/validator.php";
require_once "test.php";

$value = "Bobo";
$expected = true;
$result = isString($value);
test($result, $expected);

$value = 50;
$expected = true;
$result = isString($value);
test($result, $expected);

$value = 50;
$expected = true;
$result = isNotString($value);
test($result, $expected);

$value = "50";
$expected = true;
$result = isNotString($value);
test($result, $expected);
