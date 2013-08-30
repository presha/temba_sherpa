<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
	public function verify_user($email,$password)
	{
		$q=$this
		->db
		->where('admin_name',$email)
		->where('admin_password',sha1($password))
		->limit(1)
		->get('tbl_admin');
		if($q->num_rows()>0){
			return $q->row();
		}
		return false;
	}

	public function get_password()
	{
		
	}

	public function change_password(){
		$password=sha1($this->input->post('new_password'));
		$data=array(
				'admin_password'=> $password
				);
			 $q=$this->db->where('admin_name',$_SESSION['username']);
			 $this->db->update('tbl_admin',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */