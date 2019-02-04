<?php

namespace App\DataProvider\Base;

use App\DataProvider\GildedRoseStoreDataProvider;
use App\Entity\ProductBase;

/**
 * Class GildedRoseCollectionDataProvider
 *
 * @package \App\DataProvider
 */
abstract class BaseDataProvider extends GildedRoseStoreDataProvider implements HasOriginalClass
{
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = []): ?ProductBase
    {
        $products = $this->gilded_rose_store->getProductsOfType(static::getOriginalClass());

        return isset($products[$id]) ? new $resourceClass($id, $products[$id]) : null;
    }

}