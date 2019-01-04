<?php
class Customer_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	

		public function customer_insert($data)
		{
			return $this->db->insert('tbl_customer', $data);
        }      	



		public function customer_fetch()
		{
			$query = $this->db->get("tbl_customer");
			
			if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}



		public function customer_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_customer')
					->where('cus_ID',$id)	
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


		public function customer_search($input_search)
		{
			$this->db->SELECT('*');
			$this->db->like('cus_Lastname', $input_search);
            $this->db->or_like('cus_Firstname', $input_search);
            $this->db->or_like('cus_Middlename', $input_search);
            $this->db->or_like('cus_Address', $input_search);
            $this->db->or_like('cus_Email', $input_search);
            $this->db->or_like('cus_Contact', $input_search);

            $query = $this->db->get('tbl_customer');
   		
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




}
