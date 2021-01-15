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
 * @license MIT
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
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
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
     * @var null|array
     */
    protected $artistIds = [];

    /**
     * @var string|null
     */
    protected $artistNames;

    /**
     * @var string|null
     */
    protected $dateRangeEnd;

    /**
     * @var string|null
     */
    protected $dateRangeStart;

    /**
     * @var bool|null
     */
    protected $deliverable;

    /**
     * @var string|null
     */
    protected $eventCity;

    /**
     * @var int|null
     */
    protected $eventCityId;

    /**
     * @var string|null
     */
    protected $eventCountry;

    /**
     * @var string|null
     */
    protected $eventDate;

    /**
     * @var string|null
     */
    protected $eventDateIso8601;

    /**
     * @var int|null
     */
    protected $eventId;

    /**
     * @var string|null
     */
    protected $eventLink;

    /**
     * @var string|null
     */
    protected $eventName;

    /**
     * @var string|null
     */
    protected $eventProvince;

    /**
     * @var string|null
     */
    protected $eventSearchText;

    /**
     * @var EventSerie
     */
    protected $event_serie;

    /**
     * @var int|null
     */
    protected $eventStatus;

    /**
     * @var array|null
     */
    protected $eventStatusLookup;

    /**
     * @var string|null
     */
    protected $eventStreet;

    /**
     * @var string|null
     */
    protected $eventTime;

    /**
     * @var int|null
     */
    protected $eventType;

    /**
     * @var string|null
     */
    protected $eventVenue;

    /**
     * @var int|null
     */
    protected $eventVenueGroupId;

    /**
     * @var int|null
     */
    protected $eventVenueId;

    /**
     * @var string|null
     */
    protected $eventZip;

    /**
     * @var string|null
     */
    protected $evoLink;

    /**
     * @var string|null
     */
    protected $fanticketImage;

    /**
     * @var array|null
     */
    protected $includedEventIDs;

    /**
     * @var string|null
     */
    protected $linkEventUrl;

    /**
     * @var float|null
     */
    protected $maxPrice;

    /**
     * @var string|null
     * @see $maxPrice
     */
    protected $maxPriceFormatted;

    /**
     * @var float|null
     */
    protected $minPrice;

    /**
     * @var string|null
     * @see $maxPrice
     */
    protected $minPriceFormatted;

    /**
     * @var int|null
     */
    protected $numberOfEvents;

    /**
     * @var int|null
     */
    protected $numberOfVenues;

    /**
     * @var string|null
     */
    protected $onsaleDate;

    /**
     * @var string|null
     */
    protected $onsaleTime;

    /**
     * @var string|null
     */
    protected $overrideImage;

    /**
     * @var array Array of Floor9design\Eventim\PluginCore\Models\PriceCategory objects
     */
    protected $priceCategories = [];

    /**
     * @var int|null
     */
    protected $promoterId;

    /**
     * @var bool|null
     */
    protected $onlyBookableInSP;

    /**
     * @var int|null
     */
    protected $ticketStock;

    /**
     * @var bool|null
     */
    protected $ticketdirect;

    /**
     * @var bool|null
     */
    protected $willcall;

    /**
     * @var float|null
     */
    protected $venueLatitude;

    /**
     * @var float|null
     */
    protected $venueLongitude;

    // Accessors

    /**
     * @return array|null
     * @see $artistIds
     *
     */
    public function getArtistIds(): ?array
    {
        return $this->artistIds;
    }

    /**
     * @param array|null $artistIds
     * @return Event
     * @see $artistIds
     */
    public function setArtistIds(?array $artistIds): Event
    {
        $this->artistIds = $artistIds;
        return $this;
    }

    /**
     * @return string|null
     * @see $artistNames
     *
     */
    public function getArtistNames(): ?string
    {
        return $this->artistNames;
    }

    /**
     * @param string|null $artistNames
     * @return Event
     * @see $artistNames
     *
     */
    public function setArtistNames(?string $artistNames): Event
    {
        $this->artistNames = $artistNames;
        return $this;
    }

    /**
     * @return string|null
     * @see $dateRangeEnd
     *
     */
    public function getDateRangeEnd(): ?string
    {
        return $this->dateRangeEnd;
    }

    /**
     * @param string|null $dateRangeEnd
     * @return Event
     * @see $dateRangeEnd
     *
     */
    public function setDateRangeEnd($dateRangeEnd): Event
    {
        $this->dateRangeEnd = $dateRangeEnd;
        return $this;
    }

    /**
     * @return string|null
     * @see $dateRangeStart
     *
     */
    public function getDateRangeStart(): ?string
    {
        return $this->dateRangeStart;
    }

    /**
     * @param string|null $dateRangeStart
     * @return Event
     * @see $dateRangeStart
     *
     */
    public function setDateRangeStart(?string $dateRangeStart): Event
    {
        $this->dateRangeStart = $dateRangeStart;
        return $this;
    }

    /**
     * @return bool|null
     * @see $deliverable
     *
     */
    public function getDeliverable(): ?bool
    {
        return $this->deliverable;
    }

    /**
     * @param bool|null $deliverable
     * @return Event
     * @see $deliverable
     */
    public function setDeliverable(?bool $deliverable): Event
    {
        $this->deliverable = $deliverable;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventCity
     *
     */
    public function getEventCity(): ?string
    {
        return $this->eventCity;
    }

    /**
     * @param string|null $eventCity
     * @return Event
     * @see $eventCity
     */
    public function setEventCity(?string $eventCity): Event
    {
        $this->eventCity = $eventCity;
        return $this;
    }

    /**
     * @return int|null
     * @see $eventCityId
     *
     */
    public function getEventCityId(): ?int
    {
        return $this->eventCityId;
    }

    /**
     * @param int|null $eventCityId
     * @return Event
     * @see $eventCityId
     */
    public function setEventCityId(?int $eventCityId): Event
    {
        $this->eventCityId = $eventCityId;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventCountry
     *
     */
    public function getEventCountry(): ?string
    {
        return $this->eventCountry;
    }

    /**
     * @param string|null $eventCountry
     * @return Event
     * @see $eventCountry
     *
     */
    public function setEventCountry($eventCountry): Event
    {
        $this->eventCountry = $eventCountry;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventDate
     *
     */
    public function getEventDate(): ?string
    {
        return $this->eventDate;
    }

    /**
     * @param string|null $eventDate
     * @return Event
     * @see $eventDate
     */
    public function setEventDate(?string $eventDate): Event
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventDateIso8601
     *
     */
    public function getEventDateIso8601(): ?string
    {
        return $this->eventDateIso8601;
    }

    /**
     * @param string|null $eventDateIso8601
     * @return Event
     * @see $eventDateIso8601
     *
     */
    public function setEventDateIso8601($eventDateIso8601): Event
    {
        $this->eventDateIso8601 = $eventDateIso8601;
        return $this;
    }

    /**
     * @return int|null
     * @see $eventId
     *
     */
    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    /**
     * @param int|null $eventId
     * @return Event
     * @see $eventId
     */
    public function setEventId(?int $eventId): Event
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventLink
     *
     */
    public function getEventLink(): ?string
    {
        return $this->eventLink;
    }

    /**
     * @param string|null $eventLink
     * @return Event
     * @see $eventLink
     */
    public function setEventLink(?string $eventLink): Event
    {
        $this->eventLink = $eventLink;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventName
     *
     */
    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    /**
     * @param string|null $eventName
     * @return Event
     * @see $eventName
     */
    public function setEventName(?string $eventName): Event
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventProvince
     *
     */
    public function getEventProvince(): ?string
    {
        return $this->eventProvince;
    }

    /**
     * @param string|null $eventProvince
     * @return Event
     * @see $eventProvince
     */
    public function setEventProvince(?string $eventProvince): Event
    {
        $this->eventProvince = $eventProvince;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventSearchText
     *
     */
    public function getEventSearchText(): ?string
    {
        return $this->eventSearchText;
    }

    /**
     * @param string|null $eventSearchText
     * @return Event
     * @see $eventSearchText
     */
    public function setEventSearchText(?string $eventSearchText): Event
    {
        $this->eventSearchText = $eventSearchText;
        return $this;
    }

    /**
     * @return EventSerie|null
     * @see $event_serie
     *
     */
    public function getEventSerie(): ?EventSerie
    {
        return $this->event_serie;
    }

    /**
     * @param EventSerie|null $event_serie
     * @return Event
     * @see $eventSerie
     */
    public function setEventSerie(?EventSerie $event_serie): Event
    {
        $this->event_serie = $event_serie;
        return $this;
    }

    /**
     * @return int|null
     * @see $eventStatus
     *
     */
    public function getEventStatus(): ?int
    {
        return $this->eventStatus;
    }

    /**
     * @param int|null $eventStatus
     * @return Event
     * @see $eventStatus
     */
    public function setEventStatus(?int $eventStatus): Event
    {
        $this->eventStatus = $eventStatus;

        if($eventStatus) {
            $this->setEventStatusLookup(
                $this->eventStatusHumaniser($eventStatus)
            );
        }

        return $this;
    }

    /**
     * @return array|null
     * @see $eventStatusLookup
     *
     */
    public function getEventStatusLookup(): ?array
    {
        return $this->eventStatusLookup;
    }

    /**
     * @param array|null $eventStatusLookup
     * @return Event
     * @see $eventStatus
     */
    public function setEventStatusLookup(?array $eventStatusLookup): Event
    {
        $this->eventStatusLookup = $eventStatusLookup;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventStreet
     *
     */
    public function getEventStreet(): ?string
    {
        return $this->eventStreet;
    }

    /**
     * @param string|null $eventStreet
     * @return Event
     * @see $eventStreet
     */
    public function setEventStreet(?string $eventStreet): Event
    {
        $this->eventStreet = $eventStreet;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventTime
     *
     */
    public function getEventTime(): ?string
    {
        return $this->eventTime;
    }

    /**
     * @param string|null $eventTime
     * @return Event
     * @see $eventTime
     */
    public function setEventTime(?string $eventTime): Event
    {
        $this->eventTime = $eventTime;
        return $this;
    }

    /**
     * @return int|null
     * @see $eventType
     *
     */
    public function getEventType(): ?int
    {
        return $this->eventType;
    }

    /**
     * @param int|null $eventType
     * @return Event
     * @see $eventType
     */
    public function setEventType(?int $eventType): Event
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventVenue
     *
     */
    public function getEventVenue(): ?string
    {
        return $this->eventVenue;
    }

    /**
     * @param string|null $eventVenue
     * @return Event
     * @see $eventVenue
     */
    public function setEventVenue(?string $eventVenue): Event
    {
        $this->eventVenue = $eventVenue;
        return $this;
    }

    /**
     * @return int|null
     * @see $eventVenueGroupId
     *
     */
    public function getEventVenueGroupId(): ?int
    {
        return $this->eventVenueGroupId;
    }

    /**
     * @param int|null $eventVenueGroupId
     * @return Event
     * @see $eventVenueGroupId
     */
    public function setEventVenueGroupId(?int $eventVenueGroupId): Event
    {
        $this->eventVenueGroupId = $eventVenueGroupId;
        return $this;
    }

    /**
     * @return int|null
     * @see $eventVenueId
     *
     */
    public function getEventVenueId(): ?int
    {
        return $this->eventVenueId;
    }

    /**
     * @param int|null $eventVenueId
     * @return Event
     * @see $eventVenueId
     */
    public function setEventVenueId(?int $eventVenueId): Event
    {
        $this->eventVenueId = $eventVenueId;
        return $this;
    }

    /**
     * @return string|null
     * @see $eventZip
     *
     */
    public function getEventZip(): ?string
    {
        return $this->eventZip;
    }

    /**
     * @param string|null $eventZip
     * @return Event
     * @see $eventZip
     */
    public function setEventZip(?string $eventZip): Event
    {
        $this->eventZip = $eventZip;
        return $this;
    }

    /**
     * @return string|null
     * @see $evoLink
     *
     */
    public function getEvoLink(): ?string
    {
        return $this->evoLink;
    }

    /**
     * @param string|null $evoLink
     * @return Event
     * @see $evoLink
     */
    public function setEvoLink(?string $evoLink): Event
    {
        $this->evoLink = $evoLink;
        return $this;
    }

    /**
     * @return string|null
     * @see $fanticketImage
     *
     */
    public function getFanticketImage(): ?string
    {
        return $this->fanticketImage;
    }

    /**
     * @param string|null $fanticketImage
     * @return Event
     * @see $fanticketImage
     */
    public function setFanticketImage(?string $fanticketImage): Event
    {
        $this->fanticketImage = $fanticketImage;
        return $this;
    }

    /**
     * @return array|null
     * @see $includedEventIDs
     *
     */
    public function getIncludedEventIDs(): ?array
    {
        return $this->includedEventIDs;
    }

    /**
     * @param array|null $includedEventIDs
     * @return Event
     * @see $includedEventIDs
     */
    public function setIncludedEventIDs(?array $includedEventIDs): Event
    {
        $this->includedEventIDs = $includedEventIDs;
        return $this;
    }

    /**
     * @return string|null
     * @see $linkEventUrl
     *
     */
    public function getLinkEventUrl(): ?string
    {
        return $this->linkEventUrl;
    }

    /**
     * @param string|null $linkEventUrl
     * @return Event
     * @see $linkEventUrl
     */
    public function setLinkEventUrl(?string $linkEventUrl): Event
    {
        $this->linkEventUrl = $linkEventUrl;
        return $this;
    }

    /**
     * @return float|null
     * @see $maxPrice
     *
     */
    public function getMaxPrice(): ?float
    {
        return $this->maxPrice;
    }

    /**
     * @param float|null $maxPrice
     * @return Event
     * @see $maxPrice
     */
    public function setMaxPrice(?float $maxPrice): Event
    {
        $this->maxPrice = $maxPrice;

        if($maxPrice) {
            $this->setMaxPriceFormatted(
                $this->currencyConverter($maxPrice)
            );
        }

        return $this;
    }

    /**
     * @return string|null
     * @see $maxPriceFormatted
     *
     */
    public function getMaxPriceFormatted(): ?string
    {
        return $this->maxPriceFormatted;
    }

    /**
     * @param string|null $maxPriceFormatted
     * @return Event
     * @see $maxPriceFormatted
     */
    public function setMaxPriceFormatted(?string $maxPriceFormatted): Event
    {
        $this->maxPriceFormatted = $maxPriceFormatted;
        return $this;
    }

    /**
     * @return float|null
     * @see $minPrice
     *
     */
    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    /**
     * @param float|null $minPrice
     * @return Event
     * @see $minPrice
     */
    public function setMinPrice(?float $minPrice): Event
    {
        $this->minPrice = $minPrice;

        if($minPrice) {
            $this->setMinPriceFormatted(
                $this->currencyConverter($minPrice)
            );
        }

        return $this;
    }

    /**
     * @return string|null
     * @see $minPriceFormatted
     *
     */
    public function getMinPriceFormatted(): ?float
    {
        return $this->minPriceFormatted;
    }

    /**
     * @param string|null $minPriceFormatted
     * @return Event
     * @see $minPriceFormatted
     */
    public function setMinPriceFormatted(?string $minPriceFormatted): Event
    {
        $this->minPriceFormatted = $minPriceFormatted;
        return $this;
    }

    /**
     * @return int|null
     * @see $numberOfEvents
     *
     */
    public function getNumberOfEvents(): ?int
    {
        return $this->numberOfEvents;
    }

    /**
     * @param int|null $numberOfEvents
     * @return Event
     * @see $numberOfEvents
     */
    public function setNumberOfEvents(?int $numberOfEvents): Event
    {
        $this->numberOfEvents = $numberOfEvents;
        return $this;
    }

    /**
     * @return int|null
     * @see $numberOfVenues
     *
     */
    public function getNumberOfVenues(): ?int
    {
        return $this->numberOfVenues;
    }

    /**
     * @param int|null $numberOfVenues
     * @return Event
     * @see $numberOfVenues
     */
    public function setNumberOfVenues(?int $numberOfVenues): Event
    {
        $this->numberOfVenues = $numberOfVenues;
        return $this;
    }

    /**
     * @return string|null
     * @see $onsaleDate
     *
     */
    public function getOnsaleDate(): ?string
    {
        return $this->onsaleDate;
    }

    /**
     * @param string|null $onsaleDate
     * @return Event
     * @see $onsaleDate
     */
    public function setOnsaleDate(?string $onsaleDate): Event
    {
        $this->onsaleDate = $onsaleDate;
        return $this;
    }

    /**
     * @return string|null
     * @see $onsaleTime
     *
     */
    public function getOnsaleTime(): ?string
    {
        return $this->onsaleTime;
    }

    /**
     * @param string|null $onsaleTime
     * @return Event
     * @see $onsaleTime
     */
    public function setOnsaleTime(?string $onsaleTime): Event
    {
        $this->onsaleTime = $onsaleTime;
        return $this;
    }

    /**
     * @return string|null
     * @see $overrideImage
     * @see getImage()
     *
     */
    public function getOverrideImage(): ?string
    {
        return $this->overrideImage;
    }

    /**
     * @param string $overrideImage
     * @return Event
     * @see $fanticketImage
     *
     */
    public function setOverrideImage(?string $overrideImage): Event
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
     * @return int|null
     * @see $promoterId
     *
     */
    public function getPromoterId(): ?int
    {
        return $this->promoterId;
    }

    /**
     * @param int|null $promoterId
     * @return Event
     * @see $promoterId
     */
    public function setPromoterId(?int $promoterId): Event
    {
        $this->promoterId = $promoterId;
        return $this;
    }

    /**
     * @return bool|null
     * @see $onlyBookableInSP
     *
     */
    public function getOnlyBookableInSP(): ?bool
    {
        return $this->onlyBookableInSP;
    }

    /**
     * @param bool|null $onlyBookableInSP
     * @return Event
     * @see $onlyBookableInSP
     */
    public function setOnlyBookableInSP(?bool $onlyBookableInSP): Event
    {
        $this->onlyBookableInSP = $onlyBookableInSP;
        return $this;
    }

    /**
     * @return int|null
     * @see $ticketStock
     *
     */
    public function getTicketStock(): ?int
    {
        return $this->ticketStock;
    }

    /**
     * @param int|null $ticketStock
     * @return Event
     * @see $ticketStock
     */
    public function setTicketStock(?int $ticketStock): Event
    {
        $this->ticketStock = $ticketStock;
        return $this;
    }

    /**
     * @return bool|null
     * @see $ticketdirect
     *
     */
    public function getTicketdirect(): ?bool
    {
        return $this->ticketdirect;
    }

    /**
     * @param bool|null $ticketdirect
     * @return Event
     * @see $ticketdirect
     */
    public function setTicketdirect(?bool $ticketdirect): Event
    {
        $this->ticketdirect = $ticketdirect;
        return $this;
    }

    /**
     * @return bool|null
     * @see $willcall
     *
     */
    public function getWillcall(): ?bool
    {
        return $this->willcall;
    }

    /**
     * @param bool|null $willcall
     * @return Event
     * @see $willcall
     */
    public function setWillcall(?bool $willcall): Event
    {
        $this->willcall = $willcall;
        return $this;
    }

    /**
     * @return float|null
     * @see $venueLatitude
     *
     */
    public function getVenueLatitude(): ?float
    {
        return $this->venueLatitude;
    }

    /**
     * @param float|null $venueLatitude
     * @return Event
     * @see $venueLatitude
     */
    public function setVenueLatitude(?float $venueLatitude): Event
    {
        $this->venueLatitude = $venueLatitude;
        return $this;
    }

    /**
     * @return float|null
     * @see $venueLongitude
     *
     */
    public function getVenueLongitude(): ?float
    {
        return $this->venueLongitude;
    }

    /**
     * @param float|null $venueLongitude
     * @return Event
     * @see $venueLongitude
     */
    public function setVenueLongitude(?float $venueLongitude): Event
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

    // Advanced accessors

    /**
     * Note; the child object uses the term "picture" and "image" at different points.
     * This is standardised to "image" in this class
     *
     * @return null|string
     * @see $event_series
     * @see getEventSerie()
     * @see EventSerie::getEsPicture()
     *
     */
    public function getEventSerieImage()
    {
        $response = null;

        if (
            $this->getEventSerie() &&
            $this->getEventSerie()->getEsPicture()
        ) {
            $response = $this->getEventSerie()->getEsPicture();
        }

        return $response;
    }

    // Other functionality

    /**
     * Sets up the class from a json_decoded object of the feed
     *
     * @param $object \stdClass json_decode() object
     */
    public function processObject($object)
    {
        $this->setArtistIds($object->artistIds ?? null);
        $this->setArtistNames($object->artistNames ?? null);
        $this->setDateRangeEnd($object->dateRangeEnd ?? null);
        $this->setDateRangeStart($object->dateRangeStart ?? null);
        $this->setDeliverable($object->deliverable ?? null);
        $this->setEventCity($object->eventCity ?? null);
        $this->setEventCityId($object->eventCityId ?? null);
        $this->setEventCountry($object->eventCountry ?? null);
        $this->setEventDate($object->eventDate ?? null);
        $this->setEventDateIso8601($object->eventDateIso8601 ?? null);
        $this->setEventId($object->eventId ?? null);
        $this->setEventLink($object->eventLink ?? null);
        $this->setEventName($object->eventName ?? null);
        $this->setEventProvince($object->eventProvince ?? null);
        $this->setEventSearchText($object->eventSearchText ?? null);
        $this->setEventStatus($object->eventStatus ?? null);
        $this->setEventStreet($object->eventStreet ?? null);
        $this->setEventTime($object->eventTime ?? null);
        $this->setEventType($object->eventType ?? null);
        $this->setEventVenue($object->eventVenue ?? null);
        $this->setEventVenueGroupId($object->eventVenueGroupId ?? null);
        $this->setEventVenueId($object->eventVenueId ?? null);
        $this->setEventZip($object->eventZip ?? null);
        $this->setEvoLink($object->evoLink ?? null);
        $this->setFanticketImage($object->fanticketImage ?? null);
        $this->setIncludedEventIDs($object->includedEventIDs ?? null);
        $this->setLinkEventUrl($object->linkEventUrl ?? null);
        $this->setMaxPrice($object->maxPrice ?? null);
        $this->setMinPrice($object->minPrice ?? null);
        $this->setNumberOfEvents($object->numberOfEvents ?? null);
        $this->setNumberOfVenues($object->numberOfVenues ?? null);
        $this->setOnsaleDate($object->onsaleDate ?? null);
        $this->setOnsaleTime($object->onsaleTime ?? null);
        $this->setOverrideImage($object->overrideImage ?? null);
        $this->setPromoterId($object->promoterId ?? null);
        $this->setOnlyBookableInSP($object->onlyBookableInSP ?? null);
        $this->setTicketStock($object->ticketStock ?? null);
        $this->setTicketdirect($object->ticketdirect ?? null);
        $this->setWillcall($object->willcall ?? null);
        $this->setVenueLatitude($object->venueLatitude ?? null);
        $this->setVenueLongitude($object->venueLongitude ?? null);

        // relationships objects:
        if ($object->priceCategories ?? false) {
            $this->setPriceCategories(
                $this->processPriceCategories($object->priceCategories)
            );
        }

        if ($object->eventSerie ?? false) {
            $this->setEventSerie($object->eventSerie);
        }
    }

    /**
     * Returns an array of meta data elements
     *
     * Used to smart-convert the object into a dumb array; useful for views/templates
     *
     * @return array
     */
    public function getEventData(): array
    {
        $properties = get_object_vars($this);
        unset($properties['priceCategories']);

        // convert arrays
        foreach ($properties as $key => $property) {
            if (is_array($property)) {
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
     * @param string $default
     * @return string
     * @see $overrideImage
     * @see $eventSeriesImage
     *
     */
    public function getImage(string $default = ''): string
    {
        if ($this->getOverrideImage()) {
            $image = $this->getOverrideImage();
        } elseif (
            $this->getEventSerie() &&
            $this->getEventSerie()->getEsPicture()
        ) {
            $image = $this->getEventSerie()->getEsPicture();
        } else {
            $image = $default;
        }

        return $image;
    }

    /**
     * Turns the event Status into a "human" response
     * eg: "Unavailable"
     *
     * @param int $event_status
     * @return string[]
     */
    public function eventStatusHumaniser(int $event_status): array
    {
        $response = [
            'short' => '',
            'long' => '',
            'verbose' => '',
            'event_buyable' => false
        ];

        switch ($event_status) {
            case "0":
                // UNKNOWN
                break;
            case "1":
                $response = [
                    'short' => 'Cancelled',
                    'long' => 'This event has been cancelled',
                    'verbose' => 'Event has been set to a status Cancelled in the inventory system',
                    'event_buyable' => false
                ];
                break;
            case "2":
                $response = [
                    'short' => 'Available',
                    'long' => 'Tickets available',
                    'verbose' => 'Event is available and tickets can be purchased',
                    'event_buyable' => true
                ];
                break;
            case "3":
                $response = [
                    'short' => 'Not available',
                    'long' => 'Tickets are not available',
                    'verbose' => 'Event is available, but there are no available delivery methods anymore, thus is cannot be purchased',
                    'event_buyable' => false
                ];
                break;
            case "4":
                $response = [
                    'short' => 'Sold out',
                    'long' => 'This event is sold out',
                    'verbose' => 'Even has been set to a status Sold out in the inventory system, not additional tickets will be available',
                    'event_buyable' => false
                ];
                break;
            case "6":
                // NO_AMOUNT - Currently there are no more tickets available for sale, this might change if there is an additional inventory enabled
                $response = [
                    'short' => 'Not available',
                    'long' => 'There are no more tickets available for sale',
                    'verbose' => 'Currently there are no more tickets available for sale, this might change if there is an additional inventory enabled',
                    'event_buyable' => false
                ];
                break;
            case "7":
                $response = [
                    'short' => 'Not available',
                    'long' => 'This event is not on sale yet',
                    'verbose' => 'Event is available, but not on sale yet',
                    'event_buyable' => false
                ];
                break;
            case "8":
                $response = [
                    'short' => 'Not available',
                    'long' => 'This event is no longer available',
                    'verbose' => 'This event takes place soon, and tickets are no longer available',
                    'event_buyable' => false
                ];
                break;
            case "14":
                $response = [
                    'short' => 'Member Club',
                    'long' => 'This event is only available for Member Club sales',
                    'verbose' => 'Event is only available for Member Club sales (CH)',
                    'event_buyable' => false
                ];
                break;
            case "16":
                $response = [
                    'short' => 'Postponed',
                    'long' => 'This event has been postponed',
                    'verbose' => 'Event has been postponed, additional information has been sent to the customers / published on the page. eventDate and eventTime fields contain the new event date.',
                    'event_buyable' => false
                ];
                break;
        }

        return $response;
    }

    /**
     * processes the priceCategories inside an Event into an array of priceCategory objects
     *
     * @param $feed_price_categories
     * @return array
     */
    protected function processPriceCategories($feed_price_categories): array
    {
        $processed_price_categories = [];

        foreach ($feed_price_categories as $price_category) {
            $processed_price_categories[] = new PriceCategory($price_category);
        }

        return $processed_price_categories;
    }

    /**
     * Formats a number into a currency string: eg: 5,200.20
     *
     * @param float $unformatted
     * @return string
     */
    public function currencyConverter(float $unformatted): string
    {
        return number_format($unformatted, 2, '.', ',');
    }
}
