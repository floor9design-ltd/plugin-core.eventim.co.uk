<?php
/**
 * Artist.php
 *
 * Artist class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Artistim\PluginCore\Models
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
 * Class Artist
 *
 * Models the Artist collection
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
class Artist
{
    // Properties

    /**
     * @var
     */
    protected $artistId;

    /**
     * @var
     */
    protected $artistName;

    /**
     * @var
     */
    protected $extArtistId;

    /**
     * @var
     */
    protected $extArtistId2;

    /**
     * @var
     */
    protected $extArtistId3;

    /**
     * @var
     */
    protected $evoLink;

    // Accessors

    /**
     * @return mixed
     * @see $artistId
     *
     */
    public function getArtistId()
    {
        return $this->artistId;
    }

    /**
     * @param mixed $artistId
     * @return Artist
     * @see $artistId
     *
     */
    public function setArtistId($artistId): Artist
    {
        $this->artistId = $artistId;
        return $this;
    }

    /**
     * @return mixed
     * @see $artistName
     *
     */
    public function getArtistName()
    {
        return $this->artistName;
    }

    /**
     * @param mixed $artistName
     * @return Artist
     * @see $artistName
     *
     */
    public function setArtistName($artistName): Artist
    {
        $this->artistName = $artistName;
        return $this;
    }

    /**
     * @return mixed
     * @see $extArtistId
     *
     */
    public function getExtArtistId()
    {
        return $this->extArtistId;
    }

    /**
     * @param mixed $extArtistId
     * @return Artist
     * @see $extArtistId
     *
     */
    public function setExtArtistId($extArtistId): Artist
    {
        $this->extArtistId = $extArtistId;
        return $this;
    }

    /**
     * @return mixed
     * @see $extArtistId2
     *
     */
    public function getExtArtistId2()
    {
        return $this->extArtistId2;
    }

    /**
     * @param mixed $extArtistId2
     * @return Artist
     * @see $extArtistId2
     *
     */
    public function setExtArtistId2($extArtistId2): Artist
    {
        $this->extArtistId2 = $extArtistId2;
        return $this;
    }

    /**
     * @return mixed
     * @see $extArtistId3
     *
     */
    public function getExtArtistId3()
    {
        return $this->extArtistId3;
    }

    /**
     * @param mixed $extArtistId3
     * @return Artist
     * @see $extArtistId3
     *
     */
    public function setExtArtistId3($extArtistId3): Artist
    {
        $this->extArtistId3 = $extArtistId3;
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
     * @return Artist
     * @see $evoLink
     *
     */
    public function setEvoLink($evoLink): Artist
    {
        $this->evoLink = $evoLink;
        return $this;
    }

    // Constructor

    /**
     * Artist constructor.
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
    public function processObject($object): void
    {
        $this->setArtistId($object->artistId);
        $this->setArtistName($object->artistName);
        $this->setEvoLink($object->evoLink);
        $this->setExtArtistId($object->extArtistId);
        $this->setExtArtistId2($object->extArtistId2);
        $this->setExtArtistId3($object->extArtistId3);
    }
}
