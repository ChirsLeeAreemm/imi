<?php

declare(strict_types=1);

namespace Imi\Workerman\Process\Annotation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 进程注解.
 *
 * @Annotation
 * @Target("CLASS")
 * @Parser("Imi\Workerman\Process\Parser\ProcessParser")
 */
#[\Attribute]
class Process extends Base
{
    /**
     * 只传一个参数时的参数名.
     */
    protected ?string $defaultFieldName = 'name';

    /**
     * 进程名称.
     */
    public string $name = '';

    public function __construct(?array $__data = null, string $name = '')
    {
        parent::__construct(...\func_get_args());
    }
}