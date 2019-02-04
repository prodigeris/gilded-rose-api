<?php

namespace App\GildedRose;

use GildedRose\Item;
use GildedRose\Products\AgedBrie;
use GildedRose\Products\BackstagePass;
use GildedRose\Products\Conjured;
use GildedRose\Products\Sulfuras;

/**
 * Class GildedRoseStorage
 *
 * @package \App\GildedRose
 */
class GildedRoseStorage
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * GildedRoseStorage constructor.
     */
    public function __construct()
    {
        $this->initItems();
    }

    /**
     *
     */
    protected function initItems()
    {
        $this->items[] = new Item(AgedBrie::NAME, 10, 5);
        $this->items[] = new Item(AgedBrie::NAME, 4, 6);
        $this->items[] = new Item(AgedBrie::NAME, 0, 49);
        $this->items[] = new Item(AgedBrie::NAME, -2, 50);
        $this->items[] = new Item(Sulfuras::NAME, 0, 80);
        $this->items[] = new Item(Sulfuras::NAME, 20, 80);
        $this->items[] = new Item('AK-47, Hand of Ragnaros', 1, 40);
        $this->items[] = new Item('Some beer', 8, 20);
        $this->items[] = new Item('Chocolate chips', 0, 49);
        $this->items[] = new Item('Chocolate chips', 0, 0);
        $this->items[] = new Item(BackstagePass::NAME, 7, 50);
        $this->items[] = new Item(BackstagePass::NAME, 4, 20);
        $this->items[] = new Item(BackstagePass::NAME, 14, 30);
        $this->items[] = new Item(BackstagePass::NAME, 0, 30);
        $this->items[] = new Item(Conjured::NAME, 5, 10);
        $this->items[] = new Item(Conjured::NAME, 0, 5);
        $this->items[] = new Item(Conjured::NAME, 0, 0);
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}