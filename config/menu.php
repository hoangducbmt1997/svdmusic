<?php
return[
    [
        'label'=> 'Dashboard',
        'route' => 'admin.dashboard',
        'icon' => 'fa-tachometer-alt',
        'name' => ''

    ],[
        'label' => 'Category Manager',
        'route' => 'admin.category.index',
        'icon' => 'fa-stream',
        'name' => 'category',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Category',
                'route' => 'admin.category.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Category',
                'route' => 'admin.category.create',
            ]

        ]
    ],[
        'label' => 'Song Manager',
        'route' => 'admin.song.index',
        'icon' => 'fa-record-vinyl',
        'name' => 'song',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Song',
                'route' => 'admin.song.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Song',
                'route' => 'admin.song.create',
            ]

        ]
    ],[
        'label' => 'Playlist Manager',
        'route' => 'admin.playlist.index',
        'icon' => 'fa-music',
        'name' => 'playlist',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Playlist',
                'route' => 'admin.playlist.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Playlist',
                'route' => 'admin.playlist.create',
            ]

        ]
    ],[
        'label' => 'Top100 Manager',
        'route' => 'admin.top100.index',
        'icon' => 'fa-chart-line',
        'name' => 'top100',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Top 100',
                'route' => 'admin.top100.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Top 100',
                'route' => 'admin.top100.create',
            ]

        ]
    ],[
        'label' => 'Artist Manager',
        'route' => 'admin.artist.index',
        'icon' => 'fa-user-astronaut',
        'name' => 'artist',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Artist',
                'route' => 'admin.artist.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Artist',
                'route' => 'admin.artist.create',
            ]

        ]
    ],[
        'label' => 'Area Manager',
        'route' => 'admin.area.index',
        'icon' => 'fa-globe-americas',
        'name' => 'area',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Area',
                'route' => 'admin.area.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Area',
                'route' => 'admin.area.create',
            ]

        ]
    ],[
        'label' => 'MV Manager',
        'route' => 'admin.mv.index',
        'icon' => 'fa-film',
        'name' => 'mv',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All MV',
                'route' => 'admin.mv.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add MV',
                'route' => 'admin.mv.create',
            ]

        ]
    ],[
        'label' => 'Banner Manager',
        'route' => 'admin.banner.index',
        'icon' => 'fa-image',
        'name' => 'banner',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Banner',
                'route' => 'admin.banner.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Banner',
                'route' => 'admin.banner.create',
            ]

        ]
    ],[
        'label' => 'Account Manager',
        'route' => 'admin.user.index',
        'icon' => 'fa-user-circle',
        'name' => 'account',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Account',
                'route' => 'admin.user.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Account',
                'route' => 'admin.user.create',
            ]

        ]
    ],[
        'label' => 'Theme Manager',
        'route' => 'admin.theme.index',
        'icon' => 'fa-chart-area',
        'name' => 'theme',

        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Theme',
                'route' => 'admin.theme.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Theme',
                'route' => 'admin.theme.create',
            ]

        ]
    ],[
        'label' => 'Setting',
        'route' => 'admin.setting.index',
        'icon' => 'fas fa-cog',
        'name' => 'setting',
        'items' => [
            [
                'icon' => 'fa-list',
                'label' => 'All Account',
                'route' => 'admin.user.index',
            ],
            [
                'icon' => 'fa-plus-square',
                'label' => 'Add Account',
                'route' => 'admin.user.create',
            ]

        ]
    ]
]

?>
