<?php

declare(strict_types = 1);

namespace Fidry\SfPotLille\Bridge\Symfony\SymfonyApp;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class AppKernel extends Kernel
{
    /**
     * @inheritdoc
     */
    public function registerBundles()
    {
        return [
            new \Fidry\SfPotLille\Bridge\Symfony\FidrySfPotLilleDemoBundle(),
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config.yml');
    }
}
