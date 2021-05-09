<?php
/**
 * ArtistTest.php
 *
 * ArtistTest class
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

use Floor9design\Eventim\PluginCore\Models\Artist;
use Floor9design\Eventim\PluginCore\Tests\BaseTestCase;
use Floor9design\TestDataGenerator\GeneratorException;
use Floor9design\TestingTools\Traits\AccessorTesterTrait;

/**
 * ArtistTest
 *
 * Tests the Artist class.
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
class ArtistTest extends BaseTestCase
{
    use AccessorTesterTrait;

    /**
     * Test the constructor
     * Also tests process object
     */
    public function testConstructor()
    {
        $test_object_array = $this->createTestArtistArray();
        $price_category = new Artist((object)$test_object_array);

        $this->assertEquals($test_object_array['artistId'], $price_category->getArtistId());
        $this->assertEquals($test_object_array['artistName'], $price_category->getArtistName());
        $this->assertEquals($test_object_array['extArtistId'], $price_category->getExtArtistId());
        $this->assertEquals($test_object_array['extArtistId2'], $price_category->getExtArtistId2());
        $this->assertEquals($test_object_array['extArtistId3'], $price_category->getExtArtistId3());
        $this->assertEquals($test_object_array['evoLink'], $price_category->getEvoLink());
    }

    /**
     * Test the basic accessors
     *
     * @throws GeneratorException
     */
    public function testBasicAccessors()
    {
        $test_object_array = $this->createTestArtistArray();

        // __construct automatically sets all properties
        $price_category = new Artist((object)$test_object_array);

        $strings = [
            'artistName' => [],
            'evoLink' => []
        ];
        $this->accessorTestStrings($strings, $price_category);

        $integers = [
            'artistId' => [],
            'extArtistId' => [],
            'extArtistId2' => [],
            'extArtistId3' => [],
        ];
        $this->accessorTestIntegers($integers, $price_category);
    }

}

