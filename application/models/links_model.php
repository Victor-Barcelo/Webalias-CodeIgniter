<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Links_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function get_links($tag,$code,$url) {
		
		if (($tag && $code) === NULL) {
			$query = $this->db->get('links');
		}
		elseif ($code === '')
		{
			$query = $this->db->get_where('links', array('tag' =>$tag));
		}
		else
		{
			$query = $this->db->get_where('links', array('tag' =>$tag, 'code' => $code));
		}
		return $query->result_array();
	}
	
	public function insert_link($tag,$code,$url) {
		if($this->is_valid_insert($tag, $code))
		{
			$db_error = !($this->db->insert('links', array( 'tag' => $tag, 'code' => $code, 'url' => $url)));
			if($db_error)
			{
				//TODO	
			}
			$success = true;
		} else
		{
			$success = false;
		}
		
		return $success;
	}
	
	private function is_valid_insert($tag, $code) {
		$query = $this->db->get_where('links', array('tag' => $tag,'code' => $code));
		if ($query->num_rows() == 0)
		{
			return true;
		} else
		{
			return false;
		}
	}

}