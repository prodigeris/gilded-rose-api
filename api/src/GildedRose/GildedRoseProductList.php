<?php

namespace App\GildedRose;

use GildedRose\Item;
use GildedRose\Product;
use GildedRose\ProductFactory;

/**
 * Class GildedRoseStoreProducts
 *
 * @package \App\GildedRose
 */
class GildedRoseProductList
{
    /**
     * @var \GildedRose\ProductFactory
     */
    private $product_factory;

    /**
     * @var \App\GildedRose\GildedRoseStore
     */
    private $gilded_rose_storage;

    /**
     * GildedRoseProductList constructor.
     *
     * @param \GildedRose\ProductFactory $productFactory
     * @param \App\GildedRose\GildedRoseStorage $gildedRoseStorage
     */
    public function __construct(ProductFactory $productFactory, GildedRoseStorage $gildedRoseStorage)
    {
        $this->product_factory = $productFactory;
        $this->gilded_rose_storage = $gildedRoseStorage;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return array_map(function (Item $item) {
            return $this->product_factory->build($item);
        }, $this->gilded_rose_storage->getItems());
    }

    /**
     * @param string $class
     * @return array
     */
    public function getProductsOfType(string $class): array
    {
        return array_filter($this->getProducts(), function (Product $product) use ($class) {
            return get_class($product) === $class;
        });
    }
}