<?php
/**
 * @name MsgController
 * @author itcast
 * @desc 留言控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class MsgController extends BaseController
{
	//列表
	public function indexAction() 
	{
		#1.获取所有数据
		$msgs = (new MsgModel)->get('select * from msg');
		#2.加载视图并传递数据
		$this->getView()->assign('msgs', $msgs);
	    echo $this->getView()->render('msg/index.phtml');
		#默认 return true 自动加载视图
		#通过 return false 禁止加载
		#return true;
		return false;
	}

	public function addAction()
	{
		if($this->getRequest()->isPost()){
			$uname=$this->getRequest()->getPost('uname');
			$content=$this->getRequest()->getPost('content');
			$rs=(new MsgModel)->add("insert into msg (uname,content,created_at) values('{$uname}','{$content}',".time().")");
			if($rs){
				$this->success('/msg/index','添加成功');
			}else{
				$this->error('/msg/index','添加失败');
			}
		}
	}
}
