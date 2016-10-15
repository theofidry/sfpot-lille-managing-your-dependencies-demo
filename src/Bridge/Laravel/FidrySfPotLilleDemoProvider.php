<?php

declare(strict_types = 1);

namespace Fidry\SfPotLille\Bridge\Laravel;

use Fidry\SfPotLille\Foo;
use Illuminate\Support\ServiceProvider;

final class FidrySfPotLilleDemoProvider extends ServiceProvider
{
    /**
     * @inheritdoc
     */
    public function register()
    {
        $this->app->singleton(Foo::class);
        $this->app->alias(Foo::class, 'fidry.sf_pot_lille.foo');
    }
}
