<?php
/**
 * EventFeed.php
 *
 * EventFeed class
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
 */

namespace Floor9design\Eventim\PluginCore\Models;

/**
 * Class EventFeed
 *
 * An Abstract class modelling a response from Eventim.
 * This is to be extended with a class that implements EventFeedInterface.
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Models
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   Private software
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @see       ../../docs/project/objects.md
 * @since     File available since Release 1.0
 */
abstract class EventFeed
{
    /**
     * A collection of event_serie objects
     * @var array
     */
    protected $event_series = [];

    /**
     * @var
     */
    protected $feed;

    /**
     * @return array
     * @see $event_series
     *
     */
    public function getEventSeries(): array
    {
        return $this->event_series;
    }

    /**
     * @param array $event_series
     * @return EventFeed
     * @see $event_series
     *
     */
    public function setEventSeries(array $event_series): EventFeed
    {
        $this->event_series = $event_series;
        return $this;
    }

    /**
     * @return mixed
     * @see $feed
     *
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * @param mixed $feed
     * @return EventFeed
     * @see $feed
     *
     */
    public function setFeed($feed): EventFeed
    {
        $this->feed = $feed;
        return $this;
    }

}
