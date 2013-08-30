<?php 

class Gallery_image extends CI_Controller {

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
		$this->load->model('gallery_model');
		$data['gallery_data']=$this->gallery_model->get_image();
		$data['main_content']='gallery_image_form';
		$this->load->view('includes/template',$data, array('error' => ' ' ));
	}

	
	public function add()
	{
		$filename1=$this->do_upload("userfile1");
		$filename2=$this->do_upload("userfile2");
		$filename3=$this->do_upload("userfile3");
		$filename4=$this->do_upload("userfile4");
		$filename5=$this->do_upload("userfile5");
		$caption1=$this->input->post('image_caption1');
		$caption2=$this->input->post('image_caption2');
		$caption3=$this->input->post('image_caption3');
		$caption4=$this->input->post('image_caption4');
		$caption5=$this->input->post('image_caption5');
		for($i=1;$i<=5;$i++){
			$filename=${"filename".$i};
			if($filename==NULL){
				echo $filename.$i." is not given";
			}
			else{
			$caption=${"caption".$i};
			$this->load->model('gallery_image_model');
			$data=$this->gallery_image_model->set_val($filename,$caption);
			}
		}
		
		$test['main_content']='success';
		$this->load->view('includes/template',$test);
	}

	function do_upload($param)
		{
			$this->load->helper('form');
			$this->load->helper('url');
			$config['upload_path'] = './images/gallery_image/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '90000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';

			$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload($param))
					{
						$error = array('error' => $this->upload->display_errors());
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						foreach ($data as $key) {
							$path=$key['file_name'];
						}
						return $path;

						// $this->load->view('upload_success', $data);
					}
					
				
		}

	// public function view()
	// {	
	// 	$this->load->model('gallery_model');
	// 	$data['gallery_data']=$this->gallery_model->get_image();
	// 	$this->load->view('gallery_view',$data);
	// }

	public function delete($param1){
		$this->load->model('gallery_image_model');
		$this->load->model('gallery_model');
		$id=$this->gallery_image_model->del_image($param1);
		redirect('gallery/edit/'.$id);
		// $data['gallery_images']=$this->gallery_image_model->view_gallery($param1);
		// $data['gallery_data']=$this->gallery_model->get_image($param1);
		$this->load->view('edit_gallery');
	}
	
}
