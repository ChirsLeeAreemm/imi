<?php

declare(strict_types=1);

namespace Imi\Model\Annotation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 表注解.
 *
 * @Annotation
 * @Target("CLASS")
 * @Parser("Imi\Model\Parser\ModelParser")
 */
class Table extends Base
{
    /**
     * 只传一个参数时的参数名.
     *
     * @var string|null
     */
    protected ?string $defaultFieldName = 'name';

    /**
     * 表名.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * 数据库连接池名称.
     *
     * @var string|null
     */
    public ?string $dbPoolName = null;

    /**
     * 主键，支持数组方式设置联合索引.
     *
     * @var string|array|null
     */
    public $id = null;
}
