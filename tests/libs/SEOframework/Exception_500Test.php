<?php
ini_set("include_path", "../libs/SEOframework".PATH_SEPARATOR."../../../libs/SEOframework".PATH_SEPARATOR.ini_get("include_path"));
require_once 'PHPUnit/Framework.php';

require_once '/var/www/seoframework/libs/SEOframework/Exceptions.php';

/**
 * Test class for Exception_500.
 * Generated by PHPUnit on 2009-11-01 at 12:17:00.
 */
class Exception_500Test extends PHPUnit_Framework_TestCase
{
    /**
     * @var Exception_500
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Exception_500;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
}
?>
