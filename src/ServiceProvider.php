<?php

namespace Jun3\LumenMake;

use Illuminate\Support\ServiceProvider as LumenServiceProvider;
use Jun3\LumenMake\Commands\CommandMakeCommand\CommandMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\ControllerMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\EventMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\ExceptionMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\JobMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\ListenerMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\LogicMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\MiddlewareMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\ModelMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\ProviderMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\ServiceMakeCommand;
use Jun3\LumenMake\Commands\CommandMakeCommand\TaskMakeCommand;
use Jun3\LumenMake\Commands\TraitMakeCommand;

/**
 * @uses     ServiceProvider
 *
 * @version  2019年06月19日
 *
 * @author   Jun <zhoujun3372@gmail.com>
 * @license  PHP Version 7.1.x {@link [图片]http://www.php.net/license/3_0.txt}
 */
class ServiceProvider extends LumenServiceProvider
{
    public function boot()
    {
    }

    /**
     * 注册服务
     */
    public function register()
    {
        $this->commands([
            JobMakeCommand::class,
            ModelMakeCommand::class,
            CommandMakeCommand::class,
            ControllerMakeCommand::class,
            MiddlewareMakeCommand::class,
            ExceptionMakeCommand::class,
            ListenerMakeCommand::class,
            ProviderMakeCommand::class,
            ServiceMakeCommand::class,
            LogicMakeCommand::class,
            EventMakeCommand::class,
            TaskMakeCommand::class,
            TraitMakeCommand::class,
        ]);
    }
}
