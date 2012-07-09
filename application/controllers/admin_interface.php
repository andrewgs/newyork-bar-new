<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_interface extends CI_Controller{
	
	var $user = array('uid'=>0,'cid'=>0,'ufullname'=>'','ulogin'=>'','uemail'=>'');
	var $loginstatus = array('status'=>FALSE);
	var $months = array("01"=>"января","02"=>"февраля","03"=>"марта","04"=>"апреля","05"=>"мая","06"=>"июня","07"=>"июля","08"=>"августа","09"=>"сентября","10"=>"октября","11"=>"ноября","12"=>"декабря");
	
	function __construct(){
		
		parent::__construct();
		$this->load->model('mdusers');
		$this->load->model('mdfoodcategory');
		$this->load->model('mdfoods');
		$this->load->model('mdtextblock');
		
		$cookieuid = $this->session->userdata('logon');
		if(isset($cookieuid) and !empty($cookieuid)):
			$this->user['uid'] = $this->session->userdata('userid');
			if($this->user['uid']):
				$userinfo = $this->mdusers->read_record($this->user['uid']);
				if($userinfo):
					$this->user['ulogin'] 			= $userinfo['login'];
					$this->user['uemail'] 			= '';
					$this->loginstatus['status'] 	= TRUE;
				else:
					redirect('');
				endif;
			endif;
			
			if($this->session->userdata('logon') != md5($userinfo['login'])):
				$this->loginstatus['status'] = FALSE;
				redirect('');
			endif;
		else:
			redirect('');
		endif;
	}
	
	public function admin_panel(){
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'Панель администрирования',
					'baseurl' 		=> base_url(),
					'userinfo'		=> $this->user,
					'msgs'			=> $this->session->userdata('msgs'),
					'msgr'			=> $this->session->userdata('msgr')
			);
		$this->session->unset_userdata('msgs');
		$this->session->unset_userdata('msgr');
		
		$this->load->view("admin_interface/admin-panel",$pagevar);
	}
	
	public function admin_cabinet(){
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'Личный кабинет',
					'baseurl' 		=> base_url(),
					'userinfo'		=> $this->user
			);
		$this->load->view("admin_interface/admin-cabinet",$pagevar);
	}

	public function admin_logoff(){
		
		$this->session->sess_destroy();
		redirect('');
	}

	public function food_category_list(){
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'Панель администрирования - Категории блюд',
					'baseurl' 		=> base_url(),
					'userinfo'		=> $this->user,
					'fcategory'		=> $this->mdfoodcategory->read_records(),
					'msgs'			=> $this->session->userdata('msgs'),
					'msgr'			=> $this->session->userdata('msgr')
			);
		$this->session->unset_userdata('msgs');
		$this->session->unset_userdata('msgr');
		
		if($this->input->post('submit')):
			$_POST['submit'] = NULL;
			$this->form_validation->set_rules('title',' ','required|trim');
			$this->form_validation->set_rules('uri',' ','required|trim');
			if(!$this->form_validation->run()):
				$this->session->set_userdata('msgr','Ошибка при сохранении. Не заполены необходимые поля.');
			else:
				$id = $this->mdfoodcategory->insert_record($_POST);
				if($id):
					$this->session->set_userdata('msgs','Категория создана успешно.');
				endif;
			endif;
			redirect($this->uri->uri_string());
		endif;
		
		$this->load->view("admin_interface/admin-food-category-list",$pagevar);
	}
	
	public function food_category_info(){
		
		$cid = $this->uri->segment(5);
		$cname = $this->mdfoodcategory->read_field($cid,'title');
		if(empty($cname)) show_error('Внимание! Ошибка структуры БД или Вы ввели не верный ID категории');
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'Панель администрирования - '.$cname,
					'cname'			=> $cname,
					'baseurl' 		=> base_url(),
					'userinfo'		=> $this->user,
					'foods'			=> $this->mdfoods->read_records($cid),
					'msgs'			=> $this->session->userdata('msgs'),
					'msgr'			=> $this->session->userdata('msgr')
			);
		$this->session->unset_userdata('msgs');
		$this->session->unset_userdata('msgr');
		
		if($this->input->post('submit')):
			$_POST['submit'] = NULL;
			$this->form_validation->set_rules('title',' ','required|trim');
			$this->form_validation->set_rules('weight',' ','required|trim');
			$this->form_validation->set_rules('price',' ','required|trim');
			$this->form_validation->set_rules('composition',' ','trim');
			if(!$this->form_validation->run()):
				$this->session->set_userdata('msgr','Ошибка при сохранении. Не заполены необходимые поля.');
			else:
				$id = $this->mdfoods->insert_record($_POST,$cid);
				if($id):
					$this->session->set_userdata('msgs','Блюдо создано успешно.');
				endif;
			endif;
			redirect($this->uri->uri_string());
		endif;
		
		if($this->input->post('asubmit')):
			$_POST['asubmit'] = NULL;
			$this->form_validation->set_rules('idf',' ','required|trim');
			$this->form_validation->set_rules('title',' ','required|trim');
			$this->form_validation->set_rules('weight',' ','required|trim');
			$this->form_validation->set_rules('price',' ','required|trim');
			$this->form_validation->set_rules('composition',' ','trim');
			if(!$this->form_validation->run()):
				$this->session->set_userdata('msgr','Ошибка при сохранении. Не заполены необходимые поля.');
			else:
				$result = $this->mdfoods->update_record($_POST);
				if($result):
					$this->session->set_userdata('msgs','Блюдо сохранено успешно.');
				endif;
			endif;
			redirect($this->uri->uri_string());
		endif;
		
		$this->load->view("admin_interface/admin-food-category-info",$pagevar);
	}
	
	public function food_category_delete(){
		
		$cFood = $this->uri->segment(5);
		$result = $this->mdfoodcategory->delete_record($cFood);
		if($result):
			$this->mdfoods->delete_records($cFood);
			$this->session->set_userdata('msgs','Категория удалено успешно.');
		else:
			$this->session->set_userdata('msgr','Категория не удалено.');
		endif;
		redirect('admin-panel/actions/food-category/list');
	}
	
	public function food_delete(){
		
		$Food = $this->uri->segment(7);
		$result = $this->mdfoods->delete_record($Food);
		if($result):
			$this->session->set_userdata('msgs','Блюдо удалено успешно.');
		else:
			$this->session->set_userdata('msgr','Блюдо не удалено.');
		endif;
		redirect('admin-panel/actions/food-category/id/'.$this->uri->segment(5));
	}
	
	public function edit_text_block(){
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'Панель администрирования',
					'baseurl' 		=> base_url(),
					'userinfo'		=> $this->user,
					'textblock'		=> '',
					'tblocktitle'	=> '',
					'msgs'			=> $this->session->userdata('msgs'),
					'msgr'			=> $this->session->userdata('msgr')
			);
		$this->session->unset_userdata('msgs');
		$this->session->unset_userdata('msgr');
		$textid = FALSE;
		switch ($this->uri->segment(4)):
			case 'menu' : 	$pagevar['textblock'] = $this->mdtextblock->read_field(1,'textblock'); 
							$pagevar['tblocktitle'] = 'Редактирование текстового блока "Меню"';
							$textid = 1; 
							break;
			case 'about' : 	$pagevar['textblock'] = $this->mdtextblock->read_field(2,'textblock'); 
							$pagevar['tblocktitle'] = 'Редактирование текстового блока "О ресторане"';
							$textid = 2;
							break;
				default :	show_404();
							break;
		endswitch;
		
		if($this->input->post('submit')):
			$_POST['submit'] = NULL;
			$this->form_validation->set_rules('textblock',' ','trim');
			if(!$this->form_validation->run()):
			else:
				$result = $this->mdtextblock->update_record($textid,$_POST);
				if($result):
					$this->session->set_userdata('msgs','Текст сохранен.');
				endif;
			endif;
			redirect($this->uri->uri_string());
		endif;
		
		$this->load->view("admin_interface/admin-text-block",$pagevar);
	}
	
	/******************************************************** functions ******************************************************/	
	
	public function fileupload($userfile,$overwrite,$catalog){
		
		$config['upload_path'] 		= './documents/'.$catalog.'/';
		$config['allowed_types'] 	= 'doc|docx|xls|xlsx|txt|pdf';
		$config['remove_spaces'] 	= TRUE;
		$config['overwrite'] 		= $overwrite;
		
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload($userfile)):
			return FALSE;
		endif;
		
		return TRUE;
	}

	public function filedelete($file){
		
		if(is_file($file)):
			@unlink($file);
			return TRUE;
		else:
			return FALSE;
		endif;
	}

	public function operation_date($field){
			
		$list = preg_split("/-/",$field);
		$nmonth = $this->months[$list[1]];
		$pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
		$replacement = "\$5 $nmonth \$1 г."; 
		return preg_replace($pattern, $replacement,$field);
	}
	
	public function split_date($field){
			
		$list = preg_split("/-/",$field);
		$nmonth = $this->months[$list[1]];
		$pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
		$replacement = "\$5 $nmonth \$1"; 
		return preg_replace($pattern, $replacement,$field);
	}
	
	public function split_dot_date($field){
			
		$list = preg_split("/\./",$field);
		$nmonth = $this->months[$list[1]];
		$pattern = "/(\d+)(\.)(\w+)(\.)(\d+)/i";
		$replacement = "\$1 $nmonth \$5"; 
		return preg_replace($pattern, $replacement,$field);
	}
	
	public function operation_dot_date($field){
			
		$list = preg_split("/-/",$field);
		$pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
		$replacement = "\$5.$3.\$1"; 
		return preg_replace($pattern, $replacement,$field);
	}
}