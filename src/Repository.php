<?php
declare(strict_types=1);

namespace Yng\Config;

use ArrayAccess;
use Yng\Utils\Arr;

class Repository
{
    /**
     * 配置数组
     *
     * @var array
     */
    protected array $items = [];

    /**
     * 获取[支持点语法]
     *
     * @param string|null $key
     * @param null        $default
     *
     * @return array|ArrayAccess|mixed
     */
    public function get(string $key = null, $default = null)
    {
        return Arr::get($this->items, $key, $default);
    }

    /**
     * 设置[支持点语法]
     *
     * @param string $key
     * @param        $value
     */
    public function set(string $key, $value)
    {
        Arr::set($this->items, $key, $value);
    }

    /**
     * 全部
     *
     * @return array
     */
    public function all(): array
    {
        return $this->items;
    }

    /**
     * 加载多个配文件
     *
     * @param array $map
     */
    public function load(array $map)
    {
        foreach ($map as $item) {
            $this->loadOne($item);
        }
    }

    /**
     * 加载一个配置文件
     *
     * @param string $config
     */
    public function loadOne(string $config)
    {
        $this->items[\pathinfo($config, PATHINFO_FILENAME)] = include $config;
    }
}
