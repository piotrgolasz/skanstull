<?php defined('SYSPATH') OR die('No direct access allowed.');

return [
    //Enable Web frontend
    'web_frontend' => false,

    //Route path to web frontend
    'web_frontend_route' => 'migrations',

    //Path where migration files are going to be generated
    'path' => MODPATH . 'skanstull/migrations/'
];
