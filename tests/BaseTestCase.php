<?php
/**
 * BaseTestCase.php
 *
 * BaseTestCase class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests
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

namespace Floor9design\Eventim\PluginCore\Tests;

use Floor9design\Eventim\PluginCore\Models\Artist;
use Floor9design\Eventim\PluginCore\Models\EsCategory;
use Floor9design\Eventim\PluginCore\Models\Event;
use Floor9design\Eventim\PluginCore\Models\PriceCategory;
use Floor9design\TestDataGenerator\Generator;
use Floor9design\TestDataGenerator\GeneratorException;
use PHPUnit\Framework\TestCase;

/**
 * BaseTest
 *
 * Base class for extending tests from, offering methods for generating common elements
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests
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
class BaseTestCase extends TestCase
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
     * @return array
     */
    public function createTestArtistArray(): array
    {
        return [
            'artistName' => $this->generator->randomString(),
            'artistId' => $this->generator->randomInteger(),
            'extArtistId' => $this->generator->randomInteger(),
            'extArtistId2' => $this->generator->randomInteger(),
            'extArtistId3' => $this->generator->randomInteger(),
            'evoLink' => $this->generator->randomUrl()
        ];
    }

    /**
     * @return array
     */
    public function createTestEsCategoryArray(): array
    {
        return [
            'category' => $this->generator->randomString()
        ];
    }

    /**
     * Creates a test array for populating an example class
     *
     * @return array
     * @throws GeneratorException
     */
    public function createTestEventArray(): array
    {
        return [
            'artistIds' => [$this->generator->randomInteger()],
            'artistNames' => $this->generator->randomString(),
            'dateRangeEnd' => $this->generator->randomMySqlDate(),
            'dateRangeStart' => $this->generator->randomMySqlDate(),
            'deliverable' => $this->generator->randomBoolean(),
            'eventCity' => $this->generator->randomString(),
            'eventCityId' => $this->generator->randomInteger(),
            'eventCountry' => $this->generator->randomString(),
            'eventDate' => $this->generator->randomMySqlDate(),
            'eventDateIso8601' => $this->generator->randomMySqlDate(),
            'eventId' => $this->generator->randomInteger(),
            'eventLink' => $this->generator->randomUrl(),
            'eventName' => $this->generator->randomString(),
            'eventProvince' => $this->generator->randomString(),
            'eventSearchText' => $this->generator->randomString(),
            'eventStatus' => $this->generator->randomInteger(),
            'eventStreet' => $this->generator->randomString(),
            'eventTime' => date('H:i:s'),
            'eventType' => $this->generator->randomInteger(),
            'eventVenue' => $this->generator->randomString(),
            'eventVenueGroupId' => $this->generator->randomInteger(),
            'eventVenueId' => $this->generator->randomInteger(),
            'eventZip' => $this->generator->randomString(),
            'evoLink' => $this->generator->randomUrl(),
            'fanticketImage' => $this->generator->randomImageUrl(),
            'includedEventIDs' => [$this->generator->randomInteger()],
            'linkEventUrl' => $this->generator->randomUrl(),
            'maxPrice' => $this->generator->randomCurrency(),
            'maxPriceFormatted' => $this->generator->randomCurrency(),
            'minPrice' => $this->generator->randomCurrency(),
            'minPriceFormatted' => $this->generator->randomCurrency(),
            'numberOfEvents' => $this->generator->randomInteger(),
            'numberOfVenues' => $this->generator->randomInteger(),
            'onsaleDate' => date('Y:m:d'),
            'onsaleTime' => date('H:i:s'),
            'overrideImage' => $this->generator->randomImageUrl(),
            'priceCategories' => [new PriceCategory((object)$this->createTestPriceCategoryArray())],
            'promoterId' => $this->generator->randomInteger(),
            'onlyBookableInSP' => $this->generator->randomBoolean(),
            'ticketStock' => $this->generator->randomInteger(),
            'ticketdirect' => $this->generator->randomBoolean(),
            'willcall' => $this->generator->randomBoolean(),
            'venueLatitude' => $this->generator->randomFloat(),
            'venueLongitude' => $this->generator->randomFloat(),
        ];
    }

    /**
     * Creates a test array for populating an example class
     *
     * @return array
     * @throws GeneratorException
     */
    public function createTestEventSerieArray(): array
    {
        return [
            'artists' => [new Artist((object)$this->createTestArtistArray())],
            'artistRating' => $this->generator->randomString(),
            'esBegin' => $this->generator->randomMySqlDate(),
            'esCategories' => [new EsCategory((object)$this->createTestEsCategoryArray())],
            'esEnd' => $this->generator->randomMySqlDate(),
            'esId' => $this->generator->randomInteger(),
            'esInfo' => $this->generator->randomString(),
            'esLink' => $this->generator->randomUrl(),
            'esName' => $this->generator->randomString(),
            'esPicture' => $this->generator->randomImageUrl(),
            'esPictureBig' => $this->generator->randomImageUrl(),
            'esPictureSmall' => $this->generator->randomImageUrl(),
            'esText' => $this->generator->randomString(),
            'esTopTen' => $this->generator->randomInteger(),
            'events' => [new Event($this->createTestEventArray())],
            'evoLink' => $this->generator->randomUrl(),
            'fanticket' => $this->generator->randomBoolean(),
            'fanticketImage' => $this->generator->randomImageUrl(),
            'maxPrice' => $this->generator->randomCurrency(),
            'minPrice' => $this->generator->randomCurrency(),
            'ranking' => $this->generator->randomInteger(),
            'searchText' => $this->generator->randomString(),
        ];
    }

    /**
     * @return array
     */
    public function createTestPriceCategoryArray()
    {
        return [
            "inventory" => $this->generator->randomString(),
            "productType" => $this->generator->randomInteger(),
            "price" => $this->generator->randomCurrency(),
            "currency" => $this->generator->randomString(3),
            "priceCategoryName" => $this->generator->randomString(),
            "priceCategoryId" => $this->generator->randomInteger(),
            "priceCategoryNumber" => $this->generator->randomInteger()
        ];
    }

}

