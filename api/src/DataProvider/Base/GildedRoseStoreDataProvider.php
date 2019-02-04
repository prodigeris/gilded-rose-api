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
     * GildedRoseStoreDataProvider constructor.
     *
     * @param \App\GildedRose\GildedRoseProductList $gildedRoseProductList
     */
    public function __construct(GildedRoseProductList $gildedRoseProductList)
    {
        $this->gilded_rose_product_list = $gildedRoseProductList;
    }
}