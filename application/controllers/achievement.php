<?php 

class Achievement extends CI_Controller {

	public function __construct()
	    {
	        
        	session_start();
            parent::__construct();
            if( !isset($_SESSION['username'])){
            	echo "not set";
            	redirect('admin');
            }
	    }

	public function index()
	{
		$data['main_content']='achievement_form';
		$this->load->view('includes/template',$data, array('error' => ' ' ));
	}

	
	public function add()
	{
		$filename=$this->do_upload();
		$this->load->model('achievement_model');
		$data=$this->achievement_model->set_val($filename);
		$test['main_content']='success';
		$this->load->view('includes/template',$test);
	}

	function do_upload()
		{
			$this->load->helper('form');
			$this->load->helper('url');
			$config['upload_path'] = './images/achievement_image/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '90000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';

			$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload())
					{
						$error = array('error' => $this->upload->display_errors());
						$data['main_content']='achievement_form';
						$this->load->view('includes/template',$data, array('error' => ' ' ));
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						foreach ($data as $key) {
							$path=$key['file_name'];
						}
						return $path;
					}
					
				
		}

	public function view()
	{	
		$this->load->model('achievement_model');
		$data['achievement_data']=$this->achievement_model->get_achievement();
		$data['main_content']='achievement_view';
		$this->load->view('includes/template',$data);
	}

	public function delete($param1){
		$this->load->model('achievement_model');
		$this->achievement_model->delete($param1);
		$data['achievement_data']=$this->achievement_model->get_achievement();
		$data['main_content']='achievement_view';
		$this->load->view('includes/template',$data);
	}
	public function edit($param)
	{	
		$this->load->model('achievement_model');
		$data['achievement_data']=$this->achievement_model->get_achievement($param);
		$data['main_content']='edit_achievement';
		$this->load->view('includes/template',$data);
	}

	public function edit_save(){
		$this->load->model('achievement_model');
		$dummy=$this->input->post('dummy1');
		if($dummy==1){
			$this->achievement_model->del_img();
			$filename=$this->do_upload();
			$this->achievement_model->save_edit($filename);
		}
		else{
			$this->achievement_model->save_edit();
		}
		
		$data['achievement_data']=$this->achievement_model->get_achievement();
		$data['main_content']='achievement_view';
		$this->load->view('includes/template',$data);
	}
}
