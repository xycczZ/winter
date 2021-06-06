<?php
declare(strict_types=1);

namespace App;


use App\Bootstraps\AppBootstrap;
use Xycc\Winter\Container\Application as Container;

class Application extends Container
{
    protected array $boots = [
        AppBootstrap::class,
    ];
}