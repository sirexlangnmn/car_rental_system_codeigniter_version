<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reservation_status_model extends CI_Model  //reservation_status = reservation_statusegory
{
public function __construct() 
{
	parent::__construct();

}
		
		public function reservation_status_insert($data)
		{
			if (isset($data)) 
			{
				$this->db->insert('tbl_res_status', $data);
				
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


		public function reservation_status_count()  // for pagination
		{
			return $this->db->count_all('tbl_res_status');
		}


		public function reservation_status_fetch()
		{
			$query = $this->db
						  ->select('*')
						  ->from('tbl_res_status')
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

		// reservation_status_get: To get the information or data in a row of specific id that you want to edit
		public function reservation_status_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_res_status')
					->where('reservation_status_id',$id)	
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



		public function reservation_status_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_res_status');

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



		
		public function reservation_status_update($reservation_status_id, $new_data)
		{
            $this->db->where('reservation_status_id', $reservation_status_id);
            return $this->db->update('tbl_res_status', $new_data);
        }  


        
        public function reservation_status_delete($id)
	    {
	        $this->db->where('reservation_status_id',$id);
	        $this->db->delete('tbl_res_status');
	        return TRUE;
    	}
   

    	public function reservation_status_multi_delete($ids)
    	{
	        $this->db->where_in('reservation_status_id',$ids);
	        $this->db->delete('tbl_res_status');
	        return TRUE;
    	}



}

?>