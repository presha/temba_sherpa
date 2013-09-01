<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_image_model extends CI_Model {

	// public function __constructor(){
	// 	$this->load->database();
	// }


	public function set_val($filename,$caption){
		$this->load->helper('url');
		echo $caption;
		$data=array(
			'gallery_id'=> $this->input->post('gallery_id'),
			'image_path'=>$filename,
			'image_caption'=>$caption
			// 'gallery_name'=> $this->input->post('gallery_name'),
			// 'enable_disable'=> $this->input->post('enable_disable')
			);
		return $this->db->insert('tbl_image', $data);
	}

	public function get_image($param=FALSE){
			if($param===FALSE){
				$query = $this->db->get('tbl_image');
				return $query->result_array();
			}
		$query=$this->db->get_where('tbl_image',array('gallery_id'=>$param));
		return $query->result_array();
	}

	public function view_gallery($param){
		$query=$this->db->get_where('tbl_image',array('gallery_id'=>$param));
		return $query->result_array();
	}


	public function save_edit(){
		$id= $this->input->post('dummy');
		echo $id;
		$data=array(
			'gallery_name'=> $this->input->post('gallery_name'),
			'enable_disable'=> $this->input->post('enable_disable')
			);
		 $q=$this->db->where('gallery_id',$id);
		 $this->db->update('tbl_gallery_name',$data);
	}

	public function del_image($id){
		$query=$this->db->get_where('tbl_image',array('image_id'=>$id));
		foreach($query->result_array() as $row){
			echo $row['image_path'];
			$gallery_id=$row['gallery_id'];
			$path = "./images/gallery_image/".$row['image_path'];
		} ;
		$this->load->helper("file");
		if(unlink($path)) {
			echo "images deleted";
		}
		else {
			echo "images not deleted";

		}
		$this->db->delete('tbl_image', array('image_id' => $id));
		return $gallery_id;
	}

	public function del_all_gallery($id){
		$this->load->helper("file");
		$query=$this->db->get_where('tbl_image',array('gallery_id'=>$id));
		foreach($query->result_array() as $row){
			echo $row['image_path'];
			$path = "./images/gallery_image/".$row['image_path'];
			if(unlink($path)) {
			echo "images deleted";
		}
		else {
			echo "images not deleted";

		}
		} ;
		
		
		$this->db->delete('tbl_image', array('gallery_id' => $id));
	}

}