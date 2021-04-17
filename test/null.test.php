<?php

require_once "../src/validator.php";
require_once "test.php";

$value = null;
$expected = true;
$result = isNull($value);
test($result, $expected);

$value = null;
$expected = false;
$result = isNotNull($value);
test($result, $expected);
