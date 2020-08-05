<?php
/**
 * EventFeedJson.php
 *
 * EventFeedJson class
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

use Floor9design\Eventim\PluginCore\Interfaces\EventFeedInterface;
use Exception;

/**
 * Class EventFeedJson
 *
 * Loads and populates an event series from an Eventim Json feed.
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
class EventFeedJson extends EventFeed implements EventFeedInterface
{
    /**
     * Process an event feed
     *
     * @return bool True for successful
     * @throws Exception
     */
    public function processFeed(): bool
    {

        $json_feed = json_decode($this->getFeed());

        // Badly formed json
        if(!$json_feed) {
            throw new Exception('The feed JSON was badly formed');
        }

        // Irrelevant json
        if(!isset($json_feed->eventserie) || !$json_feed->eventserie) {
            throw new Exception('The feed JSON had no relevant content');
        }

        // Naming convention json array named the individual object, so split up:

        $event_serie = [];

        foreach($json_feed->eventserie as $event_serie_response) {
            $event_serie[] = new EventSerie($event_serie_response);
        }

        $this->setEventSeries($event_serie);

        return true;
    }
}
