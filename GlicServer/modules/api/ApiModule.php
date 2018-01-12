<?php

namespace app\modules\api;

/**
 * api module definition class
 */
class ApiModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\api\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        header("Access-Control-Allow-Origin: *");
        parent::init();

        // custom initialization code goes here
    }
}
