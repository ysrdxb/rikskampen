<?php
$_['menu_data'] = [

    'lang_path' => 'common/menu',

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
                    'name' => "Extension Installer",
                    'lng_name' => "text_installer",
                    'href' => "index.php?route=extension/installer&",
                    'children' => [],
                    'is_visible' => 1
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Modifications",
                    'lng_name' => "text_modification",
                    'href' => "index.php?route=extension/modification&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Modules",
                    'lng_name' => "text_module",
                    'href' => "index.php?route=extension/module&",
                    'children' => []
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Shipping",
                    'lng_name' => "text_shipping",
                    'href' => "index.php?route=extension/shipping&",
                    'children' => [],
                    'is_visible' => 1
                ],
                4 => [
                    'icon' => ">>",
                    'name' => "Payments",
                    'lng_name' => "text_payment",
                    'href' => "index.php?route=extension/payment&",
                    'children' => [],
                    'is_visible' => 1
                ],
                5 => [
                    'icon' => ">>",
                    'name' => "Order Totals",
                    'lng_name' => "text_total",
                    'href' => "index.php?route=extension/total&",
                    'children' => [],
                    'is_visible' => 1
                ],
                6 => [
                    'icon' => ">>",
                    'name' => "Feeds",
                    'lng_name' => "text_feed",
                    'href' => "index.php?route=extension/feed&",
                    'children' => [],
                    'is_visible' => 1
                ],
                7 => [
                    'icon' => ">>",
                    'name' => "Anti-Fraud",
                    'lng_name' => "text_fraud",
                    'href' => "index.php?route=extension/fraud&",
                    'children' => [],
                    'is_visible' => 1
                ],

            ]
        ],
        3 => [
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
                    'name' => "Recurring Orders",
                    'lng_name' => "text_recurring",
                    'href' => "index.php?route=sale/recurring&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Returns",
                    'lng_name' => "text_return",
                    'href' => "index.php?route=sale/return&",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Customers",
                    'lng_name' => "text_customer",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Customers",
                            'lng_name' => "text_customer",
                            'href' => "index.php?route=sale/customer&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Customer Groups",
                            'lng_name' => "text_customer_group",
                            'href' => "index.php?route=sale/customer_group&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Custom Fields",
                            'lng_name' => "text_custom_field",
                            'href' => "index.php?route=sale/custom_field&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Banned IP",
                            'lng_name' => "text_custom_field",
                            'href' => "index.php?route=sale/custom_ban_ip&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ]
                ],
                4 => [
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
                5 => [
                    'icon' => ">>",
                    'name' => "PayPal",
                    'lng_name' => "text_paypal",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Search",
                            'lng_name' => "text_search",
                            'href' => "index.php?route=payment/pp_express/search&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ],
                    'is_visible' => 1
                ]
            ]
        ],
        4 => [
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
                    'name' => "Affiliates",
                    'lng_name' => "text_affiliate",
                    'href' => "index.php?route=marketing/affiliate&",
                    'children' => [],
                    'is_visible' => 1
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Coupons",
                    'lng_name' => "text_coupon",
                    'href' => "index.php?route=marketing/coupon&",
                    'children' => [],
                    'is_visible' => 1
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Mail",
                    'lng_name' => "text_contact",
                    'href' => "index.php?route=marketing/contact&",
                    'children' => [],
                    'is_visible' => 1
                ],
            ]
        ],
        5 => [
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
                            'name' => "Banners",
                            'lng_name' => "text_banner",
                            'href' => "index.php?route=design/banner&",
                            'children' => [],
                            'is_visible' => 1
                        ],
                    ]
                ],
                2 => [
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
                3 => [
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

            ],
        ],
        6 => [
            'icon' => "fa-wrench",
            'name' => "Tools",
            'lng_name' => "text_tools",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Uploads",
                    'lng_name' => "text_upload",
                    'href' => "index.php?route=tool/upload&",
                    'children' => [],
                    'is_visible' => 1,
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Backup / Restore",
                    'lng_name' => "text_backup",
                    'href' => "index.php?route=tool/backup&",
                    'children' => [],
                    'is_visible' => 1,
                ],
                3 => [
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
        7 => [
            'icon' => "fa-bar-chart-o",
            'name' => "Reports",
            'lng_name' => "text_reports",
            'href' => "",
            'children' => [
                0 => [
                    'icon' => ">>",
                    'name' => "Sales",
                    'lng_name' => "text_report_sale",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Orders",
                            'lng_name' => "text_report_sale_order",
                            'href' => "index.php?route=report/sale_order&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Tax",
                            'lng_name' => "text_report_sale_tax",
                            'href' => "index.php?route=report/sale_tax&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Shipping",
                            'lng_name' => "text_report_sale_shipping",
                            'href' => "index.php?route=report/sale_shipping&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Returns",
                            'lng_name' => "text_report_sale_return",
                            'href' => "index.php?route=report/sale_return&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        4 => [
                            'icon' => ">>",
                            'name' => "Coupons",
                            'lng_name' => "text_report_sale_coupon",
                            'href' => "index.php?route=report/sale_coupon&",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
                1 => [
                    'icon' => ">>",
                    'name' => "Products",
                    'lng_name' => "text_report_product",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Viewed",
                            'lng_name' => "text_report_product_viewed",
                            'href' => "index.php?route=report/product_viewed&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Orders",
                            'lng_name' => "text_report_product_purchased",
                            'href' => "index.php?route=report/product_purchased&",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
                2 => [
                    'icon' => ">>",
                    'name' => "Customers",
                    'lng_name' => "text_report_customer",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Customers Online",
                            'lng_name' => "text_report_customer_online",
                            'href' => "index.php?route=report/customer_online&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Customer Activity",
                            'lng_name' => "text_report_customer_activity",
                            'href' => "index.php?route=report/customer_activity&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Orders",
                            'lng_name' => "text_report_customer_order",
                            'href' => "index.php?route=report/customer_order&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        3 => [
                            'icon' => ">>",
                            'name' => "Reward Points",
                            'lng_name' => "text_report_customer_reward",
                            'href' => "index.php?route=report/customer_reward&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        4 => [
                            'icon' => ">>",
                            'name' => "Credit",
                            'lng_name' => "text_report_customer_credit",
                            'href' => "index.php?route=report/customer_credit&",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ],
                3 => [
                    'icon' => ">>",
                    'name' => "Marketing",
                    'lng_name' => "text_report_marketing",
                    'href' => "",
                    'children' => [
                        0 => [
                            'icon' => ">>",
                            'name' => "Marketing",
                            'lng_name' => "text_report_marketing",
                            'href' => "index.php?route=report/marketing&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        1 => [
                            'icon' => ">>",
                            'name' => "Affiliates",
                            'lng_name' => "text_report_affiliate",
                            'href' => "index.php?route=report/affiliate&",
                            'children' => [],
                            'is_visible' => 1,
                        ],
                        2 => [
                            'icon' => ">>",
                            'name' => "Affiliate Activity",
                            'lng_name' => "text_report_affiliate_activity",
                            'href' => "index.php?route=report/affiliate_activity&",
                            'children' => [],
                            'is_visible' => 1,
                        ]
                    ],
                    'is_visible' => 1,
                ]
            ],
        ]
    ]
];
