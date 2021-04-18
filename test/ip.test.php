<?php

require_once "../src/validator.php";
require_once "test.php";

$value = "192.168.1.0";
$expected = true;
$result = isIP($value);
test($result, $expected);

$value = "ip";
$expected = true;
$result = isIP($value);
test($result, $expected);

$value = "ip";
$expected = true;
$result = isIP($value);
test($result, $expected);
