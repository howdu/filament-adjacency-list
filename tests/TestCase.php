<?php

declare(strict_types=1);

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Saade\FilamentAdjacencyList\FilamentAdjacencyListServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            FilamentAdjacencyListServiceProvider::class,
        ];
    }
}
