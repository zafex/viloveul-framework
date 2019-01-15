<?php

namespace App\Command;

use Viloveul\Console\Command;
use Viloveul\Container\ContainerInjectorTrait;
use Viloveul\Container\Contracts\Injector;
use Viloveul\Router\Contracts\Collection;

class HelloCommand extends Command implements Injector
{
    use ContainerInjectorTrait;

    /**
     * @var string
     */
    protected static $defaultName = 'hello';

    public function handle()
    {
        $this->output->writeLn('Hello World');
    }
}
