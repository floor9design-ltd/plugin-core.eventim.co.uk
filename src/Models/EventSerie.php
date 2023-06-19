<?php
/**
 * EventSerie.php
 *
 * EventSerie class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Models
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\Eventim\PluginCore\Models;

/**
 * Class EventSerie
 *
 * Models the EventSerie collection
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @see       \Floor9design\Eventim\PluginCore\Models\EventFeed
 * @since     File available since Release 1.0
 */
class EventSerie
{
    // Properties

    /**
     * @var array array of Artist objects
     */
    protected $artists = [];

    /**
     * @var string|null
     */
    protected $artistRating;

    /**
     * @var string|null MySQL date
     */
    protected $esBegin;

    /**
     * @var array Array of EsCategory objects
     */
    protected $esCategories;

    /**
     * @var string|null MySQL date
     */
    protected $esEnd;

    /**
     * @var int|null
     */
    protected $esId;

    /**
     * @var string|null
     */
    protected $esInfo;

    /**
     * @var string|null
     */
    protected $esLink;

    /**
     * @var string|null
     */
    protected $esName;

    /**
     * @var string|null
     */
    protected $esPicture;

    /**
     * @var string|null
     */
    protected $esPictureBig;

    /**
     * @var string|null
     */
    protected $esPictureSmall;

    /**
     * @var string|null
     */
    protected $esText;

    /**
     * @var int|null
     */
    protected $esTopTen;

    /**
     * @var array
     */
    protected $events = [];

    /**
     * @var string|null
     */
    protected $evoLink;

    /**
     * @var bool
     */
    protected $fanticket;

    /**
     * @var string|null
     */
    protected $fanticketImage;

    /**
     * @var float|null
     */
    protected $maxPrice;

    /**
     * @var float|null
     */
    protected $minPrice;

    /**
     * @var int
     */
    protected $ranking;

    /**
     * @var string|null
     */
    protected $searchText;

    // Accessors

    /**
     * @return array
     * @see $artists
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    /**
     * @param array $artists
     * @return EventSerie
     * @see $artists
     *
     */
    public function setArtists(array $artists): EventSerie
    {
        $this->artists = $artists;
        return $this;
    }

    /**
     * @return string|null
     * @see $artistRating
     */
    public function getArtistRating(): ?string
    {
        return $this->artistRating;
    }

    /**
     * @param string|null $artistRating
     * @return EventSerie
     * @see $artistRating
     */
    public function setArtistRating(?string $artistRating): EventSerie
    {
        $this->artistRating = $artistRating;
        return $this;
    }

    /**
     * @return string|null
     * @see $esBegin
     */
    public function getEsBegin(): ?string
    {
        return $this->esBegin;
    }

    /**
     * @param string|null $esBegin
     * @return EventSerie
     * @see $esBegin
     *
     */
    public function setEsBegin(?string $esBegin): EventSerie
    {
        $this->esBegin = $esBegin;
        return $this;
    }

    /**
     * @return array
     * @see $esCategories
     *
     */
    public function getEsCategories(): array
    {
        return $this->esCategories;
    }

    /**
     * @param array $esCategories
     * @return EventSerie
     * @see $esCategories
     */
    public function setEsCategories(array $esCategories): EventSerie
    {
        $this->esCategories = $esCategories;
        return $this;
    }

    /**
     * @return string|null
     * @see $esEnd
     *
     */
    public function getEsEnd(): ?string
    {
        return $this->esEnd;
    }

    /**
     * @param string|null $esEnd
     * @return EventSerie
     * @see $esEnd
     */
    public function setEsEnd(?string $esEnd): EventSerie
    {
        $this->esEnd = $esEnd;
        return $this;
    }

    /**
     * @return int|null
     * @see $esId
     *
     */
    public function getEsId(): ?int
    {
        return $this->esId;
    }

    /**
     * @param int|null $esId
     * @return EventSerie
     * @see $esId
     *
     */
    public function setEsId(?int $esId): EventSerie
    {
        $this->esId = $esId;
        return $this;
    }

    /**
     * @return string|null
     * @see $esInfo
     *
     */
    public function getEsInfo(): ?string
    {
        return $this->esInfo;
    }

    /**
     * @param string|null $esInfo
     * @return EventSerie
     * @see $esInfo
     *
     */
    public function setEsInfo(?string $esInfo): EventSerie
    {
        $this->esInfo = $esInfo;
        return $this;
    }

    /**
     * @return string|null
     * @see $esLink
     */
    public function getEsLink(): ?string
    {
        return $this->esLink;
    }

    /**
     * @param string|null $esLink
     * @return EventSerie
     * @see $esLink
     */
    public function setEsLink(?string $esLink): EventSerie
    {
        $this->esLink = $esLink;
        return $this;
    }

    /**
     * @return string|null
     * @see $esName
     *
     */
    public function getEsName(): ?string
    {
        return $this->esName;
    }

    /**
     * @param string|null $esName
     * @return EventSerie
     * @see $esName
     *
     */
    public function setEsName(?string $esName): EventSerie
    {
        $this->esName = $esName;
        return $this;
    }

    /**
     * @return string|null
     * @see $esPicture
     *
     */
    public function getEsPicture(): ?string
    {
        return $this->esPicture;
    }

    /**
     * @param string|null $esPicture
     * @return EventSerie
     * @see $esPicture
     *
     */
    public function setEsPicture(?string $esPicture): EventSerie
    {
        $this->esPicture = $esPicture;
        return $this;
    }

    /**
     * @return string|null
     * @see $esPictureBig
     *
     */
    public function getEsPictureBig(): ?string
    {
        return $this->esPictureBig;
    }

    /**
     * @param string|null $esPictureBig
     * @return EventSerie
     * @see $esPictureBig
     */
    public function setEsPictureBig(?string $esPictureBig): EventSerie
    {
        $this->esPictureBig = $esPictureBig;
        return $this;
    }

    /**
     * @return string|null
     * @see $esPictureSmall
     *
     */
    public function getEsPictureSmall(): ?string
    {
        return $this->esPictureSmall;
    }

    /**
     * @param string|null $esPictureSmall
     * @return EventSerie
     * @see $esPictureSmall
     *
     */
    public function setEsPictureSmall(?string $esPictureSmall): EventSerie
    {
        $this->esPictureSmall = $esPictureSmall;
        return $this;
    }

    /**
     * @return string|null
     * @see $esText
     *
     */
    public function getEsText(): ?string
    {
        return $this->esText;
    }

    /**
     * @param string|null $esText
     * @return EventSerie
     * @see $esText
     */
    public function setEsText(?string $esText): EventSerie
    {
        $this->esText = $esText;
        return $this;
    }

    /**
     * @return int|null
     * @see $esTopTen
     */
    public function getEsTopTen(): ?int
    {
        return $this->esTopTen;
    }

    /**
     * @param int|null $esTopTen
     * @return EventSerie
     * @see $esTopTen
     */
    public function setEsTopTen(?int $esTopTen): EventSerie
    {
        $this->esTopTen = $esTopTen;
        return $this;
    }

    /**
     * @return array
     * @see $events
     *
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param array $events
     * @return EventSerie
     * @see $events
     *
     */
    public function setEvents(array $events): EventSerie
    {
        $this->events = $events;
        return $this;
    }

    /**
     * @return string|null
     * @see $evoLink
     */
    public function getEvoLink(): ?string
    {
        return $this->evoLink;
    }

    /**
     * @param mixed $evoLink
     * @return EventSerie
     * @see $evoLink
     */
    public function setEvoLink($evoLink): EventSerie
    {
        $this->evoLink = $evoLink;
        return $this;
    }

    /**
     * @return bool|null
     * @see $fanticket
     */
    public function getFanticket(): ?bool
    {
        return $this->fanticket;
    }

    /**
     * @param bool|null $fanticket
     * @return EventSerie
     * @see $fanticket
     */
    public function setFanticket(?bool $fanticket): EventSerie
    {
        $this->fanticket = $fanticket;
        return $this;
    }

    /**
     * @return string|null
     * @see $fanticketImage
     */
    public function getFanticketImage(): ?string
    {
        return $this->fanticketImage;
    }

    /**
     * @param string|null $fanticketImage
     * @return EventSerie
     * @see $fanticketImage
     */
    public function setFanticketImage(?string $fanticketImage): EventSerie
    {
        $this->fanticketImage = $fanticketImage;
        return $this;
    }

    /**
     * @return string|null
     * @see $maxPrice
     */
    public function getMaxPrice(): ?string
    {
        return $this->maxPrice;
    }

    /**
     * @param string|null $maxPrice
     * @return EventSerie
     * @see $maxPrice
     *
     */
    public function setMaxPrice(?string $maxPrice): EventSerie
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return string|null
     * @see $minPrice
     *
     */
    public function getMinPrice(): ?string
    {
        return $this->minPrice;
    }

    /**
     * @param string|null $minPrice
     * @return EventSerie
     * @see $minPrice
     */
    public function setMinPrice(?string $minPrice): EventSerie
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * @return int|null
     * @see $ranking
     */
    public function getRanking(): ?int
    {
        return $this->ranking;
    }

    /**
     * @param int|null $ranking
     * @return EventSerie
     * @see $ranking
     */
    public function setRanking(?int $ranking): EventSerie
    {
        $this->ranking = $ranking;
        return $this;
    }

    /**
     * @return string|null
     * @see $searchText
     *
     */
    public function getSearchText(): ?string
    {
        return $this->searchText;
    }

    /**
     * @param string|null $searchText
     * @return EventSerie
     * @see $searchText
     */
    public function setSearchText(?string $searchText): EventSerie
    {
        $this->searchText = $searchText;
        return $this;
    }

    // Constructor

    /**
     * EventSerie constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->processObject($object);
    }

    // Other functionality

    /**
     * @param $object
     */
    public function processObject($object)
    {
        if ($object->artists ?? null) {
            $this->setArtists(
                $this->processArtists($object->artists)
            );
        }

        $this->setArtistRating($object->artistRating ?? null);
        $this->setEsBegin($object->esBegin ?? null);

        if ($object->esCategories ?? null) {
            $this->setEsCategories(
                $this->processEsCategories($object->esCategories)
            );
        }

        $this->SetEsEnd($object->esEnd ?? null);
        $this->setEsId($object->esId ?? null);
        $this->setEsInfo($object->esInfo ?? null);
        $this->setEsLink($object->esLink ?? null);
        $this->setEsName($object->esName ?? null);
        $this->setEsPicture($object->esPicture ?? null);
        $this->setEsPictureBig($object->esPictureBig ?? null);
        $this->setEsPictureSmall($object->esPictureSmall ?? null);
        $this->setEsText($object->esText ?? null);
        $this->setEsTopTen($object->esTopTen ?? null);

        if ($object->events ?? null) {
            $this->setEvents(
                $this->processEvents($object->events)
            );
        }

        $this->setEvoLink($object->evoLink ?? null);
        $this->setFanticket($object->fanticket ?? null);
        $this->setFanticketImage($object->fanticketImage ?? null);
        $this->setMaxPrice($object->maxPrice ?? null);
        $this->setMinPrice($object->minPrice ?? null);
        $this->setRanking($object->ranking ?? null);
        $this->setSearchText($object->searchText ?? null);
    }

    /**
     * @return array
     */
    public function getPostMetaData(): array
    {
        $properties = get_object_vars($this);

        // don't process the children : they're dealt with elsewhere
        unset($properties['artists']);
        unset($properties['esCategories']);
        unset($properties['events']);;

        return $properties;
    }

    /**
     * processes the artists inside an EventSerie into an array of Artist objects
     *
     * @param $feed_artists
     * @return array
     */
    protected function processArtists($feed_artists): array
    {
        $processed_artists = [];

        foreach ($feed_artists as $artist) {
            $processed_artists[] = new Artist($artist);
        }

        return $processed_artists;
    }

    /**
     * processes the esCategories inside an EventSerie into an array of esCategory objects
     *
     * @param $feed_es_categories
     * @return array
     */
    protected function processEsCategories($feed_es_categories): array
    {
        $processed_es_categories = [];

        foreach ($feed_es_categories as $es_category) {
            $processed_es_categories[] = new EsCategory($es_category);
        }

        return $processed_es_categories;
    }

    /**
     * processes the events inside an EventSerie into an array of Event objects
     *
     * @param $feed_events
     * @return array
     */
    protected function processEvents($feed_events): array
    {
        $processed_events = [];

        foreach ($feed_events as $event) {
            $processed_events[] = new Event($event);
        }

        return $processed_events;
    }
}
