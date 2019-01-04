<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Engine_model extends CI_Model  //engine = engineegory
{
public function __construct() 
{
	parent::__construct();

}
		
		public function engine_insert($data)
		{
			if(isset($result))
			{
				$this->db->insert('tbl_engine', $data);	
				
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



		public function engine_count()
		{
			return $this->db->count_all('tbl_engine');
		}


		public function engine_fetch()
		{
			$query = $this->db->get('tbl_engine');

			
            if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}


		// engine_get: To get the information or data in a row of specific id
		public function engine_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_engine')
					->where('engine_ID',$id)	
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
		


		public function engine_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_engine');

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



		// engine_update: To update data.
		public function engine_update($engine_ID, $new_data)
		{
            $this->db->where('engine_ID', $engine_ID);
            return $this->db->update('tbl_engine', $new_data);
        }  


        // engine_delete: To delete specific data in a row.
	    public function engine_delete($id)
	    {
	        $this->db->where('engine_ID',$id);
	        $this->db->delete('tbl_engine');
	        return TRUE;
    	}
   

    	// engine_multi_delete: To delete multiple data.
    	public function engine_multi_delete($ids)
    	{
	        $this->db->where_in('engine_ID',$ids);
	        $this->db->delete('tbl_engine');
	        return TRUE;
    	}



}

?>