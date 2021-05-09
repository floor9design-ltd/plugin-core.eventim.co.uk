<?php
/**
 * PriceCategory.php
 *
 * PriceCategory class
 *
 * php 7.3+
 *
 * @category  None
 * @package   Floor9design\PriceCategoryim\PluginCore\Models
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
 * Class PriceCategory
 *
 * Models the PriceCategory collection
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
class PriceCategory
{
    // Properties

    /**
     * @var
     */
    protected $currency;

    /**
     * @var
     */
    protected $inventory;

    /**
     * @var
     */
    protected $price;

    /**
     * @var
     */
    protected $priceCategoryId;

    /**
     * @var
     */
    protected $priceCategoryName;

    /**
     * @var
     */
    protected $priceCategoryNumber;

    /**
     * @var
     */
    protected $productType;

    // Accessors

    /**
     * @return mixed
     * @see $currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return PriceCategory
     * @see $currency
     */
    public function setCurrency($currency): PriceCategory
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     * @see $inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @param mixed $inventory
     * @return PriceCategory
     * @see $inventory
     */
    public function setInventory($inventory): PriceCategory
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * @return mixed
     * @see $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return PriceCategory
     * @see $price
     */
    public function setPrice($price): PriceCategory
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     * @see $priceCategoryId
     */
    public function getPriceCategoryId()
    {
        return $this->priceCategoryId;
    }

    /**
     * @param mixed $priceCategoryId
     * @return PriceCategory
     * @see $priceCategoryId
     */
    public function setPriceCategoryId($priceCategoryId): PriceCategory
    {
        $this->priceCategoryId = $priceCategoryId;
        return $this;
    }

    /**
     * @return mixed
     * @see $priceCategoryName
     */
    public function getPriceCategoryName()
    {
        return $this->priceCategoryName;
    }

    /**
     * @param mixed $priceCategoryName
     * @return PriceCategory
     * @see $priceCategoryName
     */
    public function setPriceCategoryName($priceCategoryName): PriceCategory
    {
        $this->priceCategoryName = $priceCategoryName;
        return $this;
    }

    /**
     * @return mixed
     * @see $priceCategoryNumber
     */
    public function getPriceCategoryNumber()
    {
        return $this->priceCategoryNumber;
    }

    /**
     * @param mixed $priceCategoryNumber
     * @return PriceCategory
     * @see $priceCategoryNumber
     */
    public function setPriceCategoryNumber($priceCategoryNumber): PriceCategory
    {
        $this->priceCategoryNumber = $priceCategoryNumber;
        return $this;
    }

    /**
     * @return mixed
     * @see $productType
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     * @return PriceCategory
     * @see $productType
     */
    public function setProductType($productType): PriceCategory
    {
        $this->productType = $productType;
        return $this;
    }

    // Constructor

    /**
     * PriceCategory constructor.
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
        $this->setCurrency($object->currency);
        $this->setInventory($object->inventory);
        $this->setPrice($object->price);
        $this->setPriceCategoryId($object->priceCategoryId);
        $this->setPriceCategoryName($object->priceCategoryName);
        $this->setPriceCategoryNumber($object->priceCategoryNumber);
        $this->setProductType($object->productType);
    }
}
