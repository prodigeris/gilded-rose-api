<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\DataProvider\Base\BaseDataProvider;
use App\Entity\Sulfuras;

final class SulfurasDataProvider extends BaseDataProvider
    implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Sulfuras::class === $resourceClass;
    }

    public static function getOriginalClass(): string
    {
        return \GildedRose\Products\Sulfuras::class;
    }
}

