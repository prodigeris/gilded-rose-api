<?php

namespace App\GildedRose;

use GildedRose\GildedRose;

/**
 * Class GildedRoseStore
 *
 * @package \App\GildedRose
 */
class GildedRoseStore
{
    /**
     * @var \GildedRose\GildedRose
     */
    protected $gilded_rose;

    /**
     * GildedRoseStore constructor.
     *
     * @param \GildedRose\GildedRose $gildedRose
     * @throws \GildedRose\Exceptions\FactoryClassNotAProductException
     * @throws \GildedRose\Exceptions\FactoryClassNotFoundException
     */
    public function __construct(GildedRose $gildedRose)
    {
        $this->gilded_rose = $gildedRose;

        $this->executeNewDay();
    }

    /**
     * @throws \GildedRose\Exceptions\FactoryClassNotAProductException
     * @throws \GildedRose\Exceptions\FactoryClassNotFoundException
     */
    protected function executeNewDay(): void
    {
        $this->gilded_rose->updateQuality();
    }
}