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
use Floor9design\Eventim\PluginCore\Tests\BaseTestCase;
use Floor9design\TestDataGenerator\GeneratorException;
use Floor9design\TestingTools\Traits\AccessorTesterTrait;

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
class EventTest extends BaseTestCase
{
    use AccessorTesterTrait;

    /**
     * Test the basic accessors
     *
     * @throws GeneratorException
     */
    public function testBasicAccessors()
    {
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

        $this->assertEquals($test_event_array['artistIds'], $event->getArtistIds());
        $this->assertEquals($test_event_array['artistNames'], $event->getArtistNames());
        $this->assertEquals($test_event_array['dateRangeEnd'], $event->getDateRangeEnd());
        $this->assertEquals($test_event_array['dateRangeStart'], $event->getDateRangeStart());
        $this->assertEquals($test_event_array['deliverable'], $event->getDeliverable());
        $this->assertEquals($test_event_array['eventCity'], $event->getEventCity());
        $this->assertEquals($test_event_array['eventCityId'], $event->getEventCityId());
        $this->assertEquals($test_event_array['eventCountry'], $event->getEventCountry());
        $this->assertEquals($test_event_array['eventDate'], $event->getEventDate());
        $this->assertEquals($test_event_array['eventDateIso8601'], $event->getEventDateIso8601());
        $this->assertEquals($test_event_array['eventId'], $event->getEventId());
        $this->assertEquals($test_event_array['eventLink'], $event->getEventLink());
        $this->assertEquals($test_event_array['eventName'], $event->getEventName());
        $this->assertEquals($test_event_array['eventProvince'], $event->getEventProvince());
        $this->assertEquals($test_event_array['eventSearchText'], $event->getEventSearchText());
        $this->assertEquals($test_event_array['eventStatus'], $event->getEventStatus());
        $this->assertEquals($test_event_array['eventStreet'], $event->getEventStreet());
        $this->assertEquals($test_event_array['eventTime'], $event->getEventTime());
        $this->assertEquals($test_event_array['eventType'], $event->getEventType());
        $this->assertEquals($test_event_array['eventVenue'], $event->getEventVenue());
        $this->assertEquals($test_event_array['eventVenueGroupId'], $event->getEventVenueGroupId());
        $this->assertEquals($test_event_array['eventVenueId'], $event->getEventVenueId());
        $this->assertEquals($test_event_array['eventZip'], $event->getEventZip());
        $this->assertEquals($test_event_array['evoLink'], $event->getEvoLink());
        $this->assertEquals($test_event_array['fanticketImage'], $event->getFanticketImage());
        $this->assertEquals($test_event_array['includedEventIDs'], $event->getIncludedEventIDs());
        $this->assertEquals($test_event_array['linkEventUrl'], $event->getLinkEventUrl());
        $this->assertEquals($test_event_array['maxPrice'], $event->getMaxPrice());
        $this->assertEquals($test_event_array['minPrice'], $event->getMinPrice());
        $this->assertEquals($test_event_array['numberOfEvents'], $event->getNumberOfEvents());
        $this->assertEquals($test_event_array['numberOfVenues'], $event->getNumberOfVenues());
        $this->assertEquals($test_event_array['onlyBookableInSP'], $event->getOnlyBookableInSP());
        $this->assertEquals($test_event_array['onsaleDate'], $event->getOnsaleDate());
        $this->assertEquals($test_event_array['onsaleTime'], $event->getOnsaleTime());
        $this->assertEquals($test_event_array['overrideImage'], $event->getOverrideImage());
        $this->assertEquals($test_event_array['priceCategories'], $event->getPriceCategories());
        $this->assertEquals($test_event_array['promoterId'], $event->getPromoterId());
        $this->assertEquals($test_event_array['ticketdirect'], $event->getTicketdirect());
        $this->assertEquals($test_event_array['ticketStock'], $event->getTicketStock());
        $this->assertEquals($test_event_array['willcall'], $event->getWillcall());
        $this->assertEquals($test_event_array['venueLatitude'], $event->getVenueLatitude());
        $this->assertEquals($test_event_array['venueLongitude'], $event->getVenueLongitude());
    }

    /**
     * Test the more advanced accessors
     */
    public function testAdvancedAccessors()
    {
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

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

        // getPostMetaData
        $post_meta_data = $event->getPostMetaData();
        $this->assertArrayNotHasKey('priceCategories', $post_meta_data);
    }

    /**
     * Tests Event::getImage()
     */
    public function testGetImage()
    {
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

        // create a stubbed EventSerie object:
        $event_serie_stub = $this->createStub(EventSerie::class);

        // Configure the stub.
        $test_image = $this->generator->randomImageUrl();
        $event_serie_stub
            ->method('getEsPicture')
            ->willReturn($test_image);
        $event->setEventSerie($event_serie_stub);

        // unset the image:
        $event->setOverrideImage(null);

        // eventSeriesImage
        $this->assertEquals($test_image, $event->getImage());

        // Now test overwrite:
        $test_image = $this->generator->randomImageUrl();
        $event->setOverrideImage($test_image);

        $this->assertEquals($event->getImage(), $test_image);

        // Now test null:
        $event = new Event($test_event_array);
        $event->setEventSerie(null);

        $this->assertEquals($event->getImage(), '');
    }

    /**
     * Tests Event::getEventData()
     */
    public function testGetEventData()
    {
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);
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

        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

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
     * Tests Event::eventStatusHumanise()
     */
    public function testEventStatusHumanise()
    {
        $ids = [1, 2, 3, 4, 6, 7, 8, 14, 16];

        foreach ($ids as $id) {
            $response = Event::eventStatusHumanise($id);

            // check array
            $this->assertIsArray($response);

            // check format of array
            $keys = ['short', 'long', 'verbose', 'event_buyable'];
            $this->assertEquals($keys, array_keys($response));
        }

        // Test bad statuses
        $response = Event::eventStatusHumanise(100);
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

        $response = Event::eventStatusHumanise(0);
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
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

        $event->setEventStatus(1);
        $event_status_lookup = $event->eventStatusHumaniser($event->getEventStatus());
        $event->setEventStatusLookup($event_status_lookup);

        $this->assertEquals($event_status_lookup, $event->getEventStatusLookup());
    }

    /**
     * Tests Event::currencyConverter()
     * @throws GeneratorException
     */
    public function testCurrencyConverter()
    {
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

        // test decimal places
        $this->assertEquals('12.00', $event->currencyConverter(12.0));
        $this->assertEquals('12.00', $event->currencyConverter(12));
        $this->assertEquals('12.00', $event->currencyConverter(12.0000));

        // test commas
        $this->assertEquals('12,345.00', $event->currencyConverter(12345));
    }

    /**
     * Tests Event::currencyConvert()
     */
    public function testCurrencyConvert()
    {
        // test decimal places
        $this->assertEquals('12.00', Event::currencyConvert(12.0));
        $this->assertEquals('12.00', Event::currencyConvert(12));
        $this->assertEquals('12.00', Event::currencyConvert(12.0000));

        // test commas
        $this->assertEquals('12,345.00', Event::currencyConvert(12345));
    }

    /**
     * Tests Event::setMinPrice and Event::setMaxPrice
     * @throws GeneratorException
     */
    public function testMinMaxPriceFormatted()
    {
        $test_event_array = $this->createTestEventArray();
        $event = new Event((object)$test_event_array);

        $event->setMaxPrice(12);
        $this->assertEquals('&pound;12.00', $event->getMaxPriceFormatted());
        $event->setMaxPrice(12);
        $this->assertEquals('12.00', $event->getMaxPriceFormatted(null));
        $event->setMaxPrice(12);
        $this->assertEquals('12.00 &euro;', $event->getMaxPriceFormatted(null, ' &euro;'));

        $event->setMinPrice(12);
        $this->assertEquals('&pound;12.00', $event->getMinPriceFormatted());
        $event->setMinPrice(12);
        $this->assertEquals('12.00', $event->getMinPriceFormatted(null));
        $event->setMinPrice(12);
        $this->assertEquals('12.00 &euro;', $event->getMinPriceFormatted(null, ' &euro;'));
    }

    /**
     * Tests Event::processObject()
     */
    public function testProcessObject()
    {
        // function is invoked on instantiation by constructor, so almost all is already done: only EventSerie remains

        // create a stubbed EventSerie object:
        $event_serie_stub = $this->createStub(EventSerie::class);

        $test_event_array = $this->createTestEventArray();
        $test_event_array['eventSerie'] = $event_serie_stub;
        $event = new Event((object)$test_event_array);

        $this->assertEquals($event_serie_stub, $event->getEventSerie());
    }
}

