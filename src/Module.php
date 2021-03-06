<?php
namespace mirocow\elasticsearch;

use mirocow\elasticsearch\controllers\index\IndexController;

class Module extends \yii\base\Module
{
    const VERSION = '1.0.6';

    const MODULE_NAME = 'elasticsearch';

    /** @var string[] */
    public $indexes;

    /** @var bool  */
    public $isDebug = false;

}
