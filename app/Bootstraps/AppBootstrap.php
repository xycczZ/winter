<?php
declare(strict_types=1);

namespace App\Bootstraps;


use Xycc\Winter\Contract\Bootstrap;
use Xycc\Winter\Contract\Container\ContainerContract;

class AppBootstrap extends Bootstrap
{
    public function boot(ContainerContract $container): void
    {
    }

    public static function scanPath(): array
    {
        return [
            dirname(__DIR__) => 'App'
        ];
    }
}