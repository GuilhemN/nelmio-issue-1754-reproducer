<?php

namespace App\Domain\Model;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;

class SomeModelCollection
{
    /**
     * @OA\Property(type="array", @OA\Items(ref=@Model(type=App\Domain\Model\SomeModel::class)))
     */
    public array $items;
}

class SomeModel
{

}
