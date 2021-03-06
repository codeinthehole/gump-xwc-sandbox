<?php

namespace Documents\Ecommerce;

/**
 * @Document(db="doctrine_odm_tests", collection="stock_items")
 */
class StockItem
{
    /**
     * @Id
     */
    private $id;

    /**
     * @String
     */
    private $name;

    /**
     * @Int
     */
    private $inventory;

    /**
     * @EmbedOne(targetDocument="Documents\Ecommerce\Money")
     */
    private $cost;

    public function getId()
    {
        return $this->id;
    }

    public function  __construct($name = null, $cost = null, $inventory = null)
    {
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $cost) {
            $this->setCost($cost);
        }
        if (null !== $inventory) {
            $this->setInventory($inventory);
        }
    }

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCost(Money $cost)
    {
        $this->cost = $cost;
    }

    public function getCost()
    {
        return $this->cost->getAmount();
    }

    public function setInventory($inventory)
    {
        $this->inventory = (int) $inventory;
        return $this;
    }

    public function getInventory()
    {
        return $this->inventory;
    }
}