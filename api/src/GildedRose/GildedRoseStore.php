<?php

namespace App\GildedRose;

use GildedRose\GildedRose;
use GildedRose\Item;
use GildedRose\Product;
use GildedRose\ProductFactory;
use GildedRose\Products\AgedBrie;
use GildedRose\Products\BackstagePass;
use GildedRose\Products\Conjured;
use GildedRose\Products\Sulfuras;

/**
 * Class GildedRoseStore
 *
 * @package \App\GildedRose
 */
class GildedRoseStore
{
    /**
     * @var \GildedRose\GildedRose
     */
    protected $gilded_rose;

    protected $product_factory;

    protected $items = [];

    public function __construct()
    {
        $this->product_factory = new ProductFactory();
        $this->initItems();
        $this->gilded_rose = new GildedRose($this->getItems());
        $this->gilded_rose->updateQuality();
    }

    protected function getItems(): array
    {
        return $this->items;
    }

    public function getProducts(): array
    {
        return array_map(function (Item $item) {
            return $this->product_factory->build($item);
        }, $this->items);
    }

    public function getProductsOfType(string $class): array
    {
        return array_filter($this->getProducts(), function (Product $product) use ($class) {
            return get_class($product) === $class;
        });
    }

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

    public function getGildedRose(): GildedRose
    {
        return $this->gilded_rose;
    }
}