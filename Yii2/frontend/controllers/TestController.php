<?php
namespace frontend\controllers;

use Yii;
use common\models\T1;
use yii\web\Controller;

/**
 * Test controller
 */
class TestController extends Controller
{
    public $layout=false;
    public function actionIndex()
    {
        $t1=new T1;
        $t1->uname='abc';
        $t1->pwd='abc123';
        $rs=$t1->save();
        echo $t1->id;
        var_dump($rs);
    }
    public function actionAdd()
    {
        echo 'bbbb';
    }
}
