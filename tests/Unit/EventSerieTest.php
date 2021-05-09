<?php
/**
 * EventSerieTest.php
 *
 * EventSerieTest class
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

use Floor9design\Eventim\PluginCore\Models\EventSerie;
use Floor9design\Eventim\PluginCore\Tests\BaseTestCase;
use Floor9design\TestDataGenerator\Generator;
use Floor9design\TestDataGenerator\GeneratorException;
use Floor9design\TestingTools\Traits\AccessorTesterTrait;

/**
 * EventSerieTest
 *
 * Tests the Event class.
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
class EventSerieTest extends BaseTestCase
{

    use AccessorTesterTrait;

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
        $test_object_array = $this->createTestEventSerieArray();
        $event_serie = new EventSerie((object)$test_object_array);

        // test all accessors
        $this->accessorTestIntegers(
            [
                'esId' => [],
                'esTopTen' => [],
                'ranking' => []
            ],
            $event_serie
        );

        $this->accessorTestStrings(
            [
                'artistRating' => [],
                'esInfo' => [],
                'esLink' => [],
                'esName' => [],
                'esPicture' => [],
                'esPictureBig' => [],
                'esPictureSmall' => [],
                'esText' => [],
                'evoLink' => [],
                'fanticketImage' => [],
                'searchText' => []
            ],
            $event_serie
        );

        $this->accessorTestArrays(
            [
                'artists' => [],
                'esCategories' => [],
                'events' => []
            ],
            $event_serie
        );

        $this->accessorTestDateTimes(
            [
                'esBegin' => [],
                'esEnd' => []
            ],
            $event_serie
        );

        $this->accessorTestBooleans(
            [
                'fanticket' => []
            ],
            $event_serie
        );

        $this->accessorTestCurrencies(
            [
                'maxprice' => [],
                'minprice' => []
            ],
            $event_serie
        );
    }

    /**
     * Tests EventSerie::getPostMetaData()
     */
    public function testGetPostMetaData()
    {
        $test_object_array = $this->createTestEventSerieArray();
        $event_serie = new EventSerie((object)$test_object_array);
        $array = $event_serie->getPostMetaData();

        // check that keys are stripped
        $this->assertArrayNotHasKey('artists', $array);
        $this->assertArrayNotHasKey('esCategories', $array);
        $this->assertArrayNotHasKey('events', $array);

        // check an example key one still remains
        $this->assertArrayHasKey('esId', $array);
    }

}

