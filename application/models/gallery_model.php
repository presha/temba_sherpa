<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	// public function __constructor(){
	// 	$this->load->database();
	// }


	public function set_val($filename){
		$this->load->helper('url');
		$data=array(
			'gallery_img_path'=> $filename,
			'gallery_desc'=> $this->input->post('gallery_name'),
			'enable_disable'=> $this->input->post('enable_disable')
			);
		return $this->db->insert('tbl_gallery', $data);
	}

	public function get_image($param=FALSE){
			if($param===FALSE){
				$query = $this->db->get('tbl_gallery');
				return $query->result_array();
			}
		$query=$this->db->get_where('tbl_gallery',array('gallery_id'=>$param));
		return $query->row_array();
	}


	public function save_edit(){
		$id= $this->input->post('dummy');
		echo $id;
		$data=array(
			'gallery_desc'=> $this->input->post('gallery_name'),
			'enable_disable'=> $this->input->post('enable_disable')
			);
		 $q=$this->db->where('gallery_id',$id);
		 $this->db->update('tbl_gallery',$data);
	}

	public function del_gallery($id){
		// echo $id;
		// echo "in image_model";
		// echo '<br />';
		$query=$this->db->get_where('tbl_gallery',array('gallery_id'=>$id));
		foreach($query->result_array() as $row){
			echo $row['gallery_img_path'];
			$path = "./images/gallery_image/".$row['gallery_img_path'];
		} ;
		$this->load->helper("file");
		if(unlink($path)) {
			echo "images deleted";
		}
		else {
			echo "images not deleted";

		}
		$this->db->delete('tbl_gallery', array('gallery_id' => $id));
	}

}