<?php

class EasyTest extends PHPUnit_Framework_TestCase
{

	public function testOne()
	{
		$this->assertTrue("red", "Failed to assert true");
	}
}
