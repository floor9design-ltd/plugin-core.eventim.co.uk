<?php
/**
 * EventTest.php
 *
 * EventTest class
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

use Floor9design\Eventim\PluginCore\Models\Event;
use Floor9design\Eventim\PluginCore\Models\EventSerie;
use Floor9design\Eventim\PluginCore\Models\PriceCategory;
use Floor9design\TestDataGenerator\Generator;
use Floor9design\TestDataGenerator\GeneratorException;
use PHPUnit\Framework\TestCase;
use StdClass;

/**
 * EventTest
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
class EventTest extends TestCase
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
        $test_object_array = $this->createTestObjectArray();

        // __construct automatically sets all properties
        $event = new Event($test_object_array['object']);

        // test all gets
        foreach ($test_object_array['items'] as $item) {
            // can't use arrays in function context
            $property = $item['property'];
            $method = $item['method'];

            $this->assertEquals(
                $test_object_array['object']->$property,
                $event->$method()
            );
        }
    }

    /**
     * Test the more advanced accessors
     */
    public function testAdvancedAccessors()
    {
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

        // create a stubbed EventSerie object:
        $event_serie_stub = $this->createStub(EventSerie::class);

        // Configure the stub.
        $test_string = $this->generator->randomImageUrl();
        $event_serie_stub
            ->method('getEsPicture')
            ->willReturn($test_string);

        // eventSerie
        $event->setEventSerie($event_serie_stub);
        $this->assertEquals($event_serie_stub, $event->getEventSerie());

        // eventSeriesImage
        $this->assertEquals($event->getEventSerieImage(), $test_string);

        // priceCategory

        // create a stubbed PriceCategory object:
        $price_category_stub = $this->createStub(PriceCategory::class);

        $event->setPriceCategories([$price_category_stub]);
        $this->assertEquals([$price_category_stub], $event->getPriceCategories());
    }

    /**
     * Tests Event::getImage()
     */
    public function testGetImage()
    {
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

        // create a stubbed EventSerie object:
        $event_serie_stub = $this->createStub(EventSerie::class);

        // Configure the stub.
        $test_image = $this->generator->randomImageUrl();
        $event_serie_stub
            ->method('getEsPicture')
            ->willReturn($test_image);
        $event->setEventSerie($event_serie_stub);

        // eventSeriesImage
        $this->assertEquals($test_image, $event->getImage());

        // Now test overwrite:
        $test_image = $this->generator->randomImageUrl();
        $event->setOverrideImage($test_image);

        $this->assertEquals($event->getImage(), $test_image);

        // Now test null:
        $event = new Event($test_object_array['object']);
        $event->setEventSerie(null);

        $this->assertEquals($event->getImage(), '');
    }

    /**
     * Tests Event::getEventData()
     */
    public function testGetEventData()
    {
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);
        $event_array = $event->getEventData();

        // accessors already done, and full mapping is tested elsewhere - so just check key output types:

        // array
        $this->assertEquals(implode(',', $event->getArtistIds()), $event_array['artistIds']);

        // string
        $this->assertEquals($event->getArtistNames(), $event_array['artistNames']);

        // bool
        $this->assertEquals($event->getDeliverable(), $event_array['deliverable']);

        // int
        $this->assertEquals($event->getEventCityId(), $event_array['eventCityId']);

        // int
        $this->assertEquals($event->getMaxPrice(), $event_array['maxPrice']);
    }

    /**
     * Tests Event::eventStatusHumaniser()
     */
    public function testEventStatusHumaniser()
    {
        $ids = [1, 2, 3, 4, 6, 7, 8, 14, 16];

        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

        foreach ($ids as $id) {
            $response = $event->eventStatusHumaniser($id);

            // check array
            $this->assertIsArray($response);

            // check format of array
            $keys = ['short', 'long', 'verbose', 'event_buyable'];
            $this->assertEquals($keys, array_keys($response));
        }

        // Test bad statuses
        $response = $event->eventStatusHumaniser(100);
        $bad_response = [
            'short' => '',
            'long' => '',
            'verbose' => '',
            'event_buyable' => false
        ];

        // check array
        $this->assertIsArray($response);

        // check format of array
        $this->assertEquals($bad_response, $response);

        $response = $event->eventStatusHumaniser(0);
        $bad_response = [
            'short' => '',
            'long' => '',
            'verbose' => '',
            'event_buyable' => false
        ];

        // check array
        $this->assertIsArray($response);

        // check format of array
        $this->assertEquals($bad_response, $response);
    }

    /**
     * Tests Event::getEventStatusLookup(), Event::setEventStatusLookup()
     */
    public function testEventStatusLookupAccessors()
    {
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

        $event->setEventStatus(1);
        $event_status_lookup = $event->eventStatusHumaniser($event->getEventStatus());
        $event->setEventStatusLookup($event_status_lookup);

        $this->assertEquals($event_status_lookup, $event->getEventStatusLookup());
    }

    /**
     * Tests Event::getEventStatusLookup(), Event::setEventStatusLookup()
     * @throws GeneratorException
     */
    public function testCurrencyConverter()
    {
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

        // test decimal places
        $this->assertEquals('12.00', $event->currencyConverter(12.0));
        $this->assertEquals('12.00', $event->currencyConverter(12));
        $this->assertEquals('12.00', $event->currencyConverter(12.0000));

        // test commas
        $this->assertEquals('12,345.00', $event->currencyConverter(12345));
    }

    /**
     * Tests Event::processObject()
     */
    public function testProcessObject()
    {
        // function is invoked on instantiation by constructor

        // only object basics:
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

        // test all gets
        foreach ($test_object_array['items'] as $item) {
            // can't use arrays in function context
            $property = $item['property'];
            $method = $item['method'];

            $this->assertEquals(
                $test_object_array['object']->$property,
                $event->$method()
            );
        }

        // test child objects:
        $test_object_array = $this->createTestObjectArray();

        $event_serie_stub = $this->createStub(EventSerie::class);
        $price_categories = [];

        $test_object_array['object']->eventSerie = $event_serie_stub;
        $test_object_array['object']->priceCategories = $price_categories;

        $event = new Event($test_object_array['object']);
        $this->assertEquals($event_serie_stub, $event->getEventSerie());
        $this->assertSame($price_categories, $event->getPriceCategories());

        // test auto generated properties:

        $this->assertIsArray($event->getEventStatusLookup());

        $parts = explode('.', $event->getMaxPriceFormatted());
        // decimals
        $this->assertEquals(strlen($parts[1]), 2);

        $parts = explode('.', $event->getMinPriceFormatted());
        // decimals
        $this->assertEquals(strlen($parts[1]), 2);

    }

    // setup

    /**
     * Creates a test array for populating an example class
     *
     * @return array
     * @throws GeneratorException
     */
    private function createTestObjectArray(): array
    {
        $object = new StdClass();

        $array = [];

        // ints:
        foreach (
            [
                'eventCityId' => 'getEventCityId',
                'eventId' => 'getEventId',
                'eventStatus' => 'getEventStatus',
                'eventType' => 'getEventType',
                'eventVenueGroupId' => 'getEventVenueGroupId',
                'eventVenueId' => 'getEventVenueId',
                'numberOfEvents' => 'getNumberOfEvents',
                'numberOfVenues' => 'getNumberOfVenues',
                'promoterId' => 'getPromoterId',
                'ticketStock' => 'getTicketStock'
            ] as $property => $method
        ) {
            try {
                $test_id = $this->generator->randomInteger(5, 100);
            } catch (GeneratorException $e) {
                throw new GeneratorException($e->getMessage());
            }

            $object->$property = $test_id;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // arrays of ints:
        foreach (
            [
                'artistIds' => 'getArtistIds',
                'includedEventIDs' => 'getIncludedEventIDs'
            ] as $property => $method
        ) {
            try {
                $test_ids = $this->generator->randomIntegerArray(5, 100, 4);
            } catch (GeneratorException $e) {
                throw new GeneratorException($e->getMessage());
            }
            $object->$property = $test_ids;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // strings:
        foreach (
            [
                'artistNames' => 'getArtistNames',
                'eventCity' => 'getEventCity',
                'eventCountry' => 'getEventCountry',
                'eventLink' => 'getEventLink',
                'eventName' => 'getEventName',
                'eventProvince' => 'getEventProvince',
                'eventSearchText' => 'getEventSearchText',
                'eventStreet' => 'getEventStreet',
                'eventVenue' => 'getEventVenue',
                'eventZip' => 'getEventZip',
                'evoLink' => 'getEvoLink',
                'fanticketImage' => 'getFanticketImage',
                'linkEventUrl' => 'getLinkEventUrl'
            ] as $property => $method
        ) {
            $test_string = $this->generator->randomString();
            $object->$property = $test_string;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // dates:
        foreach (
            [
                'dateRangeEnd' => 'getDateRangeEnd',
                'dateRangeStart' => 'getDateRangeStart',
                'eventDate' => 'getEventDate',
                'eventDateIso8601' => 'getEventDateIso8601',
                'onsaleDate' => 'getOnsaleDate'
            ] as $property => $method
        ) {
            $test_date = $this->generator->randomMySqlDate();
            $object->$property = $test_date;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // Times
        foreach (
            [
                'eventTime' => 'getEventTime',
                'onsaleTime' => 'getOnsaleTime'
            ] as $property => $method
        ) {
            $test_date = $this->generator->randomMySqlDate('H:i:s');
            $object->$property = $test_date;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // boolean:
        foreach (
            [
                'deliverable' => 'getDeliverable',
                'onlyBookableInSP' => 'getOnlyBookableInSP',
                'ticketdirect' => 'getTicketdirect',
                'willcall' => 'getWillcall'
            ] as $property => $method
        ) {
            $object->$property = $this->generator->randomBoolean();

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // money:
        foreach (
            [
                'maxPrice' => 'getMaxPrice',
                'minPrice' => 'getMinPrice'
            ] as $property => $method
        ) {
            $test_id = $this->generator->randomCurrency();
            $object->$property = $test_id;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        // float:
        foreach (
            [
                'venueLatitude' => 'getVenueLatitude',
                'venueLongitude' => 'getVenueLongitude'
            ] as $property => $method
        ) {
            $test_float = $this->generator->randomFloat();
            $object->$property = $test_float;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        $array['object'] = $object;

        return $array;
    }

}

