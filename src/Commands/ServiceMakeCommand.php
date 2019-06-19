<?php

namespace Jun3\LumenMake\Commands\CommandMakeCommand;

use Illuminate\Console\GeneratorCommand;

/**
 * @uses     ServiceMakeCommand
 * @package  Jun3\LumenMake\Commands\CommandMakeCommand
 * @version  2019年06月19日
 * @author   Jun <zhoujun3372@gmail.com>
 * @license  PHP Version 7.1.x {@link [图片]http://www.php.net/license/3_0.txt}
 */
class ServiceMakeCommand extends GeneratorCommand
{
    /**
     * create a user defined model.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new lumen service ';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';  // command type

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return dirname(__DIR__) . '/stubs/service.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Model\Service';
    }
}