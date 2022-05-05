<?php

namespace Yng\Config\Annotations;

use Attribute;
use Yng\Config\Repository;
use Yng\Di\Annotations\Annotation;
use Yng\Di\Contracts\PropertyAttribute;
use Psr\Container\ContainerInterface;
use ReflectionProperty;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Config extends Annotation implements PropertyAttribute
{
    /**
     * @var string $key
     */
    protected string $key;

    /**
     * 默认值
     *
     * @var $default
     */
    protected $default = null;

    /**
     * @param ...$args
     */
    public function __construct(...$args)
    {
        $this->key     = $args['key'] ?? $args[0];
        $this->default = $args['default'] ?? $args[1] ?? null;
    }

    /**
     * @param ContainerInterface  $container
     * @param ReflectionProperty $property
     * @param object              $object
     */
    public function handle(ContainerInterface $container, ReflectionProperty $property, object $object)
    {
        $container->setValue($object, $property, $container->get(Repository::class)->get($this->key, $this->default));
    }
}
