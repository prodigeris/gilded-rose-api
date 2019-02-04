<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\DataProvider\Base\BaseCollectionDataProvider;
use App\Entity\BackstagePass;

final class BackstagePassCollectionDataProvider extends BaseCollectionDataProvider
    implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return BackstagePass::class === $resourceClass;
    }

    public static function getOriginalClass(): string
    {
        return \GildedRose\Products\BackstagePass::class;
    }
}

