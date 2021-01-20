<?php

declare(strict_types=1);

namespace Imi\Swoole\Server\ConnectContext\Event\Param;

use Imi\Event\EventParam;

/**
 * 连接上下文数据恢复事件参数.
 */
class ConnectContextRestoreParam extends EventParam
{
    /**
     * 数据原始连接号.
     *
     * @var int
     */
    public int $fromFd = 0;

    /**
     * 数据目标连接号（当前连接号）.
     *
     * @var int
     */
    public int $toFd = 0;
}