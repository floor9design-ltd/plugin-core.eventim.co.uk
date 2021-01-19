<?php
/**
 * EsCategoryTest.php
 *
 * EsCategoryTest class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.0
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\Eventim\PluginCore\Tests\Unit;

use Floor9design\Eventim\PluginCore\Models\EsCategory;
use Floor9design\TestDataGenerator\Generator;
use Floor9design\TestDataGenerator\GeneratorException;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * EsCategoryTest
 *
 * Tests the EsCategory class.
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.0
 * @see       \Floor9design\Eventim\PluginCore\Models\Event
 * @since     File available since Release 1.0
 */
class EsCategoryTest extends TestCase
{
    /**
     * @var Generator
     */
    var $generator;

    /**
     * Set up the generator
     */
    public function setUp(): void
    {
        $this->generator = new Generator();
    }

    /**
     * Test the basic accessors
     *
     * @throws GeneratorException
     */
    public function testBasicAccessors()
    {
        $category = '1A';
        $object = new StdClass();
        $object->category = $category;

        // __construct automatically sets all properties
        $es_category = new EsCategory($object);
        $this->assertEquals($category, $es_category->getCategory());

        $category = $this->generator->randomString(2);
        $es_category->setCategory($category);
        $this->assertEquals($category, $es_category->getCategory());
    }
}

