<?php

use MarcW\CCCN\CCCN;

class CCCNTest extends \PHPUnit_Framework_TestCase
{
    public function testCCCN()
    {
        $this->assertEquals('FR', CCCN::getCountryCode('france'));
        $this->assertEquals('FR', CCCN::getCountryCode('France'));
        $this->assertEquals('FR', CCCN::getCountryCode('Frankryk'));
        $this->assertEquals('FR', CCCN::getCountryCode('Fàlâŋnsì'));

        $this->assertEquals(null, CCCN::getCountryCode('Does not exist'));
    }
}
