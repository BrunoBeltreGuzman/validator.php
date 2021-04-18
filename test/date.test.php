<?php

require_once "../src/validator.php";
require_once "test.php";

$expected = true;
$result = isDate("4", "15", "2021");
test($result, $expected);


$expected = true;
$result = isDate("0", "15", "2021");
test($result, $expected);

$expected = true;
$result = isNotDate("6", "15", "-3");
test($result, $expected);

$expected = true;
$result = isNotDate("6", "15", "2021");
test($result, $expected);
