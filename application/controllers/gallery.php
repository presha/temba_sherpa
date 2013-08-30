<?php 

class Gallery extends CI_Controller {

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
		$data['main_content']='gallery_form';
		$this->load->view('includes/template',$data, array('error' => ' ' ));
	}

	
	public function add()
	{
		$filename=$this->do_upload();
		$this->load->model('gallery_model');
		$data=$this->gallery_model->set_val($filename);
		$test['main_content']='success';
		$this->load->view('includes/template',$test);
	}

	function do_upload()
		{
			$this->load->helper('form');
			$this->load->helper('url');
			$config['upload_path'] = './images/gallery_image/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '90000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';

			$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload())
					{
						$error = array('error' => $this->upload->display_errors());
						$data['main_content']='gallery_form';
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
		$this->load->model('gallery_model');
		$data['gallery_data']=$this->gallery_model->get_image();
		$data['main_content']='gallery_view';
		$this->load->view('includes/template',$data);
	}

	public function delete($param1){
		// $this->load->model('gallery_image_model');
		// $data['data_gallery']=$this->gallery_image_model->view_gallery($param1);
	 //    $this->gallery_image_model->del_all_gallery($param1);
		$this->load->model('gallery_model');
		$this->gallery_model->del_gallery($param1);
		$data['gallery_data']=$this->gallery_model->get_image();
		$data['main_content']='gallery_view';
		$this->load->view('includes/template',$data);
	}
	public function edit($param)
	{	
		$this->load->model('gallery_model');
		$this->load->model('gallery_image_model');
		$data['gallery_images']=$this->gallery_image_model->view_gallery($param);
		$data['gallery_data']=$this->gallery_model->get_image($param);
		$data['main_content']='edit_gallery';
		$this->load->view('includes/template',$data);
	}

	public function edit_save(){
		$this->load->model('gallery_model');
		$this->gallery_model->save_edit();
		$data['gallery_data']=$this->gallery_model->get_image();
		$data['main_content']='gallery_view';
		$this->load->view('includes/template',$data);
	}
}
