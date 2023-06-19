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
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.3
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\Eventim\PluginCore\Tests\Unit;

use Floor9design\Eventim\PluginCore\Models\EsCategory;
use Floor9design\Eventim\PluginCore\Tests\BaseTestCase;
use Floor9design\TestDataGenerator\GeneratorException;
use Floor9design\TestingTools\Traits\AccessorTesterTrait;

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
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.3
 * @see       \Floor9design\Eventim\PluginCore\Models\Event
 * @since     File available since Release 1.0
 */
class EsCategoryTest extends BaseTestCase
{
    use AccessorTesterTrait;

    /**
     * Test the constructor
     * Also tests process object
     */
    public function testConstructor()
    {
        $es_category_array = $this->createTestEsCategoryArray();
        $es_category = new EsCategory((object)$es_category_array);

        $this->assertEquals($es_category_array['category'], $es_category->getCategory());
    }

    /**
     * Test the basic accessors
     *
     * @throws GeneratorException
     */
    public function testBasicAccessors()
    {
        $es_category_array = $this->createTestEsCategoryArray();
        $es_category = new EsCategory((object)$es_category_array);

        $strings = [
            'category' => []
        ];
        $this->accessorTestStrings($strings, $es_category);
    }
}

