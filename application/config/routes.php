<?php

return [
    'public_html' =>[
        'controller' => 'main',
        'action' => 'start',
    ],
    'main/start' =>[
        'controller' => 'main',
        'action' => 'start',
    ],
    'greeting' =>[
        'controller' => 'main',
        'action' => 'greeting',
    ],
    'main/search' =>[
        'controller' => 'main',
        'action' => 'search',
    ],
    'main/register' => [
        'controller' => 'main',
        'action' => 'register',
    ],
    'main/login' => [
        'controller' => 'main',
        'action' => 'login',
    ],
    'account/signup' => [
        'controller' => 'account',
        'action' => 'signup',
    ],
    'account/auth' => [
        'controller' => 'account',
        'action' => 'auth',
    ],
    'account/signed' => [
        'controller' => 'account',
        'action' => 'signed',
    ],
    'account/delete' => [
        'controller' => 'account',
        'action' => 'delete',
    ],
    'account/changePass' => [
        'controller' => 'account',
        'action' => 'changePass',
    ],
    'newpass' => [
        'controller' => 'account',
        'action' => 'newpass',
    ],
    'logout' => [
        'controller' => 'account',
        'action' => 'logout',
    ],
    'news/show' => [
        'controller' => 'news',
        'action' => 'show',
    ],
    'news/list' => [
        'controller' => 'news',
        'action' => 'list',
    ],
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/register' => [
        'controller' => 'admin',
        'action' => 'register',
    ],
    'search' => [
        'controller' => 'main',
        'action' => 'search',
    ]
    ];