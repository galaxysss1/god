<?php

return [
    'm'                                                                                    => 'site/m',

    'category/<category:\\w+>/article/<year:\\d{4}>/<month:\\d{2}>/<day:\\d{2}>/<id:\\w+>' => 'page/article',

    'upload/upload'                                                                        => 'upload/upload',

    'news/<year:\\d{4}>/<month:\\d{2}>/<day:\\d{2}>/<id:\\w+>'                             => 'page/news_item',

    'password/recover'                                                                     => 'auth/password_recover',
    'password/recover/activate/<code:\\w+>'                                                => 'auth/password_recover_activate',
    'registration'                                                                         => 'auth/registration',
    'registrationActivate/<code:\\w+>'                                                     => 'auth/registration_activate',
    'login'                                                                                => 'auth/login',
    'loginAjax'                                                                            => 'auth/login_ajax',
    'logout'                                                                               => 'auth/logout',
    'auth'                                                                                 => 'auth/auth',

    'category/<id:\\w+>'                                                                   => 'page/category',


    '/'                                                                                    => 'site/index',
    'contact'                                                                              => 'site/contact',
    'clear'                                                                                => 'site/clear',
    'about'                                                                                => 'site/about',
    'captcha'                                                                              => 'site/captcha',
    'log'                                                                                  => 'site/log',

    'calendar'                                                                             => 'calendar/index',
    'calendar/friends'                                                                     => 'calendar/friends',
    'calendar/friends/vkontakte'                                                           => 'calendar/friends_vkontakte',
    'calendar/save'                                                                        => 'calendar/save',
    'calendar/cache/show'                                                                  => 'calendar/cache_show',
    'calendar/cache/delete'                                                                => 'calendar/cache_delete',
    'calendar/moon'                                                                        => 'calendar/moon',
    'calendar/colkin'                                                                      => 'calendar/colkin',
    'calendar/colkin/more'                                                                 => 'calendar/colkin_more',

    'moderator/unionList'                                                                  => 'moderator_unions/index',
    'moderator/unionList/<id:\\d+>/accept'                                                 => 'moderator_unions/accept',
    'moderator/unionList/<id:\\d+>/reject'                                                 => 'moderator_unions/reject',
    'moderator/unionList/<id:\\d+>/delete'                                                 => 'moderator_unions/delete',

    'admin/serviceList'                                                                    => 'admin_service/index',
    'admin/serviceList/add'                                                                => 'admin_service/add',
    'admin/serviceList/<id:\\d+>/delete'                                                   => 'admin_service/delete',
    'admin/serviceList/<id:\\d+>/edit'                                                     => 'admin_service/edit',

    'admin/news'                                                                           => 'admin/news',
    'admin/news/add'                                                                       => 'admin/news_add',
    'admin/news/<id:\\d+>/delete'                                                          => 'admin/news_delete',
    'admin/news/<id:\\d+>/edit'                                                            => 'admin/news_edit',
    'admin/chennelingList'                                                                 => 'admin/chenneling_list',
    'admin/chennelingList/add'                                                             => 'admin/chenneling_list_add',
    'admin/chennelingList/addFromPage'                                                     => 'admin/chenneling_list_add_from_page',
    'admin/chennelingList/<id:\\d+>/delete'                                                => 'admin/chenneling_list_delete',
    'admin/chennelingList/<id:\\d+>/edit'                                                  => 'admin/chenneling_list_edit',

    'admin/articleList'                                                                    => 'admin_article/index',
    'admin/articleList/add'                                                                => 'admin_article/add',
    'admin/articleList/addFromPage'                                                        => 'admin_article/add_from_page',
    'admin/articleList/<id:\\d+>/delete'                                                   => 'admin_article/delete',
    'admin/articleList/<id:\\d+>/edit'                                                     => 'admin_article/edit',

    'admin/categoryList'                                                                   => 'admin_category/index',
    'admin/categoryList/add'                                                               => 'admin_category/add',
    'admin/categoryList/<id:\\d+>/delete'                                                  => 'admin_category/delete',
    'admin/categoryList/<id:\\d+>/edit'                                                    => 'admin_category/edit',

    'cabinet/officeList/<unionId:\\d+>'                                                    => 'cabinet_office/index',
    'cabinet/officeList/<unionId:\\d+>/add'                                                => 'cabinet_office/add',
    'cabinet/officeList/<id:\\d+>/delete'                                                  => 'cabinet_office/delete',
    'cabinet/officeList/<id:\\d+>/edit'                                                    => 'cabinet_office/edit',

    'house'                                                                                => 'page/house',
    'mission'                                                                              => 'page/mission',
    'medical'                                                                              => 'page/medical',
    'up'                                                                                   => 'page/up',
    'study'                                                                                => 'page/study',
    'study/add'                                                                            => 'page_add/study',
    'time'                                                                                 => 'page/time',
    'language'                                                                             => 'page/language',
    'language/article/<id:\\w+>'                                                           => 'page/language_article',
    'energy'                                                                               => 'page/energy',
    'money'                                                                                => 'page/money',
    'food'                                                                                 => 'page/food',
    'food/<id:\\d+>'                                                                       => 'page/food_item',
    'category/<category:\\w+>/<id:\\d+>'                                                   => 'page/union_item',
    'forgive'                                                                              => 'page/forgive',
    'tv'                                                                                   => 'page/tv',
    'declaration'                                                                          => 'page/declaration',
    'residence'                                                                            => 'page/residence',
    'pledge'                                                                               => 'page/pledge',
    'program'                                                                              => 'page/program',
    'clothes'                                                                              => 'page/clothes',
    'portals'                                                                              => 'page/portals',
    'arts'                                                                                 => 'page/arts',
    'idea'                                                                                 => 'page/idea',
    'codex'                                                                                => 'page/codex',
    'music'                                                                                => 'page/music',
    'services'                                                                             => 'page/services',
    'services/<id:\\d+>'                                                                   => 'page/services_item',
    'page/<action>'                                                                        => 'page/<action>',

    'comment/send'                                                                         => 'comment/send',

    'news'                                                                                 => 'page/news',
    'chenneling'                                                                           => 'page/chenneling',
    'chenneling/<year:\\d{4}>/<month:\\d{2}>/<day:\\d{2}>/<id:\\w+>'                       => 'page/chenneling_item',

    'place/town'                                                                           => 'site/place_town',
    'place/region'                                                                         => 'site/place_region',
    'place/country'                                                                        => 'site/place_country',

    'test'                                                                                 => 'site/test',

    'objects'                                                                              => 'cabinet/objects',
    'objects/<id:\\d+>/edit'                                                               => 'cabinet/objects_edit',
    'objects/add'                                                                          => 'cabinet/objects_add',
    'objects/<id:\\d+>/delete'                                                             => 'cabinet/objects_delete',

    'cabinet/passwordChange'                                                               => 'cabinet/password_change',
    'cabinet/profile'                                                                      => 'cabinet/profile',
    'cabinet/mindMap'                                                                      => 'cabinet/mind_map',
    'cabinet/poseleniya'                                                                   => 'cabinet/poseleniya',
    'cabinet/poseleniya/add'                                                               => 'cabinet/poseleniya_add',
    'cabinet/poseleniya/<id:\\d+>/edit'                                                    => 'cabinet/poseleniya_edit',
    'cabinet/poseleniya/<id:\\d+>/delete'                                                  => 'cabinet/poseleniya_delete',

];