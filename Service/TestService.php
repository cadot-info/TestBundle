<?php

namespace Tuto\TestBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class TestService
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}
