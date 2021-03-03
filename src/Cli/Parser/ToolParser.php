<?php

declare(strict_types=1);

namespace Imi\Cli\Parser;

use Imi\Bean\Parser\BaseParser;
use Imi\Cli\Annotation\Argument;
use Imi\Cli\Annotation\Command;
use Imi\Cli\Annotation\CommandAction;
use Imi\Cli\Annotation\Option;
use Imi\Cli\CliManager;
use Imi\Event\Event;

class ToolParser extends BaseParser
{
    /**
     * 处理方法.
     *
     * @param \Imi\Bean\Annotation\Base $annotation 注解类
     * @param string                    $className  类名
     * @param string                    $target     注解目标类型（类/属性/方法）
     * @param string                    $targetName 注解目标名称
     *
     * @return void
     */
    public function parse(\Imi\Bean\Annotation\Base $annotation, string $className, string $target, string $targetName)
    {
        $data = &$this->data;
        if ($annotation instanceof Command)
        {
            $data[$className]['Command'] = $annotation;
            Event::trigger('TOOL_PARSER.PARSE_TOOL.' . $className);
        }
        elseif ($annotation instanceof CommandAction)
        {
            $func = function () use (&$data, $annotation, $className, $targetName) {
                /** @var Command $commandAnnotation */
                $commandAnnotation = $data[$className]['Command'];
                CliManager::addCommand($commandAnnotation->name, $annotation->name, $className, $targetName);
                $data[$className]['CommandAction'][$targetName] = $annotation;
                Event::trigger('TOOL_PARSER.PARSE_TOOL.' . $className . '::' . $targetName);
            };
            if (isset($data[$className]['Command']))
            {
                $func();
            }
            else
            {
                Event::one('TOOL_PARSER.PARSE_TOOL.' . $className, $func);
            }
        }
        elseif ($annotation instanceof Argument)
        {
            $func = function () use (&$data, $annotation, $className, $targetName) {
                /** @var Command $commandAnnotation */
                $commandAnnotation = $data[$className]['Command'];
                /** @var CommandAction $commandActionAnnotation */
                $commandActionAnnotation = $data[$className]['CommandAction'][$targetName];
                CliManager::addArgument($commandAnnotation->name, $commandActionAnnotation->name, $annotation->name, $annotation->type, $annotation->default, $annotation->required, $annotation->comments);
            };
            if (isset($data[$className]['Command']) || isset($data[$className]['CommandAction'][$targetName]))
            {
                $func();
            }
            else
            {
                Event::one('TOOL_PARSER.PARSE_TOOL.' . $className . '::' . $targetName, $func);
            }
        }
        elseif ($annotation instanceof Option)
        {
            $func = function () use (&$data, $annotation, $className, $targetName) {
                /** @var Command $commandAnnotation */
                $commandAnnotation = $data[$className]['Command'];
                /** @var CommandAction $commandActionAnnotation */
                $commandActionAnnotation = $data[$className]['CommandAction'][$targetName];
                CliManager::addOption($commandAnnotation->name, $commandActionAnnotation->name, $annotation->name, $annotation->shortcut, $annotation->type, $annotation->default, $annotation->required, $annotation->comments);
            };
            if (isset($data[$className]['Command']) || isset($data[$className]['CommandAction'][$targetName]))
            {
                $func();
            }
            else
            {
                Event::one('TOOL_PARSER.PARSE_TOOL.' . $className . '::' . $targetName, $func);
            }
        }
    }
}