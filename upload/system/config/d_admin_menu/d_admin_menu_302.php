<?php
$_['menu_data'] = [

    'lang_path' => 'common/column_left',

    'menu' => [

        0 => [
            'icon' => "fa-dashboard",
            'name' => "Dashboard",
            'lng_name' => "text_dashboard",
            'href' => "index.php?route=common/dashboard&",
            'children' => []
        ],
        1 => [
            'icon' => "fa-tags",
            'lng_name' => "text_catalog",
            'name' => "Catalog",
            'href' => "",
            'children' => [
                1 => [
                    'icon' => ">>",
                    'name' => "Categories",
                    'lng_name' => "text_category",
                    'href' => "index.php?route=catalog/category&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Products",
                    'lng_name' => "text_product",
                    'href' => "index.php?route=catalog/product&",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'lng_name' => "text_recurring",
                    'href' => "index.php?route=catalog/recurring&",
                    'children' => [],
                    'is_visible' => 1
                ],
                4 => [
                    'icon' => ">>",
                    'name' => "Filters",
                    'lng_name' => "text_filter",
                    'href' => "index.php?route=catalog/filter&",
                    'children' => [],
                    'is_visible' => 1
                ],
                5 => [
                    'icon' => ">>",
                    'name' => "Attributes",
                    'lng_name' => "text_attribute",
                    'href' => "",
                    'children' => [
                        1 => [
                            'icon' => ">>",
                            'name' => "Attributes",
                            'lng_name' => "text_attribute",
                            'href' => "index.php?route=catalog/attribute&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Attribute Groups",
                            'lng_name' => "text_attribute_group",
                            'href' => "index.php?route=catalog/attribute_group&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ],
                6 => [
                    'icon' => ">>",
                    'name' => "Options",
                    'lng_name' => "text_option",
                    'href' => "index.php?route=catalog/option&",
                    'children' => [],
                    'is_visible' => 1
                ],
                7 => [
                    'icon' => ">>",
                    'name' => "Manufactures",
                    'lng_name' => "text_manufacturer",
                    'href' => "index.php?route=catalog/manufacturer&",
                    'children' => [],
                    'is_visible' => 1
                ],
                8 => [
                    'icon' => ">>",
                    'name' => "Downloads",
                    'lng_name' => "text_download",
                    'href' => "index.php?route=catalog/download&",
                    'children' => [],
                    'is_visible' => 1
                ],
                9 => [
                    'icon' => ">>",
                    'name' => "Reviews",
                    'lng_name' => "text_review",
                    'href' => "index.php?route=catalog/review&",
                    'children' => [],
                    'is_visible' => 1
                ],
                10 => [
                    'icon' => ">>",
                    'name' => "Information",
                    'lng_name' => "text_information",
                    'href' => "index.php?route=catalog/information&",
                    'children' => [],
                    'is_visible' => 1
                ],

            ]
        ],
        2 => [
            'icon' => "fa-puzzle-piece",
            'name' => "Extensions",
            'lng_name' => "text_extension",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Marketplace",
                    'lng_name' => "text_marketplace",
                    'href' => "index.php?route=marketplace/marketplace&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Installer",
                    'lng_name' => "text_installer",
                    'href' => "index.php?route=marketplace/installer&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Extensions",
                    'lng_name' => "text_extension",
                    'href' => "index.php?route=marketplace/extension&",
                    'children' => []
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Modifications",
                    'lng_name' => "text_modification",
                    'href' => "index.php?route=marketplace/modification&",
                    'children' => [],
                    'is_visible' => 1
                ],
                4 => [
                    'icon' => ">>",
                    'name' => "Events",
                    'lng_name' => "text_event",
                    'href' => "index.php?route=marketplace/event&",
                    'children' => [],
                    'is_visible' => 1
                ],

            ]
        ],
        3 => [
            'icon' => "fa-television",
            'name' => "Design",
            'lng_name' => "text_design",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Layouts",
                    'lng_name' => "text_layout",
                    'href' => "index.php?route=design/layout&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Theme Editor",
                    'lng_name' => "text_theme",
                    'href' => "index.php?route=design/theme&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Language Editor",
                    'lng_name' => "text_language_editor",
                    'href' => "index.php?route=design/translation&",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Banners",
                    'lng_name' => "text_banner",
                    'href' => "index.php?route=design/banner&",
                    'children' => [],
                    'is_visible' => 1
                ],
                4 => [
                    'icon' => ">>",
                    'name' => "SEO URL",
                    'lng_name' => "text_seo_url",
                    'href' => "index.php?route=design/seo_url&",
                    'children' => [],
                    'is_visible' => 1
                ]
            ]
        ],
        4 => [
            'icon' => "fa-shopping-cart",
            'name' => "Sales",
            'lng_name' => "text_sale",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Orders",
                    'lng_name' => "text_order",
                    'href' => "index.php?route=sale/order&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'lng_name' => "text_recurring",
                    'href' => "index.php?route=sale/recurring&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Recurring Profiles",
                    'lng_name' => "text_return",
                    'href' => "index.php?route=sale/return&",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Gift Vouchers",
                    'lng_name' => "text_voucher",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Gift Vouchers",
                            'lng_name' => "text_voucher",
                            'href' => "index.php?route=sale/voucher&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Voucher Themes",
                            'lng_name' => "text_voucher_theme",
                            'href' => "index.php?route=sale/voucher_theme&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ],
            ]
        ],
        5 => [
            'icon' => "fa-user",
            'name' => "Customers",
            'lng_name' => "text_customer",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Customers",
                    'lng_name' => "text_customer",
                    'href' => "index.php?route=customer/customer&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Customer Groups",
                    'lng_name' => "text_customer_group",
                    'href' => "index.php?route=customer/customer_group&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Customer Approvals",
                    'lng_name' => "text_customer_approval",
                    'href' => "index.php?route=customer/customer_approval&",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Custom Fields",
                    'lng_name' => "text_custom_field",
                    'href' => "index.php?route=customer/custom_field&",
                    'children' => [],
                    'is_visible' => 1
                ],
            ]
        ],
        6 => [
            'icon' => "fa-share-alt",
            'name' => "Marketing",
            'lng_name' => "text_marketing",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Marketing",
                    'lng_name' => "text_marketing",
                    'href' => "index.php?route=marketing/marketing&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Coupons",
                    'lng_name' => "text_coupon",
                    'href' => "index.php?route=marketing/coupon&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Mail",
                    'lng_name' => "text_contact",
                    'href' => "index.php?route=marketing/contact&",
                    'children' => [],
                    'is_visible' => 1
                ],
            ]
        ],
        7 => [
            'icon' => "fa-cog",
            'name' => "System",
            'lng_name' => "text_system",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Settings",
                    'lng_name' => "text_setting",
                    'href' => "index.php?route=setting/store&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Users",
                    'lng_name' => "text_users",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Users",
                            'lng_name' => "text_users",
                            'href' => "index.php?route=user/user&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "User Groups",
                            'lng_name' => "text_user_group",
                            'href' => "index.php?route=user/user_permission&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "API",
                            'lng_name' => "text_api",
                            'href' => "index.php?route=user/api&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Localisation",
                    'lng_name' => "text_localisation",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Store Location",
                            'lng_name' => "text_location",
                            'href' => "index.php?route=localisation/location&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Languages",
                            'lng_name' => "text_language",
                            'href' => "index.php?route=localisation/language&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Currencies",
                            'lng_name' => "text_currency",
                            'href' => "index.php?route=localisation/currency&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Stock Statuses",
                            'lng_name' => "text_stock_status",
                            'href' => "index.php?route=localisation/stock_status&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        4 => [
                            'icon' => ">>",
                            'name' => "Order Statuses",
                            'lng_name' => "text_order_status",
                            'href' => "index.php?route=localisation/order_status&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        5 => [
                            'icon' => ">>",
                            'name' => "Returns",
                            'lng_name' => "text_return",
                            'href' => "",
                            'children' => [
                                0 => [
                                    'icon' => ">>",
                                    'name' => "Return Statuses",
                                    'lng_name' => "text_return_status",
                                    'href' => "index.php?route=localisation/return_status&",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                                1 => [
                                    'icon' => ">>",
                                    'name' => "Return Actions",
                                    'lng_name' => "text_return_action",
                                    'href' => "index.php?route=localisation/return_action&",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                                2 => [
                                    'icon' => ">>",
                                    'name' => "Return Reasons",
                                    'lng_name' => "text_return_reason",
                                    'href' => "index.php?route=localisation/return_reason&",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                            ],
                            'is_visible' => 1
                        ],
                        6 => [
                            'icon' => ">>",
                            'name' => "Countries",
                            'lng_name' => "text_country",
                            'href' => "index.php?route=localisation/country&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        7 => [
                            'icon' => ">>",
                            'name' => "Zones",
                            'lng_name' => "text_zone",
                            'href' => "index.php?route=localisation/zone&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        8 => [
                            'icon' => ">>",
                            'name' => "Geo Zones",
                            'lng_name' => "text_geo_zone",
                            'href' => "index.php?route=localisation/geo_zone&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        9 => [
                            'icon' => ">>",
                            'name' => "Taxes",
                            'lng_name' => "text_tax",
                            'href' => "",
                            'children' => [
                                0 => [
                                    'icon' => ">>",
                                    'name' => "Taxs Classes",
                                    'lng_name' => "text_tax_class",
                                    'href' => "index.php?route=localisation/tax_class&",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                                1 => [
                                    'icon' => ">>",
                                    'name' => "Tax Rates",
                                    'lng_name' => "text_tax_rate",
                                    'href' => "index.php?route=localisation/tax_rate&",
                                    'children' => [],
                                    'is_visible' => 1
                                ],
                            ],
                        ],
                        10 => [
                            'icon' => ">>",
                            'name' => "Length Classes",
                            'lng_name' => "text_length_class",
                            'href' => "index.php?route=localisation/length_class&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        11 => [
                            'icon' => ">>",
                            'name' => "Weight Classes",
                            'lng_name' => "text_weight_class",
                            'href' => "index.php?route=localisation/weight_class&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1,
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Maintenance",
                    'lng_name' => "text_meintenance",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Backup / Restore",
                            'lng_name' => "text_backup",
                            'href' => "index.php?route=tool/backup&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Uploads",
                            'lng_name' => "text_upload",
                            'href' => "index.php?route=tool/upload&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Error Logs",
                            'lng_name' => "text_log",
                            'href' => "index.php?route=tool/log&",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
            ],
        ],
        8 => [
            'icon' => "fa-bar-chart-o",
            'name' => "Reports",
            'lng_name' => "text_reports",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Reports",
                    'lng_name' => "text_reports",
                    'href' => "index.php?route=report/report&",
                    'children' => [],
                    'is_visible' => 1,
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Who's Online",
                    'lng_name' => "text_online",
                    'href' => "index.php?route=report/online&",
                    'children' => [],
                    'is_visible' => 1,
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Statistics",
                    'lng_name' => "text_statistics",
                    'href' => "index.php?route=report/statistics&",
                    'children' => [],
                    'is_visible' => 1,
                ],
            ]
        ]
    ]
];
