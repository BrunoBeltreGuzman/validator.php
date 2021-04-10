<?php

class Validator
{
       public function __construct()
       {
       }

       /*
              Empty
              ____________________________________________________________
       */
       public static function isEmpty($value)
       {
              return false;
       }

       public static function isNotEmpty($value)
       {
              return false;
       }

       /*
              Null
              ____________________________________________________________
       */
       public static function isNull($value)
       {
              return false;
       }

       public static function isNotNull($value)
       {
              return false;
       }


       /*
              Equals
              ____________________________________________________________
       */
       public static function isEqual($value1, $value2)
       {
              return false;
       }

       public static function isNotEqual($value1, $value2)
       {
              return false;
       }

       /*
              String
              ____________________________________________________________
       */
       public static function isString($string)
       {
              return false;
       }

       public static function isNotString($string)
       {
              return false;
       }

       /*
              Chart
              ____________________________________________________________
       */
       public static function isChart($chart)
       {
              return false;
       }

       public static function isNotChart($chart)
       {
              return false;
       }

       /*
              Numbers
              ____________________________________________________________
       */
       public static function isInteger($number)
       {
              return false;
       }

       public static function isNotInteger($number)
       {
              return false;
       }

       public static function isFloat($number)
       {
              return false;
       }

       public static function isNotFloat($number)
       {
              return false;
       }

       /*
              Booleans
              ____________________________________________________________
       */
       public static function isBoolean($boolean)
       {
              return false;
       }

       public static function isNotBoolean($boolean)
       {
              return false;
       }

       /*
              Array
              ____________________________________________________________
       */
       public static function isArray($array)
       {
              return false;
       }

       public static function isNotArray($array)
       {
              return false;
       }

       /*
              Object
              ____________________________________________________________
       */
       public static function isObject($object)
       {
              return false;
       }

       public static function isNotObject($object)
       {
              return false;
       }
}
