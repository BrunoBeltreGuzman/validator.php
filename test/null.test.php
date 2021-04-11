<?php

require_once "../src/Validator.php";
require_once "Test.php";

$value = null;
$expected = true;
$result = Validator::isNull($value);
test($result, $expected);

$value = null;
$expected = false;
$result = Validator::isNotNull($value);
test($result, $expected);
