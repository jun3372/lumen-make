<?php


namespace Jun3\LumenMake\Commands\CommandMakeCommand;


use Illuminate\Console\GeneratorCommand;

/**
 * @uses     ModelMakeCommand
 * @package  Jun3\LumenMake\Commands\CommandMakeCommand
 * @version  2019年06月19日
 * @author   Jun <zhoujun3372@gmail.com>
 * @license  PHP Version 7.1.x {@link [图片]http://www.php.net/license/3_0.txt}
 */
class ModelMakeCommand extends GeneratorCommand
{
    /**
     * create a user defined model.
     *
     * @var string
     */
    protected $name = 'make:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new lumen model ';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Model';  // command type

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return dirname(__DIR__) . '/stubs/model.stub';
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
        return $rootNamespace . '\Model\Entity';
    }
}
