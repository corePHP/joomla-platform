<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Registry
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM.'/joomla/registry/format.php';

/**
 * Test class for JRegistryFormat.
 * Generated by PHPUnit on 2009-10-27 at 15:08:23.
 */
class JRegistryFormatTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JRegistryFormat
	 */
	protected $object;

	/**
	 * Test the JRegistryFormat::getInstance method.
	 */
	public function testGetInstance()
	{
		// Test INI format.
		$object = JRegistryFormat::getInstance('INI');
		$this->assertThat(
			$object instanceof JRegistryFormatIni,
			$this->isTrue()
		);

		// Test JSON format.
		$object = JRegistryFormat::getInstance('JSON');
		$this->assertThat(
			$object instanceof JRegistryFormatJson,
			$this->isTrue()
		);

		// Test PHP format.
		$object = JRegistryFormat::getInstance('PHP');
		$this->assertThat(
			$object instanceof JRegistryFormatPHP,
			$this->isTrue()
		);

		// Test XML format.
		$object = JRegistryFormat::getInstance('XML');
		$this->assertThat(
			$object instanceof JRegistryFormatXml,
			$this->isTrue()
		);
	}
}
