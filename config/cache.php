<?php

// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------

return [
    // 默认缓存驱动
    'default' => env('cache.driver', 'redis'),

    // 缓存连接方式配置
    'stores'  => [
        'file' => [
            // 驱动方式
            'type'       => 'File',
            // 缓存保存目录
            'path'       => '',
            // 缓存前缀
            'prefix'     => '',
            // 缓存有效期 0表示永久缓存
            'expire'     => 0,
            // 缓存标签前缀
            'tag_prefix' => 'tag:',
            // 序列化机制 例如 ['serialize', 'unserialize']
            'serialize'  => [],
        ],
        // redis缓存
        'redis'    => [
            // 驱动方式
            'type'     => 'redis',
            // 服务器地址
            'host'     => config('app.redis.host'),
            // 密码
            'password' => config('app.redis.password'),
            // 端口
            'port'     => config('app.redis.port'),
            // 库
            'select'   => 2,
            // 过期时间
            // 'expire'   => null,
            'expire'   => cache_time('one_month'),
        ],
        // memcahce
        'memcache' => [
            // 驱动方式
            'type'     => 'memcache',
            // 服务器地址
            'host'     => config('app.memcache.host'),
            'password' => config('app.memcache.password'),
            'port'     => config('app.memcache.port'),
            // 过期时间
            'expire'   => cache_time('one_week'),
        ],
        // 更多的缓存连接
    ],
];
