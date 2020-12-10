
iptools
=======

Contents
========

* [Requirements](#requirements)
* [Installation](#installation)
* [Licensing](#licensing)
* [Support](#support)

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


# Licensing
Additional [licensing options][licensing] are available.

# Support
For bug fixes, please raise an issue in the [Issue Tracker][bugs].

For feature requests, and general support, please [Contact us][contact].



[bugs]: https://github.com/mindpowered/ip-tools-php/issues
[contact]: https://mindpowered.dev/support.html?ref=ip-tools-php/
[licensing]: https://mindpowered.dev/?ref=ip-tools-php
