<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UI extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	    {
	     	session_start();
            parent::__construct();  
            $this->load->model('gallery_model');
            $this->load->model('gallery_image_model');
	    }
	public function index()
	{
		
		$this->load->helper('url');
		$data['main_content']='home_ui';
		$this->load->view('home');

	}

	public function resume()
	{
		$this->load->helper('url');
		$this->load->view('resume');
	}

	public function gallery(){
		$data['gallery_data']=$this->gallery_model->get_image();
		$this->load->view('gallery',$data);
	}

	public function gallery_image($param){
		$data['gallery_images']=$this->gallery_image_model->view_gallery($param);	
		$this->load->view('gallery_image',$data);
	}

	public function add_comment(){
		$email=$this->input->post('email');
		$name=$this->input->post('name');
		$subject=$this->input->post('subject');
		$message=$this->input->post('comment');
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'barahajewellery31@gmail.com',
		    'smtp_pass' => 'udansoftware',
		    );
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$this->email->from($email, $name);
		$this->email->to('barahajewellery31@gmail.com');  
		$this->email->subject($subject);  
		$this->email->message($message);
		if($this->email->send()){
			echo "your email was send";
		}
		else{
			show_error($this->email->print_debugger());
		}
		redirect('ui/index');
	}
}