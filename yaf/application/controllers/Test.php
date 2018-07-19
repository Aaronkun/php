<?php 

class TestController extends Yaf_Controller_Abstract {

	public function indexAction()
	{
		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];
		
		$this->getView()->assign('data1',$data1);
		$this->getView()->assign('data2',$data2);
		$this->getView()->assign('data3',$data3);
		$this->getView()->render('test/index.phtml');
	}
	public function addAction()
	{
		// $t4=new T4Model();
		// $t4s=$t4->get('select * from t4');
		// foreach($t4s as $t4){
		// 	echo $t4['id'].'__'.$t4['uname'].'<br>';
		// }
		// echo '<pre>';
		// print_r($t4s);
		// die;
		
		//插入数据 
		$t4 = new T4Model();
		#插入数据
		$rs = $t4->add('insert into t4 (uname,pwd) values ("aaa", "bbb")');
		var_dump($rs);
		die;

	}
}