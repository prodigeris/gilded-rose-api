<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiProperty;
use GildedRose\Product;


abstract class ProductBase
{

    /**
     * @var int The entity Id
     *
     * @ApiProperty(identifier=true)
     */
    public $id;

    /**
     * Name of the product
     *
     * @var string
     */

    public $name;


    /**
     * Quality of the product
     *
     * @var string
     */

    public $quality;


    /**
     * Days until sale
     *
     * @var string
     */

    public $sell_in;

    /**
     * ProductBase constructor.
     *
     * @param $id
     * @param Product $product
     */
    public function __construct($id,  Product $product)
    {
        $this->id = $id;
        $this->name = $product->getItem()->name;
        $this->quality = $product->getItem()->quality;
        $this->sell_in = $product->getItem()->sell_in;
    }
}