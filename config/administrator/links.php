<?php
use App\Models\Link;

return [
    'title'         => '推荐资源',
    'single'        => '推荐资源',
    'model'         => Link::class,
    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title' =>'资源名称',
            'sortable' => false,
        ],
        'link'  => [
            'title' => '链接',
            'sortable'  => false,
        ],
        'operation' => [
            'title' => '管理',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title' => '名称',
        ],
        'link'  => [
            'link'  => '链接',
        ],
    ],
    'filters'   => [
        'id' => [
            'title' => '标签ID',
        ],
        'title' => [
            'title' => '名称',
        ],
    ],
];
