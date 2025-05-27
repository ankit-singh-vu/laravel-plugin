<?php

namespace Plugins\Blog;

use Illuminate\Support\ServiceProvider;

use function listen_event;
use function trigger_event;
use function add_filter;
class BlogServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function boot()
    {
        // 🔔 Listen for a global event
        listen_event('app.booted', function () {
            \Log::info('📦 Blog plugin received app.booted event!');
        });


        // 🎛️ Add a filter to modify a blog post title
        add_filter('blog.post.title', function ($title) {
            return strtoupper($title) . ' [Filtered]';
        });

        add_filter('test.filter', function ($value) {
            return $value . '✅ Modified by filter.';
        });


        // ✅ Trigger a custom event from this plugin itself
        trigger_event('blog.plugin.booted', ['Blog plugin is active']);
    }
}
