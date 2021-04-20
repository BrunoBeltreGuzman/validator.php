# validator.php

**Functional validation library**

# Download file

https://www.validator.com/

# Table of Contents

- [Validator.php](#validator.php)

     - [Table of Contents](#table-of-contents)
     - [Download file](#Downloadfile)
     - [Usage](#usage)
     - [Test](#Test)
     - [License](#License)

# Usage

| Comando                  | Descripción                                       |
| ------------------------ | ------------------------------------------------- |
| **isString($string)**    | Validate if the value is a `text string`.         |
| **isNotString($string)** | Validate if the value is **NOT** a `text string`. |

| **isChart($char)** | Validate if the value is a `character`. |
| **isNotChart($char)** | Validate if the value is **NOT** a `character`. |

| **isInt($int)** | Validate if the value is of type `int` |
| **isNotInt($int)** | Validate if the value is **NOT** of type `int` |

| **isInteger($Integer)** | Validate if the value is of type `integer` |
| **isNotInteger($integer)** | Validate if the value is **NOT** of type `integer` |

| **isLong($long)** | Validate if the value is of type `long` |
| **isNotLong($long)** | Validate if the value is **NOT** of type `long` |

| **isFloat($value)** | Validate if the value is of type `float` |
| **isNotFloat($value)** | Validate if the value is **NOT** of type `float` |

| **isReal($value)** | Validate if the value is of type `real` |
| **isNotReal($value)** | Validate if the value is **NOT** of type `real` |

| **isDouble($value)** | Validate if the value is of type `double` |
| **isNotDouble($value)** | Validate if the value is **NOT** of type `double` |

| **isBoolean($value)** | Validate if the value is of type `boolean` |
| **isNotBoolean($value)** | Validate if the value is **NOT** of type `boolean` |

| **isArray($value)** | Validate if the value is `array` |
| **isNotArray($value)** | Validate if the value is **NOT** `array` |

| **isObject($value)** | Validate if a a value has an instance with an `object`. |
| **isNotObject($value)** | Validate if a a value has **NOT** an instance with an `object`. |

| **isDate($value)** | Validate if the value is `date` |
| **isNotDate($value)** | Validate if the value is **NOT** `date` |

| **isBinary($value)** | Validate if the value is `Binary` |
| **isNotBinary($value)** | Validate if the value is **NOT** `Binary` |

| **isEmpty($value)** | Validate if the value is `empty` |
| **isNotEmpty($value)** | Validate if the value is **NOT** `empty` |

| **isEqual($value)** | Validate if the value is `Equals` |
| **isNotEqual($value)** | Validate if the value is **NOT** `Equals` |

| **isEmail($value)** | Validate if the value is a `Email` |
| **isNotEqual($value)** | Validate if the value is **NOT** a `Email` |

| **isIP($value)** | Validate if the value is a `IP` adress |
| **isNotIP($value)** | Validate if the value is **NOT** a `IP` adress |

| **isIPv4($value)** | Validate if the value is a `IPv4` adress |
| **isNotIPv4($value)** | Validate if the value is **NOT** a `IPv4` adress |

| **isIPv6($value)** | Validate if the value is a `IPv6` adress |
| **isNotIPv6($value)** | Validate if the value is **NOT** a `IPv6` adress |

| **isURL($value)** | Validate if the value is a `url` adress |
| **isNotURL($value)** | Validate if the value is **NOT** a `url` adress |

| **isImageBase64($value)** | Validate if the value is a file Image Base64 |
| **isImageBase64($value)** | Validate if the value is **NOT** a `url` Image Base64 |

# Test

Example `isObject($value)`

```php
$value = new App();
$expected = true;
$result = isObject($value);
test($result, $expected);
```

Result:

<br />
<span style="font-size:50px;">&#128526;</span>
<h2>Result: 1</h2>
<h3>Expected: 1</h3>
<p>Test Passed!!</p>
<br />

# License

PUBLIC LICENSE
Version 2.1, February 1999
`Copyright (C) 2021`, Validator.php - Functional validation library,
Bruno Beltre,
Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

This is the first released version of the Validator.php. It also counts
as the successor of the GNU Library Public License, version 1, hence
the version number 1.0
