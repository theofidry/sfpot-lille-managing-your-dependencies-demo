<?php

declare(strict_types = 1);

namespace Fidry\SfPotLille\Bridge\Symfony;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class FidrySfPotLilleDemoBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function setContainer(ContainerInterface $container = null)
    {
    }
}
