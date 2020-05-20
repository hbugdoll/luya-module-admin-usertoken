<?php

namespace luya\admin\usertoken\apis;

/**
 * App Controller.
 * 
 * File has been created with `crud/create` command. 
 */
class AppController extends \luya\admin\ngrest\base\Api
{
    /**
     * @var string The path to the model which is the provider for the rules and fields.
     */
    public $modelClass = 'luya\admin\usertoken\models\App';
}