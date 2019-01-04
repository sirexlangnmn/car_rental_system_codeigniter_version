<?php
class Status_model extends CI_Model  //status = status
{
public function __construct() 
{
	parent::__construct();
}
		
		// status = status
		// status_insert: To insert data in database.
		public function status_insert($data)
		{
			if(issset($result))
			{
				$this->db->insert('tbl_status', $data);		
				
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


		// status_fetch:  To select/extract all data on table of database
		public function status_fetch()
		{
			$query = $this->db->get("tbl_status");

            if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}


		// status_get: To get the information or data in a row of specific id
		public function status_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_status')
					->where('status_ID',$id)	
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


		// status_update: To update data.
		public function status_update($status_ID, $new_data)
		{
            $this->db->where('status_ID', $status_ID);
            return $this->db->update('tbl_status', $new_data);
        }  


        // status_delete: To delete specific data in a row.
	    public function status_delete($id)
	    {
	        $this->db->where('status_ID',$id);
	        $this->db->delete('tbl_status');
	        return TRUE;
    	}
   

    	// status_multi_delete: To delete multiple data.
    	public function status_multi_delete($ids)
    	{
	        $this->db->where_in('status_ID',$ids);
	        $this->db->delete('tbl_status');
	        return TRUE;
    	}



}
