
iptools
=======

Contents
========

* [Source Code and Documentation](#source-code-and-documentation)
* [Licensing](#licensing)
* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)

# Source Code and Documentation
- Source Code: [https://github.com/mindpowered/ip-tools-php](https://github.com/mindpowered/ip-tools-php)
- Documentation: [https://mindpowered.github.io/ip-tools-php](https://mindpowered.github.io/ip-tools-php)

# Licensing
This package is dual-licensed under the MIT and CPAL-1.0 licenses.

To obtain a version licensed under the MIT License, follow the instructions at [get a license][purchase].

# Requirements
- php >= 7
- php `mbstring` extension
- php `xml` extension


Third-party dependencies may have additional requirements.

# Installation

You can get iptools using Composer. Composer manages dependencies for packages from Packagist and you can get it here: <https://getcomposer.org/> .

Create a composer.json file in the top-most directory of your project and add `mindpowered/iptools` to the requirements:
```
{
        "require": {
                "mindpowered/iptools" : "*"
        }
}
```
Now you can run the command to update composer: `composer update`. In order for composer to install the package dependencies you will need an archive manager such as zip installed. Composer requires use of the commands `zip` and `unzip`.


# Usage
```php
require __DIR__ . '/vendor/autoload.php';

use \mindpowered\iptools\IPTools;

$ipt = new IPTools();
$decimal = $ipt->IPToDecimal("192.168.1.1");

```


# Support
We are here to support using this package. If it doesn't do what you're looking for, isn't working, or you just need help, please [Contact us][contact].

There is also a public [Issue Tracker][bugs] available for this package.



[bugs]: https://github.com/mindpowered/ip-tools-php/issues
[contact]: https://mindpowered.dev/support.html?ref=ip-tools-php/
[docs]: https://mindpowered.github.io/ip-tools-php/
[licensing]: https://mindpowered.dev/?ref=ip-tools-php
[purchase]: https://mindpowered.dev/purchase/ip-tools-php
