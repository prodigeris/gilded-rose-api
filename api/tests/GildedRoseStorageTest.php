<?php

namespace App\Tests;

use App\GildedRose\GildedRoseStorage;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

/**
 * Class GildedRoseStorageTest
 *
 * @package \App\Tests
 */
class GildedRoseStorageTest extends TestCase
{
    /**
     * @covers GildedRoseStorage::getItems()
     */
    public function testIfStorageItemsOfTheRightClass()
    {
        $gildedRoseStorage = new GildedRoseStorage();

        foreach($gildedRoseStorage->getItems() as $item)
        {
            $this->assertInstanceOf(Item::class, $item);
        }
    }
}