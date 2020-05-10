<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'beons' => [
            'driver' => 'local',
            'root' => public_path('beons'),
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

        'beons_lab' => [
            'driver' => 'local',
            'root' => public_path('beons/lab'),
            'url' => env('APP_URL').'/public/beons/lab',
            'visibility' => 'public',
        ],

        'beons_published' => [
            'driver' => 'local',
            'root' => public_path('beons/published'),
            'url' => env('APP_URL').'/public/beons/published',
            'visibility' => 'public',
        ],

        'audio' => [
            'driver' => 'local',
            'root' => public_path('audio'),
            'url' => env('APP_URL').'/public/audio',
            'visibility' => 'public',
        ],

        'audio_ambient' => [
            'driver' => 'local',
            'root' => public_path('audio/ambient'),
            'url' => env('APP_URL').'/public/audio/ambient',
            'visibility' => 'public',
        ],

        'audio_fx' => [
            'driver' => 'local',
            'root' => public_path('audio/fx'),
            'url' => env('APP_URL').'/public/audio/fx',
            'visibility' => 'public',
        ],

        'audio_music' => [
            'driver' => 'local',
            'root' => public_path('audio/music'),
            'url' => env('APP_URL').'/public/audio/music',
            'visibility' => 'public',
        ],

        'avatars' => [
            'driver' => 'local',
            'root' => public_path('assets/avatars'),
            'url' => env('APP_URL').'/public/assets/avatars',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

    ],

];
