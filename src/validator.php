

<?php

//@author: Bruno Beltre Guzman
//GitHub: https://github.com/BrunoBeltreGuzman

/*===================================================
                                          Data Primitive:
===================================================*/

//String
function isString($string)
{
       return is_string($string);
}

function isNotString($string)
{
       if (is_string($string)) {
              return false;
       } else {
              return true;
       }
}

//Chart
function isChart($chart)
{
       if (strlen($chart) == 1) {
              return true;
       } else {
              return false;
       }
}

function isNotChart($chart)
{
       if (strlen($chart) > 1 || strlen($chart) < 1) {
              return true;
       } else {
              return false;
       }
}

//Int
function isInt($number)
{
       return is_int($number);
}

function isNotInt($number)
{
       if (is_int($number)) {
              return false;
       } else {
              return true;
       }
}


//Integer
function isInteger($number)
{
       return is_integer($number);
}

function isNotInteger($number)
{
       if (is_integer($number)) {
              return false;
       } else {
              return true;
       }
}

//Long
function isLong($number)
{
       return is_long($number);
}

function isNotLong($number)
{
       if (is_long($number)) {
              return false;
       } else {
              return true;
       }
}


//Float
function isFloat($number)
{
       return is_float($number);
}

function isNotFloat($number)
{
       if (is_float($number)) {
              return false;
       } else {
              return true;
       }
}

//Real
function isReal($number)
{
       return is_real($number);
}

function isNotReal($number)
{
       if (is_real($number)) {
              return false;
       } else {
              return true;
       }
}

//Double
function isDouble($number)
{
       return is_double($number);
}

function isNotDouble($number)
{
       if (is_double($number)) {
              return false;
       } else {
              return true;
       }
}

//Booleans
function isBoolean($boolean)
{
       return is_bool($boolean);
}

function isNotBoolean($boolean)
{
       if (is_bool($boolean)) {
              return false;
       } else {
              return true;
       }
}

/*===================================================
                                          Data Type:
===================================================*/

//Null
function isNull($value)
{
       return is_null($value);
}

function isNotNull($value)
{
       if (is_null($value)) {
              return false;
       } else {
              return true;
       }
}


//Array
function isArray($array)
{
       return is_array($array);
}

function isNotArray($array)
{
       if (is_array($array)) {
              return false;
       } else {
              return true;
       }
}

//Object
function isObject($object)
{
       return is_object($object);
}

function isNotObject($object)
{
       if (is_object($object)) {
              return false;
       } else {
              return true;
       }
}

//Date
function isDate($month, $day, $year)
{
       return checkdate($month, $day, $year);
}

function isNotDate($month, $day, $year)
{
       if (checkdate($month, $day, $year)) {
              return false;
       } else {
              return true;
       }
}

//Binary
function isBinary($binary)
{
       return preg_match('~^[01]+$~', $binary);
}

function isNotBinary($binary)
{
       if (preg_match('~^[01]+$~', $binary)) {
              return false;
       } else {
              return true;
       }
}

/*===================================================
                                          Data Values:
===================================================*/

//Empty
function isEmpty($value)
{
       return empty($value);
}

function isNotEmpty($value)
{
       if (empty($value)) {
              return false;
       } else {
              return true;
       }
}

//Equals
function isEqual($value)
{
       return empty($value);
}

function isNotEqual($value)
{
       if (empty($value)) {
              return false;
       } else {
              return true;
       }
}


//Email
function isEmail($email)
{
       if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              return true;
       } else {
              return false;
       }
}

function isNotEmail($email)
{
       if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              return false;
       } else {
              return true;
       }
}

//IP
function isIP($ip)
{
       return filter_var($ip, FILTER_VALIDATE_IP);
}

function isNotIP($ip)
{
       if (filter_var($ip, FILTER_VALIDATE_IP)) {
              return false;
       } else {
              return true;
       }
}

//IPv4
function isIPv4($ip)
{
       return filter_var($ip, FILTER_FLAG_IPV4);
}

function isNotIPv4($ip)
{
       if (filter_var($ip, FILTER_FLAG_IPV4)) {
              return false;
       } else {
              return true;
       }
}

//IPv6
function isIPv6($ip)
{
       return filter_var($ip, FILTER_FLAG_IPV6);
}

function isNotIPv6($ip)
{
       if (filter_var($ip, FILTER_FLAG_IPV6)) {
              return false;
       } else {
              return true;
       }
}

//URL
function isURL($url)
{
       return filter_var($url, FILTER_VALIDATE_URL);
}

function isNotURL($url)
{
       if (filter_var($url, FILTER_VALIDATE_URL)) {
              return false;
       } else {
              return true;
       }
}


/*===================================================
                                          Others:
===================================================*/

//Equals
function isEqual2($value1, $value2)
{
       return false;
}

function isNotEqual2($value1, $value2)
{
       return false;
}

//File
function isFile($file)
{
       return false;
}

function isNotFile($file)
{
       return false;
}

//Image Base64
function isImageBase64($base64)
{
       $img = imagecreatefromstring(base64_decode($base64));
       if (!$img) {
              return false;
       }
       imagepng($img, 'tmp.png');
       $info = getimagesize('tmp.png');
       unlink('tmp.png');
       if (
              $info[0] > 0 && $info[1] > 0 && $info['mime']
       ) {
              return true;
       }
       return false;
}


function isNotImageBase64($base64)
{
       $img = imagecreatefromstring(base64_decode($base64));
       if (!$img) {
              return true;
       }
       imagepng($img, 'tmp.png');
       $info = getimagesize('tmp.png');
       unlink('tmp.png');
       if (
              $info[0] > 0 && $info[1] > 0 && $info['mime']
       ) {
              return false;
       }
       return false;
}
