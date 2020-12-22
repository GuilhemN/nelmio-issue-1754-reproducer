<?php

namespace App\Controller;

use App\ApiDocGeneratorFacade;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/customer/docs", name="app_customer_api-docs", methods={"GET"})
 */
class SwaggerUiController extends AbstractController
{
    private ApiDocGeneratorFacade $apiDocGeneratorFacade;
    private Security $security;

    public function __construct(ApiDocGeneratorFacade $apiDocGeneratorFacade)
    {
        $this->apiDocGeneratorFacade = $apiDocGeneratorFacade;
    }

    public function __invoke(): Response
    {
        return $this->render(
            '@NelmioApiDoc/SwaggerUi/index.html.twig',
            ['swagger_data' => ['spec' => $this->apiDocGeneratorFacade->generate()]]
        );
    }
}
