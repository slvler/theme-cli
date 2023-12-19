<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default active Theme
    |--------------------------------------------------------------------------
    |
    | Default active themename. like as
    | 'active' => 'themeone',
    |
    */
    'active'     => 'themeone',

    /*
    |--------------------------------------------------------------------------
    | Themes path
    |--------------------------------------------------------------------------
    |
    | This path used for save the generated theme. This path also will added
    | automatically to list of scanned folders.
    |
    */
    'theme_path' => resource_path('views'),

    /*
    |--------------------------------------------------------------------------
    | Themes folder structure
    |--------------------------------------------------------------------------
    |
    | Here you may update theme folder structure.
    |
    */
    'folders'    => [
        'views'   => 'views',
        'css' => 'assets/css',
        'layouts' => 'views/layouts',
    ],


];
