<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transmission_model extends CI_Model 
{
public function __construct() 
{
	parent::__construct();

}
		
		public function transmission_insert($data)
		{
			if (isset($data)) 
			{
				$this->db->insert('tbl_transmission', $data);	

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


		public function transmission_count()
		{
			return $this->db->count_all('tbl_transmission');
		}


		public function transmission_fetch()
		{
			$query = $this->db->get('tbl_transmission');

			
            if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}


		// transmission_get: To get the information or data in a row of specific id
		public function transmission_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_transmission')
					->where('transmission_ID',$id)	
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

		
		public function transmission_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_transmission');

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

   


		// transmission_update: To update data.
		public function transmission_update($transmission_ID, $new_data)
		{
            $this->db->where('transmission_ID', $transmission_ID);
            return $this->db->update('tbl_transmission', $new_data);
        }  


        // transmission_delete: To delete specific data in a row.
	    public function transmission_delete($id)
	    {
	        $this->db->where('transmission_ID', $id);
	        $this->db->delete('tbl_transmission');
	        return TRUE;
    	}
   

    	// transmission_multi_delete: To delete multiple data.
    	public function transmission_multi_delete($ids)
    	{
	        $this->db->where_in('transmission_ID',$ids);
	        $this->db->delete('tbl_transmission');
	        return TRUE;
    	}



}

?>