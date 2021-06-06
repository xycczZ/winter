<?php
declare(strict_types=1);

namespace App;


use App\Bootstraps\AppBootstrap;

class Application extends \Winter\Container\Application
{
    protected array $boots = [
        AppBootstrap::class,
    ];
}