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
 * @license   Private software
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.0
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\Eventim\PluginCore\Tests\Unit;

use Floor9design\Eventim\PluginCore\Models\Event;
use PHPUnit\Framework\TestCase;

/**
 * EventTest
 *
 * Tests the EventFeedJson including populating its children.
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   Private software
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.0
 * @see       \Floor9design\Eventim\PluginCore\Models\Event
 * @since     File available since Release 1.0
 */
class EventTest extends TestCase
{

    public function testBasicAccessorsTest()
    {
        $test_object_array = $this->createTestObjectArray();
        $event = new Event($test_object_array['object']);

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

    private function createTestObjectArray(): array
    {
        $object = new \StdClass();

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
            $test_id = random_int(1, 1000);
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
            $test_ids = [
                random_int(1, 1000),
                random_int(1, 1000),
                random_int(1, 1000),
            ];
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
            $test_string = md5(rand());
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
            $test_date = date('Y-m-d');
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
            $test_date = date('H:i:s');
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
            $test_bool = random_int(0, 1);
            $object->$property = $test_bool;

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
            $test_id = random_int(1000, 20000) / 10;
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
            $test_id = random_int(1000, 20000) / random_int(1000, 20000);
            $object->$property = $test_id;

            $array['items'][$property]['property'] = $property;
            $array['items'][$property]['method'] = $method;
        }

        /*
$event->setArtistNames($object->artistNames);
$event->setDateRangeEnd($object->dateRangeEnd);
$event->setDateRangeStart($object->dateRangeStart);
$event->setDeliverable($object->deliverable);
$event->setEventCity($object->eventCity);
$event->setEventCityId($object->eventCityId);
$event->setEventCountry($object->eventCountry);
$event->setEventDate($object->eventDate);
$event->setEventDateIso8601($object->eventDateIso8601);
$event->setEventId($object->eventId);
$event->setEventLink($object->eventLink);
$event->setEventName($object->eventName);
$event->setEventProvince($object->eventProvince);
$event->setEventSearchText($object->eventSearchText);

if($object->eventSeriesImage ?? false) {
    $event->setEventSeriesImage($object->eventSeriesImage);
}

$event->setEventStatus($object->eventStatus);
$event->setEventStreet($object->eventStreet);
$event->setEventTime($object->eventTime);
$event->setEventType($object->eventType);
$event->setEventVenue($object->eventVenue);
$event->setEventVenueGroupId($object->eventVenueGroupId);
$event->setEventVenueId($object->eventVenueId);
$event->setEventZip($object->eventZip);
$event->setEvoLink($object->evoLink);
$event->setFanticketImage($object->fanticketImage);
$event->setIncludedEventIDs($object->includedEventIDs);
$event->setLinkEventUrl($object->linkEventUrl);
$event->setMaxPrice($object->maxPrice);
$event->setMinPrice($object->minPrice);
$event->setNumberOfEvents($object->numberOfEvents);
$event->setNumberOfVenues($object->numberOfVenues);
$event->setOnsaleDate($object->onsaleDate);
$event->setOnsaleTime($object->onsaleTime);

if($object->overrideImage ?? false) {
    $event->setOverrideImage($object->overrideImage);
}

$event->setPriceCategories(
    $event->processPriceCategories($object->priceCategories)
);

$event->setPromoterId($object->promoterId);
$event->setOnlyBookableInSP($object->onlyBookableInSP);
$event->setTicketStock($object->ticketStock);
$event->setTicketdirect($object->ticketdirect);
$event->setWillcall($object->willcall);
$event->setVenueLatitude($object->venueLatitude);
$event->setVenueLongitude($object->venueLongitude);
*/

        $array['object'] = $object;

        return $array;
    }

}

