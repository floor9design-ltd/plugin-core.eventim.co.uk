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
 * @license   Private software
 * @version   1.0
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
 * @license   Private software
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @see       \Floor9design\Eventim\PluginCore\Models\EventFeed
 * @since     File available since Release 1.0
 */
class EventSerie
{
    // Properties

    protected $artists = [];

    protected $artistRating;

    protected $esBegin;

    protected $esCategories;

    protected $esEnd;

    protected $esId;

    protected $esInfo;

    protected $esLink;

    protected $esName;

    protected $esPicture;

    protected $esPictureBig;

    protected $esPictureSmall;

    protected $esText;

    protected $esTopTen;

    protected $events = [];

    protected $evoLink;

    protected $fanticket;

    protected $fanticketImage;

    protected $maxPrice;

    protected $minPrice;

    protected $ranking;

    protected $searchText;

    // Accessors

    /**
     * @return array
     * @see $artists
     *
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
     * @return mixed
     * @see $artistRating
     *
     */
    public function getArtistRating()
    {
        return $this->artistRating;
    }

    /**
     * @param mixed $artistRating
     * @return EventSerie
     * @see $artistRating
     *
     */
    public function setArtistRating($artistRating)
    {
        $this->artistRating = $artistRating;
        return $this;
    }

    /**
     * @return mixed
     * @see $esBegin
     *
     */
    public function getEsBegin()
    {
        return $this->esBegin;
    }

    /**
     * @param mixed $esBegin
     * @return EventSerie
     * @see $esBegin
     *
     */
    public function setEsBegin($esBegin)
    {
        $this->esBegin = $esBegin;
        return $this;
    }

    /**
     * @return mixed
     * @see $esCategories
     *
     */
    public function getEsCategories()
    {
        return $this->esCategories;
    }

    /**
     * @param mixed $esCategories
     * @return EventSerie
     * @see $esCategories
     *
     */
    public function setEsCategories($esCategories)
    {
        $this->esCategories = $esCategories;
        return $this;
    }

    /**
     * @return mixed
     * @see $esEnd
     *
     */
    public function getEsEnd()
    {
        return $this->esEnd;
    }

    /**
     * @param mixed $esEnd
     * @return EventSerie
     * @see $esEnd
     *
     */
    public function setEsEnd($esEnd)
    {
        $this->esEnd = $esEnd;
        return $this;
    }

    /**
     * @return mixed
     * @see $esId
     *
     */
    public function getEsId()
    {
        return $this->esId;
    }

    /**
     * @param mixed $esId
     * @return EventSerie
     * @see $esId
     *
     */
    public function setEsId($esId)
    {
        $this->esId = $esId;
        return $this;
    }

    /**
     * @return mixed
     * @see $esInfo
     *
     */
    public function getEsInfo()
    {
        return $this->esInfo;
    }

    /**
     * @param mixed $esInfo
     * @return EventSerie
     * @see $esInfo
     *
     */
    public function setEsInfo($esInfo)
    {
        $this->esInfo = $esInfo;
        return $this;
    }

    /**
     * @return mixed
     * @see $esLink
     *
     */
    public function getEsLink()
    {
        return $this->esLink;
    }

    /**
     * @param mixed $esLink
     * @return EventSerie
     * @see $esLink
     *
     */
    public function setEsLink($esLink)
    {
        $this->esLink = $esLink;
        return $this;
    }

    /**
     * @return mixed
     * @see $esName
     *
     */
    public function getEsName()
    {
        return $this->esName;
    }

    /**
     * @param mixed $esName
     * @return EventSerie
     * @see $esName
     *
     */
    public function setEsName($esName)
    {
        $this->esName = $esName;
        return $this;
    }

    /**
     * @return mixed
     * @see $esPicture
     *
     */
    public function getEsPicture()
    {
        return $this->esPicture;
    }

    /**
     * @param mixed $esPicture
     * @return EventSerie
     * @see $esPicture
     *
     */
    public function setEsPicture($esPicture)
    {
        $this->esPicture = $esPicture;
        return $this;
    }

    /**
     * @return mixed
     * @see $esPictureBig
     *
     */
    public function getEsPictureBig()
    {
        return $this->esPictureBig;
    }

    /**
     * @param mixed $esPictureBig
     * @return EventSerie
     * @see $esPictureBig
     *
     */
    public function setEsPictureBig($esPictureBig)
    {
        $this->esPictureBig = $esPictureBig;
        return $this;
    }

    /**
     * @return mixed
     * @see $esPictureSmall
     *
     */
    public function getEsPictureSmall()
    {
        return $this->esPictureSmall;
    }

    /**
     * @param mixed $esPictureSmall
     * @return EventSerie
     * @see $esPictureSmall
     *
     */
    public function setEsPictureSmall($esPictureSmall)
    {
        $this->esPictureSmall = $esPictureSmall;
        return $this;
    }

    /**
     * @return mixed
     * @see $esText
     *
     */
    public function getEsText()
    {
        return $this->esText;
    }

    /**
     * @param mixed $esText
     * @return EventSerie
     * @see $esText
     *
     */
    public function setEsText($esText)
    {
        $this->esText = $esText;
        return $this;
    }

    /**
     * @return mixed
     * @see $esTopTen
     *
     */
    public function getEsTopTen()
    {
        return $this->esTopTen;
    }

    /**
     * @param mixed $esTopTen
     * @return EventSerie
     * @see $esTopTen
     *
     */
    public function setEsTopTen($esTopTen)
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
     * @return EventSerie
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
     * @see $fanticket
     *
     */
    public function getFanticket()
    {
        return $this->fanticket;
    }

    /**
     * @param mixed $fanticket
     * @return EventSerie
     * @see $fanticket
     *
     */
    public function setFanticket($fanticket)
    {
        $this->fanticket = $fanticket;
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
     * @return EventSerie
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
     * @see $maxPrice
     *
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param mixed $maxPrice
     * @return EventSerie
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
     * @return EventSerie
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
     * @see $ranking
     *
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * @param mixed $ranking
     * @return EventSerie
     * @see $ranking
     *
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    /**
     * @return mixed
     * @see $searchText
     *
     */
    public function getSearchText()
    {
        return $this->searchText;
    }

    /**
     * @param mixed $searchText
     * @return EventSerie
     * @see $searchText
     *
     */
    public function setSearchText($searchText)
    {
        $this->searchText = $searchText;
        return $this;
    }

    // Constructor

    public function __construct($object)
    {
        $this->processObject($object);
    }

    // Other functionality

    public function processObject($object)
    {
        $this->setArtists(
            $this->processArtists($object->artists)
        );

        $this->setArtistRating($object->artistRating);
        $this->setEsBegin($object->esBegin);
        $this->setEsCategories(
            $this->processEsCategories($object->esCategories)
        );
        $this->SetEsEnd($object->esEnd);
        $this->setEsId($object->esId);
        $this->setEsInfo($object->esInfo);
        $this->setEsLink($object->esLink);
        $this->setEsName($object->esName);
        $this->setEsPicture($object->esPicture);
        $this->setEsPictureBig($object->esPictureBig);
        $this->setEsPictureSmall($object->esPictureSmall);
        $this->setEsText($object->esText);
        $this->setEsTopTen($object->esTopTen);

        $this->setEvents(
            $this->processEvents($object->events)
        );

        $this->setEvoLink($object->evoLink);
        $this->setFanticket($object->fanticket);
        $this->setFanticketImage($object->fanticketImage);
        $this->setMaxPrice($object->maxPrice);
        $this->setMinPrice($object->minPrice);
        $this->setRanking($object->ranking);
        $this->setSearchText($object->searchText);
    }

    public function getPostMetaData()
    {
        $properties = get_object_vars($this);

        // don't process the children : they're dealt with elsewhere
        unset($properties['artists']);
        unset($properties['esCategories']);
        unset($properties['events']);;

        // convert arrays
        foreach($properties as $key => $property) {
            if(is_array($property)) {
                $properties[$key] = implode(',', $property);
            }
        }

        return $properties;
    }

    /**
     * processes the artists inside an EventSerie into an array of Artist objects
     *
     * @param $feed_artists
     * @return array
     */
    protected function processArtists($feed_artists)
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
    protected function processEsCategories($feed_es_categories)
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
    protected function processEvents($feed_events)
    {
        $processed_events = [];

        foreach ($feed_events as $event) {
            $processed_events[] = new Event($event);
        }

        return $processed_events;
    }
}
