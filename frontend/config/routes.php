<?php

return [

    //News Controller
    'news/<id:\d+>' => 'news/view',
    'news/c/<c:\d+>/<page:\d+>' => 'news/index',
    'news/c/<c:\d+>' => 'news/index',
    'news/p/<page:\d+>' => 'news/index',
    'news' => 'news/index',
    //Events Controller
    'events/<id:\d+>' => 'events/view',
    'events/p/<page:\d+>' => 'events/index',
    'events' => 'events/index',
    //Page Controller
    'history' => 'page/history',
    'regulation' => 'page/regulation',
    'administration' => 'page/administration',
    'administration/<id:\d+>' => 'page/adminstration-team',
    //Faculty Controller
    'faculties' => 'faculty/index',
    'faculty/<id:\d+>' => 'faculty/view',
    'faculty/<id:\d+>/about' => 'faculty/about',
    'faculty/<id:\d+>/employee/<employee:\d+>' => 'faculty/employee',
    'faculty/<id:\d+>/news/<page:\d+>' => 'faculty/news',
    'faculty/<id:\d+>/news' => 'faculty/news',
    'faculty/<id:\d+>/open' => 'faculty/open',
    //Department Controller
    'departments' => 'department/index',
    'department/<id:\d+>' => 'department/view',
    'department/<id:\d+>/about' => 'department/about',
    'department/<id:\d+>/employee/<employee:\d+>' => 'department/employee',
    'department/<id:\d+>/news/<page:\d+>' => 'department/news',
    'department/<id:\d+>/news' => 'department/news',
    'department/<id:\d+>/scientific' => 'department/scientific',
    //Center Controller
    'centers' => 'center/index',
    'center/<id:\d+>' => 'center/view',
    'center/<id:\d+>/about' => 'center/about',
    'center/<id:\d+>/employee/<employee:\d+>' => 'center/employee',
    'center/<id:\d+>/news/<page:\d+>' => 'center/news',
    'center/<id:\d+>/news' => 'center/news',
    //Activity Controller
    'academic' => 'activity/academic',
    'scientific' => 'activity/scientific',
    'spiritual' => 'activity/spiritual',
    'international' => 'activity/international',
    'financial' => 'activity/financial',
    //Page Controller
    'page/<id:\d+>' => 'page/view',
    //SiteMap Controller
    ['pattern' => 'sitemap', 'route' => 'sitemap/default/index', 'suffix' => '.xml'],
];
