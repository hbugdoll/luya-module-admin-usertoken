<?php

namespace luya\admin\usertoken;

use luya\admin\base\Module as BaseModule;

class Module extends BaseModule
{
    public $apis = [
        'api-usertoken-app' => 'luya\admin\usertoken\apis\AppController',
        'api-usertoken-login' => 'luya\admin\usertoken\apis\LoginController',
        'api-usertoken-token' => 'luya\admin\usertoken\apis\TokenController',

    ];

    public $apiRules = [
        'api-usertoken-login' => [
            'patterns' => [
                'POST' => 'index',
            ]
        ],
    ];
    
    public function getMenu()
    {
        return (new \luya\admin\components\AdminMenuBuilder($this))
            ->node('User Tokens', 'lock')
                ->group('Group')
                    ->itemApi('Apps', 'usertoken/app/index', 'apps', 'api-usertoken-app')
                    ->itemApi('Login Tokens', 'usertoken/token/index', 'lock', 'api-usertoken-token');
    }

}