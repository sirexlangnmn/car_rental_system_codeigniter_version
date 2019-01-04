<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	

		public function user_insert($data)
		{
			return $this->db->insert('tbl_user', $data);
        }      	



		public function user_fetch()
		{
			$query = $this->db->get("tbl_user");
			
            if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}



		public function user_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_user')
					->where('ID',$id)	
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


		public function user_search($input_search)
		{
			$this->db->SELECT('*');
			$this->db->like('Lastname', $input_search);
            $this->db->or_like('Firstname', $input_search);
            $this->db->or_like('Middlename', $input_search);
            $this->db->or_like('Address', $input_search);
            $this->db->or_like('Email', $input_search);
            $this->db->or_like('Contact', $input_search);
            $this->db->or_like('Username', $input_search);
            $this->db->or_like('Position', $input_search);
       //   $this->db->or_like('Status', $input_search);

            $query = $this->db->get('tbl_user');
   		
   			if($query->num_rows() > 0) 
			{
				return $query->result();
			//	return $query->result();
			}
			else
			{	
				// must use "return $query->result();" to avoid the error when don't have data in your table
				return $query->result();
			}	
		}



		public function user_update($ID, $new_data)
		{
            $this->db->where('ID', $ID);
            return $this->db->update('tbl_user', $new_data);
        }  


        
	    public function user_delete($id)
	    {
	        $this->db->where('ID',$id);
	        $this->db->delete('tbl_user');
	        return TRUE;
    	}
   


    	public function user_multi_delete($ids)
    	{
	        $this->db->where_in('ID',$ids);
	        $this->db->delete('tbl_user');
	        return TRUE;
    	}


}
