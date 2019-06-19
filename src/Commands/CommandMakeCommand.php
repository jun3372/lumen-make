<?php


namespace Jun3\LumenMake\Commands\CommandMakeCommand;


use Illuminate\Console\GeneratorCommand;

/**
 * @uses     CommandMakeCommand
 * @package  Jun3\LumenMake\Command\CommandMakeCommand
 * @version  2019年06月19日
 * @author   Jun <zhoujun3372@gmail.com>
 * @license  PHP Version 7.1.x {@link [图片]http://www.php.net/license/3_0.txt}
 */
class CommandMakeCommand extends GeneratorCommand
{
    /**
     * create a user defined model.
     *
     * @var string
     */
    protected $name = 'make:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new lumen Command ';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Command';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return dirname(__DIR__) . '/stubs/command.stub';
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
        return $rootNamespace . '\Console\Commands';
    }
}