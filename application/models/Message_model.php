<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model  //brand = brandegory
{
public function __construct() 
{
	parent::__construct();

}
		
		public function message_insert($data)
		{
			if (isset($data)) 
			{
				$this->db->insert('tbl_messsage', $data);
				
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



		public function message_fetch()
		{
			$query = $this->db
						  ->select('*')
						  ->from('tbl_messsage')
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


		// message_get: To get the information or data in a row of specific id that you want to edit
		public function message_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_messsage')
					->where('message_id',$id)	
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


		
		public function message_update($message_id, $new_data)
		{
            $this->db->where('message_id', $message_id);
            return $this->db->update('tbl_messsage', $new_data);
        }  


        
        public function message_delete($id)
	    {
	        $this->db->where('message_id',$id);
	        $this->db->delete('tbl_messsage');
	        return TRUE;
    	}
   

    	public function message_multi_delete($ids)
    	{
	        $this->db->where_in('message_id',$ids);
	        $this->db->delete('tbl_messsage');
	        return TRUE;
    	}



}

?>