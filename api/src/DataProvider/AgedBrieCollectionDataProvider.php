<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\DataProvider\Base\BaseCollectionDataProvider;
use App\Entity\AgedBrie;

final class AgedBrieCollectionDataProvider extends BaseCollectionDataProvider
    implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return AgedBrie::class === $resourceClass;
    }

    public static function getOriginalClass(): string
    {
        return \GildedRose\Products\AgedBrie::class;
    }
}

