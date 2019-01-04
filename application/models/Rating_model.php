<?php
class Rating_model extends CI_Model  //rating = rating
{
public function __construct() 
{
	parent::__construct();
}
		
		// rating = rating
		// rating_insert: To insert data in database.
		public function rating_insert($data)
		{
			$this->db->insert('tbl_rating', $data);	
		}


		// rating_fetch:  To select/extract all data on table of database
		public function rating_fetch()
		{
			$query = $this->db->get("tbl_rating");

			return $query->result_array();
		}




}
