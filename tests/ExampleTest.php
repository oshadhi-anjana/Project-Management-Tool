<?php
use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
    public function testBootstrapLoaded()
    {
        // Test that the bootstrap was loaded successfully
        $this->assertTrue(defined('BASEPATH'));
        $this->assertTrue(defined('APPPATH'));
    }

    public function testGetInstanceExists()
    {
        // Test that get_instance function is available
        $this->assertTrue(function_exists('get_instance'));
    }

    public function testCanGetCIInstance()
    {
        // Test that we can get a CI instance
        $CI = get_instance();
        $this->assertIsObject($CI);
    }
}