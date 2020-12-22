<?php
/**
 * Event.php
 *
 * Event class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Models
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   Private software
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\Eventim\PluginCore\Models;

/**
 * Class Event
 *
 * Models the Event collection
 *
 * @category  None
 * @package   Floor9design\LaravelRestfulApi\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   Private software
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @see       \Floor9design\Eventim\PluginCore\Models\EventFeed
 * @since     File available since Release 1.0
 */
class Event
{
    // Properties

    /**
     * @var
     */
    protected $artistIds = [];

    /**
     * @var
     */
    protected $artistNames;

    /**
     * @var
     */
    protected $dateRangeEnd;

    /**
     * @var
     */
    protected $dateRangeStart;

    /**
     * @var
     */
    protected $deliverable;

    /**
     * @var
     */
    protected $eventCity;

    /**
     * @var
     */
    protected $eventCityId;

    /**
     * @var
     */
    protected $eventCountry;

    /**
     * @var
     */
    protected $eventDate;

    /**
     * @var
     */
    protected $eventDateIso8601;

    /**
     * @var
     */
    protected $eventId;

    /**
     * @var
     */
    protected $eventLink;

    /**
     * @var
     */
    protected $eventName;

    /**
     * @var
     */
    protected $eventProvince;

    /**
     * @var
     */
    protected $eventSearchText;

    /**
     * @var
     */
    protected $eventStatus;

    /**
     * @var
     */
    protected $eventStreet;

    /**
     * @var
     */
    protected $eventSeriesImage;

    /**
     * @var
     */
    protected $eventTime;

    /**
     * @var
     */
    protected $eventType;

    /**
     * @var
     */
    protected $eventVenue;

    /**
     * @var
     */
    protected $eventVenueGroupId;

    /**
     * @var
     */
    protected $eventVenueId;

    /**
     * @var
     */
    protected $eventZip;

    /**
     * @var
     */
    protected $evoLink;

    /**
     * @var
     */
    protected $fanticketImage;

    /**
     * @var
     */
    protected $overrideImage;

    /**
     * @var
     */
    protected $includedEventIDs;

    /**
     * @var
     */
    protected $linkEventUrl;

    /**
     * @var
     */
    protected $maxPrice;

    /**
     * @var
     */
    protected $minPrice;

    /**
     * @var
     */
    protected $numberOfEvents;

    /**
     * @var
     */
    protected $numberOfVenues;

    /**
     * @var
     */
    protected $onsaleDate;

    /**
     * @var
     */
    protected $onsaleTime;

    /**
     * @var
     */
    protected $priceCategories = [];

    /**
     * @var
     */
    protected $promoterId;

    /**
     * @var
     */
    protected $onlyBookableInSP;

    /**
     * @var
     */
    protected $ticketStock;

    /**
     * @var
     */
    protected $ticketdirect;

    /**
     * @var
     */
    protected $willcall;

    /**
     * @var
     */
    protected $venueLatitude;

    /**
     * @var
     */
    protected $venueLongitude;

    // Accessors


    /**
     * @return mixed
     * @see $artistIds
     *
     */
    public function getArtistIds()
    {
        return $this->artistIds;
    }

    /**
     * @param mixed $artistIds
     * @return Event
     * @see $artistIds
     *
     */
    public function setArtistIds($artistIds)
    {
        $this->artistIds = $artistIds;
        return $this;
    }

    /**
     * @return mixed
     * @see $artistNames
     *
     */
    public function getArtistNames()
    {
        return $this->artistNames;
    }

    /**
     * @param mixed $artistNames
     * @return Event
     * @see $artistNames
     *
     */
    public function setArtistNames($artistNames)
    {
        $this->artistNames = $artistNames;
        return $this;
    }

    /**
     * @return mixed
     * @see $dateRangeEnd
     *
     */
    public function getDateRangeEnd()
    {
        return $this->dateRangeEnd;
    }

    /**
     * @param mixed $dateRangeEnd
     * @return Event
     * @see $dateRangeEnd
     *
     */
    public function setDateRangeEnd($dateRangeEnd)
    {
        $this->dateRangeEnd = $dateRangeEnd;
        return $this;
    }

    /**
     * @return mixed
     * @see $dateRangeStart
     *
     */
    public function getDateRangeStart()
    {
        return $this->dateRangeStart;
    }

    /**
     * @param mixed $dateRangeStart
     * @return Event
     * @see $dateRangeStart
     *
     */
    public function setDateRangeStart($dateRangeStart)
    {
        $this->dateRangeStart = $dateRangeStart;
        return $this;
    }

    /**
     * @return mixed
     * @see $deliverable
     *
     */
    public function getDeliverable()
    {
        return $this->deliverable;
    }

    /**
     * @param mixed $deliverable
     * @return Event
     * @see $deliverable
     *
     */
    public function setDeliverable($deliverable)
    {
        $this->deliverable = $deliverable;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventCity
     *
     */
    public function getEventCity()
    {
        return $this->eventCity;
    }

    /**
     * @param mixed $eventCity
     * @return Event
     * @see $eventCity
     *
     */
    public function setEventCity($eventCity)
    {
        $this->eventCity = $eventCity;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventCityId
     *
     */
    public function getEventCityId()
    {
        return $this->eventCityId;
    }

    /**
     * @param mixed $eventCityId
     * @return Event
     * @see $eventCityId
     *
     */
    public function setEventCityId($eventCityId): Event
    {
        $this->eventCityId = $eventCityId;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventCountry
     *
     */
    public function getEventCountry()
    {
        return $this->eventCountry;
    }

    /**
     * @param mixed $eventCountry
     * @return Event
     * @see $eventCountry
     *
     */
    public function setEventCountry($eventCountry)
    {
        $this->eventCountry = $eventCountry;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventDate
     *
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param mixed $eventDate
     * @return Event
     * @see $eventDate
     *
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventDateIso8601
     *
     */
    public function getEventDateIso8601()
    {
        return $this->eventDateIso8601;
    }

    /**
     * @param mixed $eventDateIso8601
     * @return Event
     * @see $eventDateIso8601
     *
     */
    public function setEventDateIso8601($eventDateIso8601)
    {
        $this->eventDateIso8601 = $eventDateIso8601;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventId
     *
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param mixed $eventId
     * @return Event
     * @see $eventId
     *
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventLink
     *
     */
    public function getEventLink()
    {
        return $this->eventLink;
    }

    /**
     * @param mixed $eventLink
     * @return Event
     * @see $eventLink
     *
     */
    public function setEventLink($eventLink)
    {
        $this->eventLink = $eventLink;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventName
     *
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param mixed $eventName
     * @return Event
     * @see $eventName
     *
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventProvince
     *
     */
    public function getEventProvince()
    {
        return $this->eventProvince;
    }

    /**
     * @param mixed $eventProvince
     * @return Event
     * @see $eventProvince
     *
     */
    public function setEventProvince($eventProvince)
    {
        $this->eventProvince = $eventProvince;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventSearchText
     *
     */
    public function getEventSearchText()
    {
        return $this->eventSearchText;
    }

    /**
     * @param mixed $eventSearchText
     * @return Event
     * @see $eventSearchText
     *
     */
    public function setEventSearchText($eventSearchText)
    {
        $this->eventSearchText = $eventSearchText;
        return $this;
    }

    /**
     * @return null|string
     * @see $eventSeriesImage
     * @see getImage()
     *
     */
    public function getEventSeriesImage()
    {
        return $this->eventSeriesImage;
    }

    /**
     * @param string $eventSeriesImage
     * @return Event
     * @see $eventSeriesImage
     *
     */
    public function setEventSeriesImage(string $eventSeriesImage)
    {
        $this->eventSeriesImage = $eventSeriesImage;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventStatus
     *
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * @param mixed $eventStatus
     * @return Event
     * @see $eventStatus
     *
     */
    public function setEventStatus($eventStatus)
    {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventStreet
     *
     */
    public function getEventStreet()
    {
        return $this->eventStreet;
    }

    /**
     * @param mixed $eventStreet
     * @return Event
     * @see $eventStreet
     *
     */
    public function setEventStreet($eventStreet)
    {
        $this->eventStreet = $eventStreet;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventTime
     *
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * @param mixed $eventTime
     * @return Event
     * @see $eventTime
     *
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventType
     *
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param mixed $eventType
     * @return Event
     * @see $eventType
     *
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventVenue
     *
     */
    public function getEventVenue()
    {
        return $this->eventVenue;
    }

    /**
     * @param mixed $eventVenue
     * @return Event
     * @see $eventVenue
     *
     */
    public function setEventVenue($eventVenue)
    {
        $this->eventVenue = $eventVenue;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventVenueGroupId
     *
     */
    public function getEventVenueGroupId()
    {
        return $this->eventVenueGroupId;
    }

    /**
     * @param mixed $eventVenueGroupId
     * @return Event
     * @see $eventVenueGroupId
     *
     */
    public function setEventVenueGroupId($eventVenueGroupId)
    {
        $this->eventVenueGroupId = $eventVenueGroupId;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventVenueId
     *
     */
    public function getEventVenueId()
    {
        return $this->eventVenueId;
    }

    /**
     * @param mixed $eventVenueId
     * @return Event
     * @see $eventVenueId
     *
     */
    public function setEventVenueId($eventVenueId)
    {
        $this->eventVenueId = $eventVenueId;
        return $this;
    }

    /**
     * @return mixed
     * @see $eventZip
     *
     */
    public function getEventZip()
    {
        return $this->eventZip;
    }

    /**
     * @param mixed $eventZip
     * @return Event
     * @see $eventZip
     *
     */
    public function setEventZip($eventZip)
    {
        $this->eventZip = $eventZip;
        return $this;
    }

    /**
     * @return mixed
     * @see $evoLink
     *
     */
    public function getEvoLink()
    {
        return $this->evoLink;
    }

    /**
     * @param mixed $evoLink
     * @return Event
     * @see $evoLink
     *
     */
    public function setEvoLink($evoLink)
    {
        $this->evoLink = $evoLink;
        return $this;
    }

    /**
     * @return mixed
     * @see $fanticketImage
     *
     */
    public function getFanticketImage()
    {
        return $this->fanticketImage;
    }

    /**
     * @param mixed $fanticketImage
     * @return Event
     * @see $fanticketImage
     *
     */
    public function setFanticketImage($fanticketImage)
    {
        $this->fanticketImage = $fanticketImage;
        return $this;
    }

    /**
     * @return mixed
     * @see $includedEventIDs
     *
     */
    public function getIncludedEventIDs()
    {
        return $this->includedEventIDs;
    }

    /**
     * @param mixed $includedEventIDs
     * @return Event
     * @see $includedEventIDs
     *
     */
    public function setIncludedEventIDs($includedEventIDs)
    {
        $this->includedEventIDs = $includedEventIDs;
        return $this;
    }

    /**
     * @return mixed
     * @see $linkEventUrl
     *
     */
    public function getLinkEventUrl()
    {
        return $this->linkEventUrl;
    }

    /**
     * @param mixed $linkEventUrl
     * @return Event
     * @see $linkEventUrl
     *
     */
    public function setLinkEventUrl($linkEventUrl)
    {
        $this->linkEventUrl = $linkEventUrl;
        return $this;
    }

    /**
     * @return mixed
     * @see $maxPrice
     *
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param mixed $maxPrice
     * @return Event
     * @see $maxPrice
     *
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return mixed
     * @see $minPrice
     *
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param mixed $minPrice
     * @return Event
     * @see $minPrice
     *
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * @return mixed
     * @see $numberOfEvents
     *
     */
    public function getNumberOfEvents()
    {
        return $this->numberOfEvents;
    }

    /**
     * @param mixed $numberOfEvents
     * @return Event
     * @see $numberOfEvents
     *
     */
    public function setNumberOfEvents($numberOfEvents)
    {
        $this->numberOfEvents = $numberOfEvents;
        return $this;
    }

    /**
     * @return mixed
     * @see $numberOfVenues
     *
     */
    public function getNumberOfVenues()
    {
        return $this->numberOfVenues;
    }

    /**
     * @param mixed $numberOfVenues
     * @return Event
     * @see $numberOfVenues
     *
     */
    public function setNumberOfVenues($numberOfVenues)
    {
        $this->numberOfVenues = $numberOfVenues;
        return $this;
    }

    /**
     * @return mixed
     * @see $onsaleDate
     *
     */
    public function getOnsaleDate()
    {
        return $this->onsaleDate;
    }

    /**
     * @param mixed $onsaleDate
     * @return Event
     * @see $onsaleDate
     *
     */
    public function setOnsaleDate($onsaleDate)
    {
        $this->onsaleDate = $onsaleDate;
        return $this;
    }

    /**
     * @return mixed
     * @see $onsaleTime
     *
     */
    public function getOnsaleTime()
    {
        return $this->onsaleTime;
    }

    /**
     * @param mixed $onsaleTime
     * @return Event
     * @see $onsaleTime
     *
     */
    public function setOnsaleTime($onsaleTime)
    {
        $this->onsaleTime = $onsaleTime;
        return $this;
    }

    /**
     * @return mixed
     * @see $overrideImage
     * @see getImage()
     *
     */
    public function getOverrideImage()
    {
        return $this->overrideImage;
    }

    /**
     * @param string $overrideImage
     * @return Event
     * @see $fanticketImage
     *
     */
    public function setOverrideImage(string $overrideImage)
    {
        $this->overrideImage = $overrideImage;
        return $this;
    }

    /**
     * @return array
     * @see $priceCategories
     *
     */
    public function getPriceCategories(): array
    {
        return $this->priceCategories;
    }

    /**
     * @param array $priceCategories
     * @return Event
     * @see $priceCategories
     *
     */
    public function setPriceCategories(array $priceCategories): Event
    {
        $this->priceCategories = $priceCategories;
        return $this;
    }

    /**
     * @return mixed
     * @see $promoterId
     *
     */
    public function getPromoterId()
    {
        return $this->promoterId;
    }

    /**
     * @param mixed $promoterId
     * @return Event
     * @see $promoterId
     *
     */
    public function setPromoterId($promoterId)
    {
        $this->promoterId = $promoterId;
        return $this;
    }

    /**
     * @return mixed
     * @see $onlyBookableInSP
     *
     */
    public function getOnlyBookableInSP()
    {
        return $this->onlyBookableInSP;
    }

    /**
     * @param mixed $onlyBookableInSP
     * @return Event
     * @see $onlyBookableInSP
     *
     */
    public function setOnlyBookableInSP($onlyBookableInSP)
    {
        $this->onlyBookableInSP = $onlyBookableInSP;
        return $this;
    }

    /**
     * @return mixed
     * @see $ticketStock
     *
     */
    public function getTicketStock()
    {
        return $this->ticketStock;
    }

    /**
     * @param mixed $ticketStock
     * @return Event
     * @see $ticketStock
     *
     */
    public function setTicketStock($ticketStock)
    {
        $this->ticketStock = $ticketStock;
        return $this;
    }

    /**
     * @return mixed
     * @see $ticketdirect
     *
     */
    public function getTicketdirect()
    {
        return $this->ticketdirect;
    }

    /**
     * @param mixed $ticketdirect
     * @return Event
     * @see $ticketdirect
     *
     */
    public function setTicketdirect($ticketdirect)
    {
        $this->ticketdirect = $ticketdirect;
        return $this;
    }

    /**
     * @return mixed
     * @see $willcall
     *
     */
    public function getWillcall()
    {
        return $this->willcall;
    }

    /**
     * @param mixed $willcall
     * @return Event
     * @see $willcall
     *
     */
    public function setWillcall($willcall)
    {
        $this->willcall = $willcall;
        return $this;
    }

    /**
     * @return mixed
     * @see $venueLatitude
     *
     */
    public function getVenueLatitude()
    {
        return $this->venueLatitude;
    }

    /**
     * @param mixed $venueLatitude
     * @return Event
     * @see $venueLatitude
     *
     */
    public function setVenueLatitude($venueLatitude)
    {
        $this->venueLatitude = $venueLatitude;
        return $this;
    }

    /**
     * @return mixed
     * @see $venueLongitude
     *
     */
    public function getVenueLongitude()
    {
        return $this->venueLongitude;
    }

    /**
     * @param mixed $venueLongitude
     * @return Event
     * @see $venueLongitude
     *
     */
    public function setVenueLongitude($venueLongitude)
    {
        $this->venueLongitude = $venueLongitude;
        return $this;
    }

    // Constructor

    /**
     * Event constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->processObject($object);
    }

    // Other functionality

    public function processObject($object)
    {
        $this->setArtistIds($object->artistIds);
        $this->setArtistNames($object->artistNames);
        $this->setDateRangeEnd($object->dateRangeEnd);
        $this->setDateRangeStart($object->dateRangeStart);
        $this->setDeliverable($object->deliverable);
        $this->setEventCity($object->eventCity);
        $this->setEventCityId($object->eventCityId);
        $this->setEventCountry($object->eventCountry);
        $this->setEventDate($object->eventDate);
        $this->setEventDateIso8601($object->eventDateIso8601);
        $this->setEventId($object->eventId);
        $this->setEventLink($object->eventLink);
        $this->setEventName($object->eventName);
        $this->setEventProvince($object->eventProvince);
        $this->setEventSearchText($object->eventSearchText);

        if($object->eventSeriesImage ?? false) {
            $this->setEventSeriesImage($object->eventSeriesImage);
        }

        $this->setEventStatus($object->eventStatus);
        $this->setEventStreet($object->eventStreet);
        $this->setEventTime($object->eventTime);
        $this->setEventType($object->eventType);
        $this->setEventVenue($object->eventVenue);
        $this->setEventVenueGroupId($object->eventVenueGroupId);
        $this->setEventVenueId($object->eventVenueId);
        $this->setEventZip($object->eventZip);
        $this->setEvoLink($object->evoLink);
        $this->setFanticketImage($object->fanticketImage);
        $this->setIncludedEventIDs($object->includedEventIDs);
        $this->setLinkEventUrl($object->linkEventUrl);
        $this->setMaxPrice($object->maxPrice);
        $this->setMinPrice($object->minPrice);
        $this->setNumberOfEvents($object->numberOfEvents);
        $this->setNumberOfVenues($object->numberOfVenues);
        $this->setOnsaleDate($object->onsaleDate);
        $this->setOnsaleTime($object->onsaleTime);

        if($object->overrideImage ?? false) {
            $this->setOverrideImage($object->overrideImage);
        }

        if($object->priceCategories ?? false) {
            $this->setPriceCategories(
                $this->processPriceCategories($object->priceCategories)
            );
        }

        $this->setPromoterId($object->promoterId);
        $this->setOnlyBookableInSP($object->onlyBookableInSP);
        $this->setTicketStock($object->ticketStock);
        $this->setTicketdirect($object->ticketdirect);
        $this->setWillcall($object->willcall);
        $this->setVenueLatitude($object->venueLatitude);
        $this->setVenueLongitude($object->venueLongitude);

    }

    /**
     * Returns an array of meta data elements
     *
     * Used to smart-convert the object into a dumb array
     *
     * @return array
     */
    public function getEventData(): array
    {
        $properties = get_object_vars($this);
        unset($properties['priceCategories']);

        // convert arrys
        foreach($properties as $key => $property) {
            if(is_array($property)) {
                $properties[$key] = implode(',', $property);
            }
        }

        return $properties;
    }

    /**
     * Attempts to load an image in a smart way.
     * This is the preferred way to load an event's image
     *
     * Firstly attempts to load overrideImage,
     * Then attempts to load from the parent object
     *
     * @see $overrideImage
     * @see $eventSeriesImage
     *
     * @param string $default
     * @return string
     */
    public function getImage(string $default = ''): string
    {
        if($this->getOverrideImage()) {
            $image = $this->getOverrideImage();
        } elseif($this->getEventSeriesImage()) {
            $image = $this->getEventSeriesImage();
        } else {
            $image = $default;
        }

        return $default;
    }

    /**
     * processes the priceCategories inside an Event into an array of priceCategory objects
     *
     * @param $feed_events
     * @return array
     */
    protected function processPriceCategories($feed_price_categories)
    {
        $processed_price_categories = [];

        foreach ($feed_price_categories as $price_category) {
            $processed_price_categories[] = new PriceCategory($price_category);
        }

        return $processed_price_categories;
    }

}
