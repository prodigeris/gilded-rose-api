<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Mmm, that tasty Brie. Now aged!
 *
 * @ApiResource(
*     collectionOperations={"get"},
*     itemOperations={"get"}
* )
 */
class AgedBrie extends ProductBase
{

}
