<?php
return [
    'name' => "Webmaster",
    'title' => "Webmaster",
    'subtitle' => 'Webmaster Guide',
    'description' => 'Google Webmaster Guide',
    'author' => 'misterebs',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];

