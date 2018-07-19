<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Msg;

class MsgController extends Controller
{
	public $layout=false;
	public $enableCsrfValidation=false;
	public function actionIndex()
	{
		//获取留言表数据
		$msgs=Msg::find()->all();
		return $this->render('index',compact('msgs'));
	}

	public function actionAdd()
	{
		if(Yii::$app->request->isPost)
		{
			$uname=Yii::$app->request->post('uname');
			$content=Yii::$app->request->post('content');
			$msg=new Msg;
			$msg->uname=$uname;
			$msg->content=$content;
			$msg->created_at=$msg->updated_at=time();
			$rs=$msg->save();
			$this->redirect(['/msg']);
		}
	}
}