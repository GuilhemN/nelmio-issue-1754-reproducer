<?php

namespace App;

use Symfony\Component\DependencyInjection\Argument\ServiceLocator;

class ApiDocGeneratorFacade
{
    private ServiceLocator $apiDocGeneratorLocator;

    public function __construct(ServiceLocator $apiDocGeneratorLocator)
    {
        $this->apiDocGeneratorLocator = $apiDocGeneratorLocator;
    }

    public function generate(): array
    {
        $areas = [
            'area_1',
            'area_2',
            'area_3'
        ];

        $apiDocGenerators = array_map(fn (string $area) => $this->apiDocGeneratorLocator->get($area), $areas);

        $specs = [];
        foreach ($apiDocGenerators as $apiDocGenerator) {
            $specs = array_replace_recursive($specs, json_decode($apiDocGenerator->generate()->toJson(), true));
        }

        return $specs;
    }
}
