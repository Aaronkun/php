<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg extends CI_Controller 
{
	public function index()
	{
		#步骤1：加载指定模型
		$this->load->model('MsgModel');
		$msgs = $this->MsgModel->all();
		#步骤3：加载视图并传递数据
		$this->load->view('msg/index', compact('msgs'));
	}

	public function add()
	{
		if(IS_POST)
		{
			$postData=$this->input->post();
			$this->load->model('MsgModel');
			$postData['created_at']=$postData['updated_at']=time();
			$rs=$this->MsgModel->add($postData);
			if($rs)
			{
				echo "<script>alert('插入成功');location.href='".site_url('msg/index')."'</script>";
			}else
			{
				echo "<script>alert('插入失败');location.href='".site_url('msg/index')."'</script>";
			}
		}
	}
}
