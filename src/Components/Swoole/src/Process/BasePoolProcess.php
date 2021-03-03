<?php

declare(strict_types=1);

namespace Imi\Swoole\Process;

use Imi\Swoole\Process\Contract\IPoolProcess;

abstract class BasePoolProcess implements IPoolProcess
{
    /**
     * 数据.
     *
     * @var array
     */
    protected array $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
        foreach ($data as $k => $v)
        {
            $this->$k = $v;
        }
    }
}