
iptools
=======
Tools for working with IP4/IP6 IP Addresses including IPv4, IPv6, CIDR, and Subnet Masks

![Build Status](https://mindpowered.dev/assets/images/github-badges/build-passing.svg)

Contents
========

* [Source Code and Documentation](#source-code-and-documentation)
* [About](#about)
* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)
* [Licensing](#licensing)

# Source Code and Documentation
- Source Code: [https://github.com/mindpowered/ip-tools-php](https://github.com/mindpowered/ip-tools-php)
- Documentation: [https://mindpowered.github.io/ip-tools-php](https://mindpowered.github.io/ip-tools-php)

# About
IPv4 uses a 32-bit address for its Internet addresses. All IPv4 addresses are now assigned. IPv6 utilizes 128-bit Internet addresses so there are 1028 times more addresses. Mappings exist for converting from an IPv4 address to an IPv6 addresses. This allows interoperability.

An IP address consists of octets delimited by dots (".") for IPv4 or colons (":") for IPv6. We can compress IPv6 addresses by removing extra zeros to make the address shorter. Computers store IP addresses as their corresponding integer values. The number represented by this integer is its decimal representation.

Subnetting is the process of dividing a network into smaller network sections. A part of the IP address is *masked* off to define a network. The remaining part of the address identifies a device on the network. CIDR is an alternative way of representing a subnet mask and IP address range.

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

# Licensing
This package is released under the MIT License.



[bugs]: https://github.com/mindpowered/ip-tools-php/issues
[contact]: https://mindpowered.dev/support/?ref=ip-tools-php/
[docs]: https://mindpowered.github.io/ip-tools-php/
[licensing]: https://mindpowered.dev/?ref=ip-tools-php
[purchase]: https://mindpowered.dev/purchase/
