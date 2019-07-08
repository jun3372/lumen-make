<h1 align="center"> lumen-make </h1>

<p align="center"> Lumen Job, Modle, Controller, Command, Middleware, Logic, Service, Task, Event, Exception, Provider, Listener, Trait 自动创建脚手架</p>


## Installing

```shell
$ composer require jun3/lumen-make -vvv
```

## 配置

### Lumen 应用

在 `bootstrap/app.php` 中 82 行左右：

```php

$app->register(Jun3\LumenMake\ServiceProvider::class);
```

## 使用

### 命令
* `make:job {name}`
* `make:task {name}`
* `make:model {name}`
* `make:event {name}`
* `make:logic {name}`
* `make:service {name}`
* `make:console {name}`
* `make:provider {name}`
* `make:listener {name}`
* `make:exception {name}`
* `make:controller {name}`
* `make:middleware {name}`

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/jun3/lumen-make/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/jun3/lumen-make/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT