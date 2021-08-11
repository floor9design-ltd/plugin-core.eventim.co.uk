<?php
/**
 * EventFeedTest.php
 *
 * EventFeedTest class
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

use Floor9design\Eventim\PluginCore\Models\EventFeed;
use Floor9design\TestDataGenerator\Generator;
use Floor9design\TestDataGenerator\GeneratorException;
use PHPUnit\Framework\TestCase;

/**
 * EventFeedTest
 *
 * Tests the EventFeed class.
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
class EventFeedTest extends TestCase
{
    /**
     * @var Generator
     */
    var $generator;

    /**
     * @var
     */
    var $event_feed_mock;

    /**
     * Set up the generator
     */
    public function setUp(): void
    {
        $this->generator = new Generator();

        // mock it, as it is an abstact class.
        $this->event_feed_mock = $this
            ->getMockBuilder(EventFeed::class)
            ->getMockForAbstractClass();
    }

    /**
     * Test the basic accessors
     *
     * @throws GeneratorException
     */
    public function testAccessors()
    {
        // EventFeed::getEventSeries
        $event_series = ['a', 'b'];
        $this->event_feed_mock->setEventSeries($event_series);
        $this->assertEquals($this->event_feed_mock->getEventSeries(), $event_series);

        $event_feed = $this->generator->randomJson();
        $this->event_feed_mock->setFeed($event_feed);
        $this->assertEquals($this->event_feed_mock->getFeed(), $event_feed);

        $feed_url = $this->generator->randomUrl();
        $this->event_feed_mock->setFeedUrl($feed_url);
        $this->assertEquals($this->event_feed_mock->getFeedUrl(), $feed_url);
    }

}

