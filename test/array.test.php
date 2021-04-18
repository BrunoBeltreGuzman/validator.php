<?php

require_once "../src/validator.php";
require_once "test.php";

$value = array('user' => "Jhon");
$expected = true;
$result = isArray($value);
test($result, $expected);


$value = "array";
$expected = true;
$result = isArray($value);
test($result, $expected);


$value = "array";
$expected = true;
$result = isNotArray($value);
test($result, $expected);


$value = array('user' => "Jhon");
$expected = true;
$result = isNotArray($value);
test($result, $expected);
