<?php

namespace Jun3\LumenMake\Commands\CommandMakeCommand;

use Illuminate\Console\GeneratorCommand;

/**
 * @uses     LogicMakeCommand
 *
 * @version  2019年06月19日
 *
 * @author   Jun <zhoujun3372@gmail.com>
 * @license  PHP Version 7.1.x {@link [图片]http://www.php.net/license/3_0.txt}
 */
class LogicMakeCommand extends GeneratorCommand
{
    /**
     * create a user defined model.
     *
     * @var string
     */
    protected $name = 'make:logic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new lumen logic ';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Logic';  // command type

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return dirname(__DIR__).'/stubs/logic.stub';
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
        return $rootNamespace.'\Model\Logic';
    }
}
