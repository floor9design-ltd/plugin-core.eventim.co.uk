<?php
/**
 * EventFeedInterface.php
 *
 * EventFeedInterface
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Interfaces
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @since     File available since Release 1.0
 */

namespace Floor9design\Eventim\PluginCore\Interfaces;

/**
 * Interface EventFeedInterface
 *
 * Interface to force all EventFeed children to cover all methods.
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Interfaces
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @since     File available since Release 1.0
 */
interface EventFeedInterface
{
    /**
     * Process an event feed
     *
     * @param string $json
     * @return bool True for successful
     */
    public function processFeed(): bool;

}
