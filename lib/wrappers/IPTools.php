<?php
namespace mindpowered\iptools;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \iptools\IPTools as IPTools_Library;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * IP Address Conversion and CIDR calculator
 */
class IPTools
{
	/**
	 * IPTools
	 */
	function __construct() {
		$bus = MagLev::getInstance('default');
		$lib = new IPTools_Library($bus);
	}

	/**
	 * Convert a subnet mask to CIDR notation
	 * @param string $subnet_mask A subnet mask eg. 255.255.0.0
	 * @return object object containing information about subnet including CIDR prefix
	 */
	public function SubnetMaskToCIDR($subnet_mask)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$subnet_mask];
		$ret = null;
		$phpbus->call('IPTools.SubnetMaskToCIDR', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Given an IP address or IP address with CIDR notation, provides information about an IP address range
	 * @param string $ip_addr An IP address with or without CIDR notation
	 * @return array a list of objects containing information about the IP address range
	 */
	public function CalcCIDR($ip_addr)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip_addr];
		$ret = null;
		$phpbus->call('IPTools.CalcCIDR', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert an IP address to a Decimal representation
	 * @param string $ip_addr An IP address
	 * @return string Decimal representation of the provided IP address
	 */
	public function IPToDecimal($ip_addr)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip_addr];
		$ret = null;
		$phpbus->call('IPTools.IPToDecimal', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from a Decimal representationan of an IP address
	 * @param string $ip4_number Decimal representation of an IP address
	 * @return string The IP address
	 */
	public function IP4FromDecimal($ip4_number)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip4_number];
		$ret = null;
		$phpbus->call('IPTools.IP4FromDecimal', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert from a Decimal representationan of an IP address
	 * @param string $ip6_number Decimal representation of an IP address
	 * @return string The IP address
	 */
	public function IP6FromDecimal($ip6_number)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip6_number];
		$ret = null;
		$phpbus->call('IPTools.IP6FromDecimal', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Convert an IPv4 address to an IPv6 address
	 * @param string $ip_addr An IPv4 address
	 * @return object An object containing IPv6 representations of the provided IPv4 address
	 */
	public function IPv4ToIPv6($ip_addr)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip_addr];
		$ret = null;
		$phpbus->call('IPTools.IPv4ToIPv6', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Expand the zeros in an IPv6 address
	 * @param string $ip6_addr An IPv6 address
	 * @return object The same IPv6 address with zeros expanded
	 */
	public function ExpandIPv6($ip6_addr)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip6_addr];
		$ret = null;
		$phpbus->call('IPTools.ExpandIPv6', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Compress the zeros in an IPv6 address
	 * @param string $ip6_addr An IPv6 address
	 * @return object The same IPv6 address with zeros compressed
	 */
	public function CompressIPv6($ip6_addr)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ip6_addr];
		$ret = null;
		$phpbus->call('IPTools.CompressIPv6', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

}
