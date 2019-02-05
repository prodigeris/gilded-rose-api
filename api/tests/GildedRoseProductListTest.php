<?php

namespace App\Tests;

use App\GildedRose\GildedRoseProductList;
use App\GildedRose\GildedRoseStorage;
use GildedRose\Item;
use GildedRose\ProductFactory;
use GildedRose\Products\RegularProduct;
use GildedRose\Products\Sulfuras;
use PHPUnit\Framework\TestCase;

/**
 * Class GildedRoseProductListTest
 *
 * @package \App\Tests
 */
class GildedRoseProductListTest extends TestCase
{
    /**
     * @var GildedRoseProductList
     */
    private $gilded_rose_product_list;

    /**
     * @var ProductFactory | \PHPUnit\Framework\MockObject\MockObject
     */
    private $product_factory;

    /**
     * @var GildedRoseStorage | \PHPUnit\Framework\MockObject\MockObject
     */
    private $gilded_rose_storage;

    /**
     *  Initial set up
     */
    protected function setUp(): void
    {
        $this->product_factory = $this->getMockBuilder(ProductFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->gilded_rose_storage = $this->getMockBuilder(GildedRoseStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->gilded_rose_product_list = new GildedRoseProductList($this->product_factory, $this->gilded_rose_storage);
    }

    /**
     * @covers GildedRoseProductList::getProducts()
     */

    public function testIfReturnsProducts()
    {
        $item = new Item('Sulfuras, Hand of Ragnaros', 2, 10);
        $sulfuras = new Sulfuras($item);

        $this->gilded_rose_storage->expects($this->once())
            ->method('getItems')
            ->will($this->returnValue([$item]));

        $this->product_factory->expects($this->once())
            ->method('build')
            ->will($this->returnValue($sulfuras));

        $this->assertContains($sulfuras, $this->gilded_rose_product_list->getProducts());
    }

    /**
     * @covers GildedRoseProductList::getProductsOfType()t()
     */

    public function testIfReturnsByType()
    {
        $item = new Item('Regular Item', 2, 10);
        $regularProduct = new RegularProduct($item);

        $this->gilded_rose_storage->expects($this->exactly(2))
            ->method('getItems')
            ->will($this->returnValue([$item]));

        $this->product_factory->expects($this->exactly(2))
            ->method('build')
            ->will($this->returnValue($regularProduct));

        $this->assertContains($regularProduct, $this->gilded_rose_product_list->getProductsOfType(RegularProduct::class));
        $this->assertNotContains($regularProduct, $this->gilded_rose_product_list->getProductsOfType(Sulfuras::class));
    }
}