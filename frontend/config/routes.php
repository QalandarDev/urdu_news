<?php

return [
    ['pattern' => 'yandex', 'route' => 'yandexTurbo/yandex-turbo/index', 'suffix' => '.xml'],
    'news/<id:\d+>' => 'news/index',
    'news/list' => 'news/index',
	'transfer/noturdosh'=>'transfer/turdosh',
    ['pattern' => 'sitemap', 'route' => 'sitemap/default/index', 'suffix' => '.xml'],
	'https://<salom:[\w\-]+>.urdu.uz/isop'=>'site/sinus',
];
