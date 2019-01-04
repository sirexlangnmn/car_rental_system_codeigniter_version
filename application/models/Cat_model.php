<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cat_model extends CI_Model  //cat = category
{
public function __construct() 
{
	parent::__construct();

}
		
		public function cat_insert($data)
		{
			if (isset($data)) 
			{
				$this->db->insert('tbl_category', $data);	

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


		public function cat_count()  // for pagination
		{
			return $this->db->count_all('tbl_category');
		}



		public function cat_fetch()
        {
            $query = $this->db
                          ->select('*')
                          ->from('tbl_category')
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



        public function cat_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_category')
					->where('category_ID', $id)	
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



		public function cat_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_category');

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



		public function cat_update($category_ID, $new_data)
		{
            $this->db->where('category_ID', $category_ID);
            return $this->db->update('tbl_category', $new_data);
        }  


    
        public function cat_delete($id)
	    {
	        $this->db->where('category_ID',$id);
	        $this->db->delete('tbl_category');
	        return TRUE;
    	}
   

    	// cat_multi_delete: To delete multiple data.
    	public function cat_multi_delete($ids)
    	{
	        $this->db->where_in('category_ID',$ids);
	        $this->db->delete('tbl_category');
	        return TRUE;
    	}



}

?>