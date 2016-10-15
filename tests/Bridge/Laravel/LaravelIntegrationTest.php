<?php

declare(strict_types = 1);

namespace Fidry\SfPotLille\Bridge\Symfony;

use Fidry\SfPotLille\Bridge\Laravel\LaravelApp\Application;
use Fidry\SfPotLille\Bridge\Laravel\LaravelApp\ConsoleKernel;
use Fidry\SfPotLille\Foo;
use Illuminate\Foundation\Console\Kernel;

/**
 * @covers \Fidry\SfPotLille\Bridge\Laravel\FidrySfPotLilleDemoProvider
 */
class LaravelIntegrationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Kernel
     */
    private $kernel;

    /**
     * @var Application
     */
    private $app;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        $this->app = require __DIR__.'/../../../fixtures/Bridge/Laravel/LaravelApp/bootstrap.php';
        $this->kernel = $this->app->make(ConsoleKernel::class);
        /** @var Kernel $kernel */
        $this->kernel->bootstrap();
    }

    /**
     * @inheritdoc
     */
    public function tearDown()
    {
        $this->app->flush();
    }

    public function test_services_are_properly_registered()
    {
        $this->assertInstanceOf(
            Foo::class,
            $this->app->make('fidry.sf_pot_lille.foo')
        );
        $this->assertSame(
            $this->app->make('fidry.sf_pot_lille.foo'),
            $this->app->make(Foo::class)
        );
    }
}
