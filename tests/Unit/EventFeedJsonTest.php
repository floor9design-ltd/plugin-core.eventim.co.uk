<?php
/**
 * EventFeedJsonTest.php
 *
 * EventFeedJsonTest class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.3
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\Eventim\PluginCore\Tests\Unit;

use Exception;
use Floor9design\Eventim\PluginCore\Models\EventFeedJson;
use Floor9design\Eventim\PluginCore\Models\EventSerie;
use Floor9design\Eventim\PluginCore\Tests\BaseTestCase;

/**
 * EventFeedJsonTest
 *
 * Tests the EventFeedJson class.
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.3
 * @see       \Floor9design\Eventim\PluginCore\Models\Event
 * @since     File available since Release 1.0
 */
class EventFeedJsonTest extends BaseTestCase
{
    /**
     * Test EventFeedJson::processFeed()
     */
    public function testBadlyFormedFeed()
    {
        $event_feed_json = new EventFeedJson();

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The feed JSON was badly formed');
        $event_feed_json->setFeed('not json');
        $event_feed_json->processFeed();
    }

    /**
     * Test EventFeedJson::processFeed()
     */
    public function testBadlyStructuredFeed()
    {
        $event_feed_json = new EventFeedJson();

        $badly_structured = json_encode(
            [
                'hello' => 'world'
            ]
        );

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The feed JSON had no relevant content');
        $event_feed_json->setFeed($badly_structured);
        $event_feed_json->processFeed();
    }

    /**
     * Test EventFeedJson::processFeed()
     */
    public function testFeedWithEventSeries()
    {
        $event_feed_json = new EventFeedJson();
        $array = [
            'hello' => 'world',
            'eventserie' => [new EventSerie((object)$this->createTestEventSerieArray())]
        ];

        $well_structured = json_encode($array);

        $event_feed_json->setFeed($well_structured);
        //var_dump($event_feed_json);
        $processed = $event_feed_json->processFeed();

        $this->assertTrue($processed);
        //$this->assertEquals($array['eventSerie'], $processed);
    }
}

