<?php

return [

    //News Controller
    'news/<id:\d+>' => 'news/view',
    'news/c/<c:\d+>/<page:\d+>' => 'news/index',
    'news/c/<c:\d+>' => 'news/index',
    'news/p/<page:\d+>' => 'news/index',
    'news' => 'news/index',
    //Events Controller
    'events/<id:\d+>'=>'events/view',
    'events/p/<page:\d+>' => 'events/index',
    'events'=>'events/index',
    //Page Controller
    'history'=>'page/history',
    'regulation'=>'page/regulation',
    'administration'=>'page/administration',
    'administration/<id:\d+>'=>'page/adminstration-team',
    'faculties'=>'page/faculties',
    'faculty/<id:\d+>'=>'page/faculty',
    'faculty/<id:\d+>/about'=>'page/faculty-about',
    'faculty/<id:\d+>/news'=>'page/faculty-news',
    'faculty/<id:\d+>/info'=>'page/faculty-info',
    'faculty/<faculty:\d+>/employee/<employee:\d+>'=>'page/faculty-employee',

    'transfer/noturdosh' => 'transfer/turdosh',
    ['pattern' => 'sitemap', 'route' => 'sitemap/default/index', 'suffix' => '.xml'],
    'https://<salom:[\w\-]+>.urdu.uz/isop' => 'site/sinus',
    ['pattern' => 'yandex', 'route' => 'yandexTurbo/yandex-turbo/index', 'suffix' => '.xml'],
];
