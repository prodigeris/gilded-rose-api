<?php

namespace App\DataProvider\Base;

use App\GildedRose\GildedRoseProductList;
use App\GildedRose\GildedRoseStore;

/**
 * Class GildedRoseStoreDataProvider
 *
 * @package \App\DataProvider
 */
abstract class GildedRoseStoreDataProvider
{
    /**
     * @var \App\GildedRose\GildedRoseProductList
     */
    protected $gilded_rose_product_list;

    /**
     * @var \App\GildedRose\GildedRoseStore
     */
    private $gilded_rose;

    /**
     * GildedRoseStoreDataProvider constructor.
     *
     * @param \App\GildedRose\GildedRoseProductList $gildedRoseProductList
     */
    public function __construct(GildedRoseProductList $gildedRoseProductList, GildedRoseStore $gildedRoseStore)
    {
        $this->gilded_rose_product_list = $gildedRoseProductList;
        $this->gilded_rose = $gildedRoseStore;
    }
}