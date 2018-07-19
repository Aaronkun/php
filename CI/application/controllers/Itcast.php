<?php
defined('BASEPATH') OR eit('No direct script access allowed');

class Itcast extends CI_Controller 
{
	public function index()
	{
		$this->load->model('t3');
		$t3s=$this->t3->all();
		foreach($t3s as $t3){
			echo $t3['id'].'_'.$t3['uname'].'<br>';
		}
		echo '<pre>';
		print_r($t3s);
	}

	//插入数据
	public function add()
	{
		$this->load->model('T1');
		$rs=$this->T1->add([
			'uname'=>'123fsdfa',
			'pwd'=>'djsafh'
		]);
		var_dump($rs);
	}

	public function test()
	{
		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];
		$this->load->view('itcast/test',compact('data1','data2','data3'));
	}
}
