<?php
/**
 * EsCategory.php
 *
 * EsCategory class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\Categoryim\PluginCore\Models
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
 * Class EsCategory
 *
 * Models the EsCategory collection
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
class EsCategory
{
    // Properties

    /**
     * @var
     */
    protected $category;

    // Accessors

    /**
     * @return mixed
     * @see $category
     *
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return EsCategory
     * @see $category
     *
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    // Constructor

    /**
     * EsCategory constructor.
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
        $this->setCategory($object->category);
    }
}
