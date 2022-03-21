<?php


return [
    // [
    //     'label' => 'dashboard',
    //     'router' => 'admin.dashboard',
    //     'icon' => 'fa-home',
    // ],
        [
            'label' => 'Món Ăn',
            'router' => 'product.show',
            'icon' => 'fa-store-alt',
            'item' => [
                [
                    'label' => 'danh sách món ăn',
                    'router' => 'product.show'
                ],
                [
                    'label' => 'Thêm món ăn',
                    'router' => 'product.create'
                ]
            ]
        ],
    // [
    //     'label' => 'Tin tức',
    //     'router' => 'categoryNews.index',
    //     'icon' => 'fa-newspaper',
    //     'item' => [
    //         [
    //             'label' => 'Danh sách tin tức',
    //             'router' => 'NewController.index'
    //         ],
    //         [
    //             'label' => 'Thêm tin tức',
    //             'router' => 'NewController.create'
    //         ]
    //     ]
    //  ],
    // [
    //     'label' => 'menu_sản phẩm',
    //     'router' => 'MenuController.index',
    //     'icon' => ' fa-caret-square-down',
    //     'item' => [
    //         [
    //             'label' => 'danh sách menu',
    //             'router' => 'MenuController.index'
    //         ],
    //         [
    //             'label' => 'Thêm menu',
    //             'router' => 'MenuController.create'
    //         ]
    //     ]
    //  ],
    // [
    //     'label' => 'Sản phẩm',
    //     'router' => 'productController.index',
    //     'icon' => ' fa-align-justify',
    //     'item' => [
    //         [
    //             'label' => 'list sản phẩm',
    //             'router' => 'productController.index'
    //         ],
    //         [
    //             'label' => 'Thêm sản Phẩm',
    //             'router' => 'productController.create'
    //         ]
    //     ]
    //  ],
    // [
    //     'label' => 'slider',
    //     'router' => 'SliderController.index',
    //     'icon' => ' fa-image',
    //     'item' => [
    //         [
    //             'label' => 'image list',
    //             'router' => 'SliderController.index'
    //         ],
    //         [
    //             'label' => 'add image',
    //             'router' => 'SliderController.create'
    //         ]
    //     ]
    // ],
    // [
    //     'label' => 'Customer',
    //     'router' => 'CustomerController.index',
    //     'icon' => ' fa-user',
    //     'item' => [
    //         [
    //             'label' => 'danh sách khách hàng',
    //             'router' => 'CustomerController.index'
    //         ],  
    //     ]
    // ],
    // [
    //     'label' => 'file manager',
    //     'router' => 'file_manager',
    //     'icon' => 'fas fa-image',
    //  ]
    // [
    //     'label' => 'file manager',
    //     'router' => 'file_manager',
    //     'icon' => 'fas fa-image',
    //  ]

    ]

?>