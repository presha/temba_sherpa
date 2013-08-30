<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	        parent::__construct();
	        session_start();
	    }
	public function index()
	{
		$this->load->helper('url');
		if(isset($_SESSION['username'])){
			redirect('welcome');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('admin_name','Email Address','required|valid_email');
		$this->form_validation->set_rules('admin_password','Password','required|min_length[4]');
		if($this->form_validation->run()!==false){
			$this->load->model('admin_model');
			$res=$this
			->admin_model
			->verify_user(
				$this->input->post('admin_name'), 
				$this->input->post('admin_password'));

			if($res!==false){
				//user has an account
				$_SESSION['username']=$this->input->post('admin_name');
				echo $_SESSION['username'];
				// die();
				redirect('welcome');
			}
			else{
				echo "password is incorrect";
			}
		}
		$this->load->view('login_view');

	}

	public function edit(){
		$this->load->model('admin_model');
		$data['main_content']='edit_password';
		$this->load->view('includes/template',$data);
	}

	public function change_password(){
		$this->load->helper('url');
		 if( !isset($_SESSION['username'])){
	        	echo "not set";
	        	redirect('admin');
	        }
		$this->load->library('form_validation');
		$this->form_validation->set_rules('new_password','Password','required|min_length[4]');
		$this->form_validation->set_rules('new_password2','Password Confirmation','required|min_length[4]|matches[new_password]');

			$this->load->model('admin_model');
			$res=$this
			->admin_model
			->verify_user(
				$this->input->post('admin_name'), 
				$this->input->post('admin_password'));

			if($res!==false){
				
				if($this->form_validation->run()==FALSE){
					echo "Confimed password doesn't match with the new password";
					
				}
				else{
					$data['new']=$this->admin_model->change_password();
					echo "Password has been changed succesfully";
					$data['main_content']='successful_password';
					$this->load->view('includes/template',$data);
				}
				//user has an account
				// $_SESSION['username']=$this->input->post('admin_name');
				// echo $_SESSION['username'];
				// // die();
				// redirect('welcome');
			}
			else{
				echo "incorrect password";
			}
			
	}

	public function logout(){
		session_destroy();
		$this->load->view('login_view');
	}

	public 	function email() 
	        { 
	        $config = Array(
	            'protocol' => 'smtp',
	            'smtp_host' => 'ssl://smtp.googlemail.com',
	            'smtp_port' => 465,
	            'smtp_user' => 'presharajbhandary@gmail.com',
	            'smtp_pass' => 'takegoodcare123',
	            );
	        $this->load->library('email',$config);
	        $this->email->set_newline("\r\n");

	        $this->email->from('presharajbhandary@gmail.com', 'Presha');
	        $this->email->to('amirmessi2010@gmail.com');  
	        $this->email->subject('Test from Presha. :P');  
	        $this->email->message('It is working. Great!  :)');
	        if($this->email->send()){
	        	echo "your email was sendd";
	        }
	        else{
	        	show_error($this->email->print_debugger());
	        }


	        }

	        function download(){
	        		$this->load->helper('download');
	        		$file=base_url()."images/gallery_image/Henna_Design_1.jpg";
	                $data = file_get_contents($file); // Read the file's contents
	                 echo($data);
	                $name = 'mehendi.jpg';

	                force_download($name, $data);
	            }

	         function sms(){
	         	// STEP 1
	         	    // prepare necessary parameters
	         	    $client_id = 'apisignup';
	         	    $username = 'presha';
	         	    $password = 'nIlS4FcX';
	         	 
	         	    $from = '';
	         	    $to = '9841801004';
	         	    $text = 'Amir makka sms ayo?they added me the credit.Testing sparrow sms. Presha';
	         	 
	         	    // STEP 2
	         	    // build the url
	         	    $api_url =  "http://api.sparrowsms.com/call_in.php?" . 
	         	                http_build_query(array(
	         	                    "client_id" => $client_id,
	         	                    "username" => $username,
	         	                    "password" => $password,
	         	                    "from" => $from,
	         	                    "to" => $to,
	         	                    "text" => $text
	         	                ));
	         	 
	         	    // STEP 2
	         	    // put the request to server
	         	    $response = file_get_contents($api_url);
	         	    // check the response and verify
	         	    print_r($response);
	         }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */