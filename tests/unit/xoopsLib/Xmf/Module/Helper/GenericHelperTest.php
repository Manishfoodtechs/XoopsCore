<?php
namespace Xmf\Module\Helper;

require_once(dirname(__FILE__).'/../../../../init_new.php');

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-05-22 at 19:56:37.
 */

/**
 * PHPUnit special settings :
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

class GenericHelperTestHelper extends GenericHelper
{
    public static function getHelper($dirname = 'system')
    {
        $instance = new static($dirname);
        return $instance;
    }
}

class GenericHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GenericHelper
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = GenericHelperTestHelper::getHelper();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::getModule
     * @todo   Implement testGetModule().
     */
    public function testGetModule()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::getConfig
     * @todo   Implement testGetConfig().
     */
    public function testGetConfig()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::getHandler
     * @todo   Implement testGetHandler().
     */
    public function testGetHandler()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::loadLanguage
     * @todo   Implement testLoadLanguage().
     */
    public function testLoadLanguage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::setDebug
     * @todo   Implement testSetDebug().
     */
    public function testSetDebug()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::addLog
     * @todo   Implement testAddLog().
     */
    public function testAddLog()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::isCurrentModule
     * @todo   Implement testIsCurrentModule().
     */
    public function testIsCurrentModule()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::isUserAdmin
     * @todo   Implement testIsUserAdmin().
     */
    public function testIsUserAdmin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::url
     * @todo   Implement testUrl().
     */
    public function testUrl()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::path
     * @todo   Implement testPath().
     */
    public function testPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Module\Helper\GenericHelper::redirect
     * @todo   Implement testRedirect().
     */
    public function testRedirect()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
