<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\DataProvider\Base\BaseDataProvider;
use App\Entity\BackstagePass;

final class BackstagePassDataProvider extends BaseDataProvider
    implements ItemDataProviderInterface, RestrictedDataProviderInterface
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

