<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\DataProvider\Base\BaseCollectionDataProvider;
use App\Entity\Conjured;

final class ConjuredCollectionDataProvider extends BaseCollectionDataProvider
    implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Conjured::class === $resourceClass;
    }

    public static function getOriginalClass(): string
    {
        return \GildedRose\Products\Conjured::class;
    }
}

