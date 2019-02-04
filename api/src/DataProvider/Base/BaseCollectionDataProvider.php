<?php

namespace App\DataProvider\Base;

use App\DataProvider\GildedRoseStoreDataProvider;

/**
 * Class GildedRoseCollectionDataProvider
 *
 * @package \App\DataProvider
 */
abstract class BaseCollectionDataProvider extends GildedRoseStoreDataProvider implements HasOriginalClass
{
    public function getCollection(string $resourceClass, string $operationName = null): \Generator
    {
        $products = $this->gilded_rose_store->getProductsOfType(static::getOriginalClass());

        foreach ($products as $id => $product) {
            yield new $resourceClass($id, $product);
        }
    }
}