<?php

declare(strict_types=1);

namespace Imi\Server\View\Annotation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 视图注解.
 *
 * @Annotation
 * @Target({"CLASS","METHOD"})
 * @Parser("Imi\Server\View\Parser\ViewParser")
 */
#[\Attribute]
class View extends Base
{
    /**
     * 只传一个参数时的参数名.
     */
    protected ?string $defaultFieldName = 'template';

    /**
     * 模版基础路径
     * abc-配置中设定的路径/abc/
     * /abc/-绝对路径.
     */
    public ?string $baseDir = null;

    /**
     * 模版路径.
     */
    public ?string $template = null;

    /**
     * 渲染类型.
     */
    public string $renderType = 'json';

    /**
     * 附加数据.
     *
     * @var mixed
     */
    public $data = [];

    /**
     * @param mixed $data
     */
    public function __construct(?array $__data = null, ?string $baseDir = null, ?string $template = null, string $renderType = 'json', $data = [])
    {
        parent::__construct(...\func_get_args());
    }
}
