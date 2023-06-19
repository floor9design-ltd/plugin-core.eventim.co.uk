<?php
/**
 * EventFeedJsonTest.php
 *
 * EventFeedJsonTest class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Functional
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

namespace Floor9design\Eventim\PluginCore\Tests\Functional;

use Floor9design\Eventim\PluginCore\Models\EventFeedJson;
use PHPUnit\Framework\TestCase;
use Exception;

/**
 * EventFeedJsonTest
 *
 * Tests the EventFeedJson including populating its children.
 *
 * @category  None
 * @package   Floor9design\Eventim\PluginCore\Tests\Functional
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license MIT
 * @version   1.3
 * @link      https://github.com/floor9design-ltd/plugin-core.eventim.co.uk
 * @link      https://floor9design.com
 * @version   1.3
 * @see       \Floor9design\Eventim\PluginCore\Models\EventSerie
 * @since     File available since Release 1.0
 */
class EventFeedJsonTest extends TestCase
{
    protected $test_feed_bad = 'Not valid json';

    protected $test_feed_empty = '{}';

    protected $test_feed_full = '';

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->test_feed_full = file_get_contents(__DIR__ . '/feed.json');
    }

    /**
     * Test EventFeedJson::processFeed() with some bad json
     *
     * @return void
     */
    public function testBadFeed()
    {
        $event_feed_json = new EventFeedJson();
        $event_feed_json->setFeed($this->test_feed_bad);

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The feed JSON was badly formed');
        $event_feed_json->processFeed();
    }

    /**
     * Test EventFeedJson::processFeed() with some empty/irrelevant json
     *
     * @return void
     */
    public function testEmptyFeed()
    {
        $event_feed_json = new EventFeedJson();
        $event_feed_json->setFeed($this->test_feed_empty);

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The feed JSON had no relevant content');
        $event_feed_json->processFeed();
    }

    /**
     * Test EventFeedJson::processFeed() with the example json
     *
     * @return void
     */
    public function testFullFeed()
    {
        $event_feed_json = new EventFeedJson();
        $event_feed_json->setFeed($this->test_feed_full);

        $this->assertTrue($event_feed_json->processFeed());
    }

}

