<?php

require_once "../src/validator.php";
require_once "test.php";

$value = "";
$expected = true;
$result = isEmpty($value);
test($result, $expected);

$value = "Hello Word";
$expected = true;
$result = isEmpty($value);
test($result, $expected);


$value = "Hello Word";
$expected = true;
$result = isNotEmpty($value);
test($result, $expected);

$value = 50;
$expected = true;
$result = isEmpty($value);
test($result, $expected);
