<?php

declare(strict_types = 1);

namespace Fidry\SfPotLille\Bridge\Laravel\LaravelApp;

use Illuminate\Foundation\Application as IlluminateFoundationApplication;

final class Application extends IlluminateFoundationApplication
{
    /**
     * @inheritdoc
     */
    public function __construct($basePath)
    {
        parent::__construct($basePath);

        $this->useStoragePath($this->basePath.DIRECTORY_SEPARATOR.'var');
    }

    /**
     * @inheritdoc
     */
    public function configPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'config';
    }

    /**
     * @inheritdoc
     */
    public function getCachedRoutesPath()
    {
        return $this->cachePath().DIRECTORY_SEPARATOR.'routes.php';
    }

    /**
     * @inheritdoc
     */
    public function getCachedCompilePath()
    {
        return $this->cachePath().DIRECTORY_SEPARATOR.'compiled.php';
    }

    /**
     * @inheritdoc
     */
    public function getCachedServicesPath()
    {
        return $this->cachePath().DIRECTORY_SEPARATOR.'services.php';
    }

    public function langPath()
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function path()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'src';
    }

    /**
     * @return string
     */
    private function cachePath()
    {
        return $this->basePath().'/cache';
    }
}
