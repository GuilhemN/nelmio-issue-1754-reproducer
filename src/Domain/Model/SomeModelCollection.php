<?php

namespace App\Domain\Model;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use Symfony\Component\Serializer\Annotation\Groups;

class SomeModelCollection
{
    /**
     * @Groups("api")
     * @OA\Property(type="array", @OA\Items(ref=@Model(type=App\Domain\Model\SomeModel::class)))
     */
    public array $items;
}

class SomeModel
{

}
