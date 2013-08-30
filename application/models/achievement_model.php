<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Achievement_model extends CI_Model {

	// public function __constructor(){
	// 	$this->load->database();
	// }


	public function set_val($filename){
		$this->load->helper('url');
		$data=array(
			'achievement_title'=> $this->input->post('achievement_title'),
			'achievement_desc'=> $this->input->post('achievement_desc'),
			'achievement_photo'=>$filename,
			'enable_disable'=> $this->input->post('enable_disable'),
			'achievement_date'=>$this->input->post('achievement_date'),
			'last_modified_date'=> date('Y-m-d H:i:s'),
			'created_date'=> date('Y-m-d H:i:s') 
			);
		return $this->db->insert('tbl_achievement', $data);
	}

	public function get_achievement($param=FALSE){
			if($param===FALSE){
				$query = $this->db->get('tbl_achievement');
				return $query->result_array();
			}
		$query=$this->db->get_where('tbl_achievement',array('achievement_id'=>$param));
		return $query->row_array();
	}

	public function view_achievement($param){
		$query=$this->db->get_where('tbl_achievement',array('achievement_id'=>$param));
		return $query->result_array();
	}

	public function del_img(){
		$id=$this->input->post('dummy');
		$query=$this->db->get_where('tbl_achievement',array('achievement_id'=>$id));
		foreach($query->result_array() as $row){
			echo $row['achievement_photo'];
			$achievement_id=$row['achievement_id'];
			$path = "./images/achievement_image/".$row['achievement_photo'];
		} ;
		if(unlink($path)) {
			echo "images deleted";
		}
		else {
			echo "images not deleted";

		}
		$data=array('achievement_photo'=>'');
		 $q=$this->db->where('achievement_id',$id);
		 $this->db->update('tbl_achievement',$data);

	}

	public function save_edit($param=FALSE){
		$id= $this->input->post('dummy');
		echo $id;
		if($param===FALSE){
			$data=array(
			'achievement_title'=> $this->input->post('achievement_title'),
			'achievement_desc'=>$this->input->post('achievement_desc'),
			'enable_disable'=> $this->input->post('enable_disable'),
			'achievement_date'=>$this->input->post('achievement_date'),
			'last_modified_date'=> date('Y-m-d H:i:s')
			);
		}
		else{
			$data=array(
			'achievement_title'=> $this->input->post('achievement_title'),
			'achievement_desc'=>$this->input->post('achievement_desc'),
			'enable_disable'=> $this->input->post('enable_disable'),
			'achievement_date'=>$this->input->post('achievement_date'),
			'last_modified_date'=> date('Y-m-d H:i:s'),
			'achievement_photo'=>$param
			);
		}
		
		 $q=$this->db->where('achievement_id',$id);
		 $this->db->update('tbl_achievement',$data);
	}

	public function delete($id){
		$query=$this->db->get_where('tbl_achievement',array('achievement_id'=>$id));
		foreach($query->result_array() as $row){
			echo $row['achievement_photo'];
			$achievement_id=$row['achievement_id'];
			$path = "./images/achievement_image/".$row['achievement_photo'];
		} ;
		$this->load->helper("file");
		if(unlink($path)) {
			echo "images deleted";
		}
		else {
			echo "images not deleted";

		}
		$this->db->delete('tbl_achievement', array('achievement_id' => $id));
		return $achievement_id;
	}

	// public function del_all_achievement($id){
	// 	$this->load->helper("file");
	// 	$query=$this->db->get_where('tbl_achievement',array('achievement_id'=>$id));
	// 	foreach($query->result_array() as $row){
	// 		echo $row['image_path'];
	// 		$path = "./images/achievement_image/".$row['image_path'];
	// 		if(unlink($path)) {
	// 		echo "images deleted";
	// 	}
	// 	else {
	// 		echo "images not deleted";

	// 	}
	// 	} ;
		
		
	// 	$this->db->delete('tbl_achievement', array('achievement_id' => $id));
	// }

}