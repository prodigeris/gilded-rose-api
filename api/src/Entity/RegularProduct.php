<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Regular product without any special properties
 *
 * @ApiResource(
*     collectionOperations={"get"},
*     itemOperations={"get"}
* )
 */
class RegularProduct extends ProductBase
{
}
