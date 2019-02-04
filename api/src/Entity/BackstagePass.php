<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Exclusive tickets to the one and only backstage of TAFKAL80ETC
 *
 * @ApiResource(
*     collectionOperations={"get"},
*     itemOperations={"get"}
* )
 */
class BackstagePass extends ProductBase
{

}
