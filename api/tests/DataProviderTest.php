<?php

namespace App\Tests;

use App\DataProvider\AgedBrieDataProvider;
use App\DataProvider\Base\BaseDataProvider;
use App\Entity\AgedBrie;
use App\GildedRose\GildedRoseProductList;
use App\GildedRose\GildedRoseStore;
use GildedRose\Product;
use PHPUnit\Framework\TestCase;

/**
 * Class BaseDataProvider
 *
 * @package \App\Tests
 */
class DataProviderTest extends TestCase
{
    /**
     * @var Product | \PHPUnit\Framework\MockObject\MockObject
     */
    private $product;

    /**
     * @var GildedRoseProductList | \PHPUnit\Framework\MockObject\MockObject
     */
    private $gilded_rose_product_list;

    /**
     * @var GildedRoseStore | \PHPUnit\Framework\MockObject\MockObject
     */
    private $gilded_rose_store;

    /**
     * Inital setup
     */
    protected function setUp()
    {
        $this->product = $this->getMockBuilder(Product::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->gilded_rose_product_list = $this->getMockBuilder(GildedRoseProductList::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->gilded_rose_store = $this->getMockBuilder(GildedRoseStore::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \App\DataProvider\Base\BaseDataProvider
     */
    protected function createDataProvider(): BaseDataProvider
    {
        return new AgedBrieDataProvider($this->gilded_rose_product_list, $this->gilded_rose_store);
    }

    /**
     * @covers BaseDataProvider::getItem()
     */
    public function testThatAgedBrieWasCreated()
    {
        $this->gilded_rose_product_list->expects($this->once())
            ->method('getProductsOfType')
            ->will($this->returnValue([$this->product]));


        $dataProvider = $this->createDataProvider();
        $item = $dataProvider->getItem(AgedBrie::class, 0);

        $this->assertInstanceOf(AgedBrie::class, $item);
    }

    /**
     * @covers BaseDataProvider::getItem()
     */
    public function testIfNothingWasCreated()
    {
        $this->gilded_rose_product_list->expects($this->once())
            ->method('getProductsOfType')
            ->will($this->returnValue([]));


        $dataProvider = $this->createDataProvider();
        $item = $dataProvider->getItem(AgedBrie::class, 0);

        $this->assertNull($item);
    }
}