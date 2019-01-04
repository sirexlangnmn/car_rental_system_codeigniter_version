<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Car_model extends CI_Model  //car = caregory
{
public function __construct() 
{
	parent::__construct();

}
		
		public function car_insert($data)
		{
			$this->db->insert('tbl_fleet', $data);	
		}


		public function car_count()  // for pagination
		{
			return $this->db->count_all('tbl_fleet');
		}



		public function car_fetch()
		{
			$query = $this->db
						  ->select('*')
						  ->from('tbl_fleet')
						  ->get();

			if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}


		// car_get: To get the information or data in a row of specific id that you want to edit
		public function car_get($id)
		{		
			$query = $this->db
						  ->select('*')
					      ->from('tbl_fleet')
					      ->where('car_ID',$id)	
					      ->get();
			
			if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}   



		public function car_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_fleet');

			if ($query->num_rows() > 0) 
			{
				return $query->result();
			}
			else
			{	
				// must use "return $query->result();" to avoid the error when don't have data in your table
				return $query->result();
			}	
		}


		public function car_available()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_fleet')
					->where('car_Status', "Available")	
					->get();
			
			return $query->result();
		}	


		function car_available_count()
		{
			return $this->db
        				->where('car_Status', "Available")
        				->count_all_results('tbl_fleet');
		}


		public function car_reserved()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_fleet')
					->where('car_Status', "Reserved")	
					->get();
			
			return $query->result();
		}	


		function car_reserved_count()
		{
			return $this->db
        				->where('car_Status', "Reserved")
        				->count_all_results('tbl_fleet');
		}


		public function car_inactive()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_fleet')
					->where('car_Status', "Inactive")	
					->get();
			
			return $query->result();
		}	


		function car_inactive_count()
		{
			return $this->db
        				->where('car_Status', "Inactive")
        				->count_all_results('tbl_fleet');
		}



		public function car_search($input_search)
		{
			$this->db->SELECT('*');
			$this->db->like('category_Name', $input_search);
            $this->db->or_like('brand_Name', $input_search);
            $this->db->or_like('car_Model', $input_search);
            $this->db->or_like('car_Plateno', $input_search);
            $this->db->or_like('car_Capacity', $input_search);
            $this->db->or_like('car_Price', $input_search);
            $this->db->or_like('car_Status', $input_search);

            $query = $this->db->get('tbl_fleet');
   		
   			if($query->num_rows() > 0) 
			{
				return $query->result();
			//	return $query->result_array();
			}
			else
			{	
				// must use "return $query->result();" to avoid the error when don't have data in your table
				return $query->result();
			}	
		}



		// car_update: To update data.
		public function car_update($car_ID, $new_data)
		{
            $this->db->where('car_ID', $car_ID);
            return $this->db->update('tbl_fleet', $new_data);
        }  


        // car_delete: To delete specific data in a row.
	    public function car_delete($id)
	    {
	        $this->db->where('car_ID',$id);
	        $this->db->delete('tbl_fleet');
	        return TRUE;
    	}
   

    	// car_multi_delete: To delete multiple data.
    	public function car_multi_delete($ids)
    	{
	        $this->db->where_in('car_ID',$ids);
	        $this->db->delete('tbl_fleet');
	        return TRUE;
    	}



}

?>