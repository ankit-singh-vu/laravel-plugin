<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled Plugins
    |--------------------------------------------------------------------------
    |
    | Add the plugin's service provider class here to load it. This allows
    | you to enable/disable plugins simply by editing this config file.
    |
    */

    'enabled' => [
        Plugins\Blog\BlogServiceProvider::class,
        // Add more plugin service providers here
    ],

];
