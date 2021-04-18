<?php

require_once "../src/validator.php";
require_once "test.php";

$value = 3.14;
$expected = true;
$result = isReal($value);
test($result, $expected);

$value = 3;
$expected = true;
$result = isReal($value);
test($result, $expected);

$value = 14;
$expected = true;
$result = isNotReal($value);
test($result, $expected);


$value = 14.3;
$expected = true;
$result = isNotReal($value);
test($result, $expected);
