<?php

declare(strict_types=1);

namespace App\Providers;

use Monolog\Handler\StreamHandler;
use Monolog\Handler\HandlerInterface;
use FondBot\Application\LogServiceProvider as BaseLogServiceProvider;

class LogServiceProvider extends BaseLogServiceProvider
{
    /**
     * Define handlers.
     *
     * @return HandlerInterface[]
     */
    public function handlers(): array
    {
        return [
            // Write application logs to "/resources/fondbot/logs/app.log"
            new StreamHandler($this->container->get('resources_path').'/logs/app.log'),
        ];
    }
}
