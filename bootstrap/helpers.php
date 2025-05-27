<?php

use App\Support\PluginHooks;

if (!function_exists('trigger_event')) {
    function trigger_event(string $event, array $params = []): void
    {
        PluginHooks::trigger($event, $params);
    }
}

if (!function_exists('listen_event')) {
    function listen_event(string $event, callable $callback): void
    {
        PluginHooks::on($event, $callback);
    }
}

if (!function_exists('add_filter')) {
    function add_filter(string $filter, callable $callback): void
    {
        PluginHooks::filter($filter, $callback);
    }
}

if (!function_exists('apply_filters')) {
    function apply_filters(string $filter, mixed $value): mixed
    {
        return PluginHooks::apply($filter, $value);
    }
}
