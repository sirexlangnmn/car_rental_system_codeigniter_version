<?php
class Driver_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	

		public function driver_insert($data)
		{
			return $this->db->insert('tbl_driver', $data);
        }      	



		public function driver_fetch()
		{
			$query = $this->db->get("tbl_driver");
			
			if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}



		public function driver_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_driver')
					->where('driver_ID',$id)	
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


		public function driver_search($input_search)
		{
			$this->db->SELECT('*');
			$this->db->like('driver_Lastname', $input_search);
            $this->db->or_like('driver_Firstname', $input_search);
            $this->db->or_like('driver_Middlename', $input_search);
            $this->db->or_like('driver_Address', $input_search);
            $this->db->or_like('driver_Email', $input_search);
            $this->db->or_like('driver_Contact', $input_search);
            $this->db->or_like('driver_License', $input_search);
            $this->db->or_like('driver_Expired', $input_search);

            $query = $this->db->get('tbl_driver');
   		
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



		public function driver_update($driver_ID, $new_data)
		{
            $this->db->where('driver_ID', $driver_ID);
            return $this->db->update('tbl_driver', $new_data);
        }  


        
	    public function driver_delete($id)
	    {
	        $this->db->where('driver_ID',$id);
	        $this->db->delete('tbl_driver');
	        return TRUE;
    	}
   


    	public function driver_multi_delete($ids)
    	{
	        $this->db->where_in('driver_ID',$ids);
	        $this->db->delete('tbl_driver');
	        return TRUE;
    	}


}
