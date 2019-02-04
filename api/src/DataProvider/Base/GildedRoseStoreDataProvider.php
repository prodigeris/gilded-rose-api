<?php

namespace App\DataProvider;

use App\GildedRose\GildedRoseStore;

/**
 * Class GildedRoseStoreDataProvider
 *
 * @package \App\DataProvider
 */
abstract class GildedRoseStoreDataProvider
{
    /**
     * @var \App\GildedRose\GildedRoseStore
     */
    protected $gilded_rose_store;

    public function __construct(GildedRoseStore $gildedRoseStore)
    {
        $this->gilded_rose_store = $gildedRoseStore;
    }
}