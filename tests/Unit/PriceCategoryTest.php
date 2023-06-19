<?php
/**
 * PriceCategoryTest.php
 *
 * PriceCategoryTest class
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

use Floor9design\Eventim\PluginCore\Models\PriceCategory;
use Floor9design\Eventim\PluginCore\Tests\BaseTestCase;
use Floor9design\TestDataGenerator\GeneratorException;
use Floor9design\TestingTools\Traits\AccessorTesterTrait;

/**
 * PriceCategoryTest
 *
 * Tests the PriceCategory class.
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
class PriceCategoryTest extends BaseTestCase
{
    use AccessorTesterTrait;

    /**
     * Test the constructor
     */
    public function testConstructor()
    {
        $test_price_category_array = $this->createTestPriceCategoryArray();

        // __construct automatically sets all properties
        $price_category = new PriceCategory((object)$test_price_category_array);

        $this->assertEquals($test_price_category_array["inventory"], $price_category->getInventory());
        $this->assertEquals($test_price_category_array["productType"], $price_category->getProductType());
        $this->assertEquals($test_price_category_array["price"], $price_category->getPrice());
        $this->assertEquals($test_price_category_array["currency"], $price_category->getCurrency());
        $this->assertEquals($test_price_category_array["priceCategoryName"], $price_category->getPriceCategoryName());
        $this->assertEquals($test_price_category_array["priceCategoryId"], $price_category->getPriceCategoryId());
        $this->assertEquals($test_price_category_array["priceCategoryNumber"], $price_category->getPriceCategoryNumber());
    }

    /**
     * Test the basic accessors
     *
     * @throws GeneratorException
     */
    public function testBasicAccessors()
    {
        $test_price_category_array = $this->createTestPriceCategoryArray();

        // __construct automatically sets all properties
        $price_category = new PriceCategory((object)$test_price_category_array);

        $strings = [
            'inventory' => [],
            'price' => [],
            'currency' => [],
            'priceCategoryName' => []
        ];
        $this->accessorTestStrings($strings, $price_category);

        $integers = [
            'productType' => [],
            'currency' => [],
            'priceCategoryId' => [],
            'priceCategoryNumber' => []
        ];
        $this->accessorTestIntegers($integers, $price_category);
    }
    
}

