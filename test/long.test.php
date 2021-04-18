<?php

require_once "../src/validator.php";
require_once "test.php";

$value = 50;
$expected = true;
$result = isLong($value);
test($result, $expected);

$value = 50.5;
$expected = true;
$result = isLong($value);
test($result, $expected);

$value = 50.5;
$expected = true;
$result = isNotLong($value);
test($result, $expected);


$value = 300;
$expected = true;
$result = isNotLong($value);
test($result, $expected);
