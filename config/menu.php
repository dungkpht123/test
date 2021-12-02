<?php

return  [
    [
        'label' => 'Trang chủ',
        'title' => '',
        'route' => 'admin',
        'icon' => 'fa-home',
    ],
    [
        'label' => 'UI Giao Diện',
        'title' => 'quanlywebsite',
        'route' => 'category.index',
        'icon' => 'fa-laptop',
        'items' => [
            [
                'label' => 'Quản Lý Banner',
                'title' => 'banner',
                'route' => 'category.index',
                // 'icon' => 'fa-list',
            ],
            [
                'label' => 'Thư Mục',
                'title' => 'thumuc',
                'route' => 'category.create',
                // 'icon' => 'fa-create',
            ],
            [
                'label' => 'Menu',
                'title' => 'menu',
                'route' => 'menu',
                // 'icon' => 'fa-create',
            ],
            [
                'label' => 'Blog',
                'title' => 'blog',
                'route' => 'banner',
                'icon' => 'fa-folder-open',
                'items' => [
                    [
                        'label' => 'All Blog',
                        'title' => 'blog',
                        'route' => 'banner',
                    ],
                    [
                        'label' => 'Add new Blog',
                        'title' => 'blog',
                        'route' => 'banner',
                    ],
                ]

            ],
        ]
    ],
    [
        'label' => 'Quản lý Bài viết',
        'title' => 'quanlybaiviet',
        'route' => 'post.index',
        'icon' => 'fa-newspaper-o',
        'items' => [
            [
                'label' => 'Bài Viết',
                'title' => 'list_baiviet',
                'route' => 'post.index',
                // 'icon' => 'fa-list',
            ],
            [
                'label' => 'Thêm bài viết',
                'title' => 'addbaiviet',
                'route' => 'post.create',
                // 'icon' => 'fa-create',
            ],
        ]
    ],
    [
        'label' => 'Quản lý Lịch Trình',
        'title' => 'quanlylichtrinh',
        'route' => 'category.index',
        'icon' => 'fa-calendar',
        'items' => [
            [
                'label' => 'List Category',
                'title' => 'list_lichtrinh',
                'route' => 'category.index',
                // 'icon' => 'fa-list',
            ],
        ]
    ],
    [
        'label' => 'Quản lý Thư',
        'title' => 'quanlythu',
        'route' => 'qlthu.index',
        'icon' => 'fa-envelope',
        'items' => [
            [
                'label' => 'Danh sách liên hệ',
                'title' => 'list_quanlythu',
                'route' => 'qlthu.index',

            ],
            [
                'label' => 'Liên Hệ Với Khách Hàng',
                'title' => 'traloikhachhang',
                'route' => 'qlthu.index',

            ],
        ]

    ],
    [
        'label' => 'Quản lý Comment',
        'title' => 'quanlythu',
        'route' => 'qlcomment.index',
        'icon' => 'fa-comment',
        'items' => [
            [
                'label' => 'Danh sách bình luận',
                'title' => 'list_quanlythu',
                'route' => 'qlcomment.index',

            ],
            [
                'label' => 'Liên Hệ Với Khách Hàng',
                'title' => 'traloikhachhang',
                'route' => 'qlcomment.index',

            ],
        ]

    ],
    [
        'label' => 'Quản lý Sản Phẩm',
        'title' => 'quanlysanpham',
        'route' => 'category.index',
        'icon' => 'fa-cubes',
        'items' => [
            [
                'label' => 'Thiết Lập',
                'title' => 'thietlap',
                'route' => 'thietlap',
                'icon' => 'fa-circle-o',
            ],
            [
                'label' => 'Category',
                'title' => 'category',
                'route' => 'category.index',
                'icon' => 'fa-create',
                'items' => [
                    [
                        'label' => 'List Category',
                        'title' => 'category',
                        'route' => 'category.index',
                        'icon' => 'fa-list',
                    ],
                    [
                        'label' => 'Add Category',
                        'title' => 'addcategory',
                        'route' => 'category.create',
                        'icon' => 'fa-create',
                    ],
                ]
            ],
            [
                'label' => 'Tính năng',
                'title' => 'tinhnang',
                'route' => 'category.index',
                'icon' => 'fa-list',
            ],
            [
                'label' => 'Trạng thái',
                'title' => 'trangthai',
                'route' => 'category.index',
                'icon' => 'fa-list',
            ],
            [
                'label' => 'Product',
                'title' => 'product',
                'route' => 'product.index',
                'icon' => 'fa-create',
                'items' => [
                    [
                        'label' => 'List Product',
                        'title' => 'product',
                        'route' => 'product.index',
                        'icon' => 'fa-list',
                    ],
                    [
                        'label' => 'Add Product',
                        'title' => 'product',
                        'route' => 'product.create',
                        'icon' => 'fa-create',
                    ],
                    [
                        'label' => 'Thông số kĩ thuật',
                        'title' => 'thongso',
                        'route' => 'thongso',
                        'icon' => 'fa-create',
                    ],
                ]
            ],
        ],
    ],

    [
        'label' => 'Quản lý Đơn Hàng',
        'title' => 'donhang',
        'route' => 'cart_view',
        'icon' => 'fa-shopping-cart',
        'items' => [
            [
                'label' => 'Danh sách',
                'title' => 'danhsach',
                'route' => 'cart_view',
                'icon' => 'fa-shopping-cart',
            ],
            [
                'label' => 'Add new Account',
                'title' => 'account',
                'route' => 'cart_view',
                'icon' => 'fa-shopping-cart',
            ],
        ]

    ],

    [
        'label' => 'Quản Lý Ảnh',
        'title' => '',
        'route' => 'file',
        'icon' => 'fa-picture-o',

    ],
    // ],




    // [
    //     'label' => 'Order Manager',
    //     // 'route' => 'order.index',
    //     'icon' => 'fa-tags',
    //     'items' => [
    //         [
    //             'label' => 'All Order',
    //             // 'route' => 'order.index',
    //             // 'icon' => 'fa-shopping-cart',
    //         ],
    //         [
    //             'label' => 'Statistic',
    //             // 'route' => 'order.index',
    //             'icon' => ' fa-bar-chart',
    //         ],
    //     ]

    // ],
    // [
    //     'label' => 'Pages',
    //     // 'route' => 'account.index',
    //     'icon' => 'fa-xing',
    //     'item' => [
    //         [
    //             'label' => 'Chat',
    //             // 'route' => 'admin.dashboard',
    //             // 'icon' => 'fa-home',
    //         ],
    //         [
    //             'label' => 'Clients',
    //             // 'route' => 'admin.dashboardv1',
    //             // 'icon' => 'fa-home',
    //         ],
    //         [
    //             'label' => 'Projects',
    //             // 'route' => 'admin.dashboardv1',
    //             // 'icon' => 'fa-home',
    //         ]
    //     ]
    // ],
    [
        'label' => 'Thống Kê',
        'title' => 'thongke',
        'route' => 'category.index',
        'icon' => 'fa-line-chart',
    ],
    [
        'label' => 'Quản Lý Người Dùng',
        'title' => 'account',
        'route' => 'account.index',
        'icon' => 'fa-user',
        'items' => [
            [
                'label' => 'All Account',
                'title' => 'account',
                'icon' => 'fa-shopping-cart',
                'items' => [
                    [
                        'label' => 'Admin',
                        'title' => 'Admin',
                        'route' => 'account.index',
                    ],
                    [
                        'label' => 'User',
                        'title' => 'Users',
                        'route' => 'users.index',
                    ],
                ]
            ],
            [
                'label' => 'Add new Account',
                'title' => 'account',
                'route' => 'account.create',
                'icon' => 'fa-shopping-cart',
            ],

        ]

    ],
    // [
    //     'label' => 'Message',
    //     // 'route' => 'account.index',
    //     'icon' => 'fa-comment',
    // ],

];
