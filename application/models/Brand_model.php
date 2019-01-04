<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand_model extends CI_Model  //brand = brandegory
{
public function __construct() 
{
	parent::__construct();

}
		
		public function brand_insert($data)
		{
			if (isset($data)) 
			{
				$this->db->insert('tbl_brand', $data);
				
				if($this->db->affected_rows() > 0)
				{
					return true;
				}
			}
			else
			{
				return false;
			}	
		}


		public function brand_count()  // for pagination
		{
			return $this->db->count_all('tbl_brand');
		}


		public function brand_fetch()
		{
			$query = $this->db
						  ->select('*')
						  ->from('tbl_brand')
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

		// brand_get: To get the information or data in a row of specific id that you want to edit
		public function brand_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_brand')
					->where('brand_ID',$id)	
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



		public function brand_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_brand');

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



		
		public function brand_update($brand_ID, $new_data)
		{
            $this->db->where('brand_ID', $brand_ID);
            return $this->db->update('tbl_brand', $new_data);
        }  


        
        public function brand_delete($id)
	    {
	        $this->db->where('brand_ID',$id);
	        $this->db->delete('tbl_brand');
	        return TRUE;
    	}
   

    	public function brand_multi_delete($ids)
    	{
	        $this->db->where_in('brand_ID',$ids);
	        $this->db->delete('tbl_brand');
	        return TRUE;
    	}



}

?>