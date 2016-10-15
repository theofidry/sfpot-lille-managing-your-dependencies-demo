<?php

declare(strict_types = 1);

namespace Fidry\SfPotLille\Bridge\Symfony;

use Fidry\SfPotLille\Bridge\Symfony\SymfonyApp\AppKernel;
use Fidry\SfPotLille\Foo;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * @covers \Fidry\SfPotLille\Bridge\Symfony\DependencyInjection\FidrySfPotLilleDemoExtension
 * @covers \Fidry\SfPotLille\Bridge\Symfony\FidrySfPotLilleDemoBundle
 */
class SymfonyIntegrationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        $this->kernel = new AppKernel('test', true);
        $this->kernel->boot();
    }

    /**
     * @inheritdoc
     */
    public function tearDown()
    {
        $this->kernel->shutdown();
    }

    public function test_services_are_properly_registered()
    {
        $this->assertInstanceOf(
            Foo::class,
            $this->kernel->getContainer()->get('fidry.sf_pot_lille.foo')
        );
    }
}
