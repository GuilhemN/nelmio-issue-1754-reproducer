<?php

namespace App\Controller;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/route-1", name="route_1", methods={"GET"}, format="json")
 */
class Route1Controller extends AbstractController
{
    /**
     * @OA\Get(
     *      tags={"route_1"},
     *      summary="Returns a list of some models",
     *      description="Returns a list of some models",
     *      @OA\Response(
     *          description="Returns a list of some models.",
     *          response=200,
     *          @Model(type=App\Domain\Model\SomeModelCollection::class, groups={"api"})
     *      )
     * )
     */
    public function __invoke()
    {
    }
}
