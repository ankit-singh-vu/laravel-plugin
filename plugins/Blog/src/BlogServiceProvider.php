<?php

namespace Plugins\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function boot()
    {
        // Load migrations, views, etc. if needed
    }
}
