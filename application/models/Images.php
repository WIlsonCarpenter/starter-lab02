<?php 
/**
* Model for the images database.
*/
class Images extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	* Return all images from the database, ordered by id and description
	*/
	function all() {
		$this->db->order_by("id", "desc");
		$query = $this->db->get("images");
		return $query->result_array();
	}

	/**
	* Return only the three newest images from the database
	*/
	function newest() {
		$this->db->order_by("id", "desc");
		$this->db->limit(3);
		$query = $this->db->get("images");
		return $query->result_array();
	}

}