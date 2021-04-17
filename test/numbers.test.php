<?php

require_once "../src/validator.php";
require_once "test.php";

$value = 5;
$expected = true;
$result = isInteger($value);
test($result, $expected);


$value = "aassda";
$expected = true;
$result = isNotInteger($value);
test($result, $expected);
