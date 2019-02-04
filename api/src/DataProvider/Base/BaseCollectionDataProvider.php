<?php

namespace App\DataProvider\Base;

/**
 * Class GildedRoseCollectionDataProvider
 *
 * @package \App\DataProvider
 */
abstract class BaseCollectionDataProvider extends GildedRoseStoreDataProvider implements HasOriginalClass
{
    public function getCollection(string $resourceClass, string $operationName = null): \Generator
    {
        $products = $this->gilded_rose_product_list->getProductsOfType(static::getOriginalClass());

        foreach ($products as $id => $product) {
            yield new $resourceClass($id, $product);
        }
    }
}