<?php

return [

    'admin_folder' => define('ADMIN_FOLDER', 'admin'),

    'base_url' => define('BASE_URL', env('APP_URL')),

    'admin_url' => define('ADMIN_URL', BASE_URL . ADMIN_FOLDER),

    'static_public_url' => define('STATIC_PUBLIC_URL', BASE_URL),
    'static_public_url_storage' => define('STATIC_PUBLIC_URL_STORAGE', BASE_URL . 'storage/'),


    'paginate_limit' => define('PAGINATE_LIMIT', 20),

    'dateformat' => define('DATE_FORMAT', 'j M y, g:i a'),

    'dateformat2' => define('DATE_FORMAT2', 'j F, Y'),

  

    'CONS_STATUS_ARRAY' => [
        '1' => 'Enabled',
        '2' => 'Disabled',

    ],

    'CONS_SORTING_ARRAY' => [
        '30' => '30 Per Page Record',
        '50' => '50 Per Page Record ',
        '100' => '100 Per Page Record',
        '200' => '200 Per Page Record',
        '300' => '300 Per Page Record',
        '400' => '400 Per Page Record',
        '500' => '500 Per Page Record',

    ],


  
    'CONS_SOCIALWALLS_TYPE_ARRAY' => [
        'Facebook' => 'Facebook',
        'Instagram' => 'Instagram',
        'Twitter' => 'Twitter',
    ],

    'CONS_FORMAT_TYPE_ARRAY' => [
        'image' => 'Image',
        'video' => 'Video',

    ],

    'CONS_YES_NO_ARRAY' => [
        '2' => 'No',
        '1' => 'Yes',

    ],

    'CONS_CONTACT_STATUS_ARRAY' => [
        'Pending' => 'Pending',
        'Checked' => 'Checked',
    ],


    'CONS_YES_NO2_ARRAY' => [
        '0' => 'No',
        '1' => 'Yes',

    ],
    // Config::get('constants.CONS_STOCK_TYPE_ARRAY') sample code call
];
