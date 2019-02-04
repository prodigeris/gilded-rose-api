<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\DataProvider\Base\BaseDataProvider;
use App\Entity\AgedBrie;

final class AgedBrieDataProvider extends BaseDataProvider
    implements ItemDataProviderInterface, RestrictedDataProviderInterface
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

