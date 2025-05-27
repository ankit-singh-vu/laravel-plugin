<?php

namespace App\Support;

class PluginHooks
{
    protected static array $events = [];
    protected static array $filters = [];

    // Register an event listener
    public static function on(string $event, callable $callback): void
    {
        static::$events[$event][] = $callback;
    }

    // Trigger an event
    public static function trigger(string $event, array $params = []): void
    {
        foreach (static::$events[$event] ?? [] as $callback) {
            call_user_func_array($callback, $params);
        }
    }

    // Add a filter
    public static function filter(string $name, callable $callback): void
    {
        static::$filters[$name][] = $callback;
    }

    // Apply all filters to a value
    public static function apply(string $name, mixed $value): mixed
    {
        foreach (static::$filters[$name] ?? [] as $callback) {
            $value = call_user_func($callback, $value);
        }

        return $value;
    }
}
