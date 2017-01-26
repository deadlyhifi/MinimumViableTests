<?php

namespace MVT\Test;

use Mockery;

abstract class TestAbstract extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }
}
