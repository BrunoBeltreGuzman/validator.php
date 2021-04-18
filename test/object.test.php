<?php

require_once "../src/validator.php";
require_once "test.php";

class App
{
       public function __construct()
       {
              echo "<h3>__construct()</h3>";
       }
}

$value = new App();
$expected = true;
$result = isObject($value);
test($result, $expected);

$value = "new App()";
$expected = true;
$result = isObject($value);
test($result, $expected);

$value = true;
$expected = true;
$result = isNotObject($value);
test($result, $expected);

$value = new App();
$expected = true;
$result = isNotObject($value);
test($result, $expected);
