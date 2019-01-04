<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fuel_model extends CI_Model  //fuel = fuelegory
{
public function __construct() 
{
	parent::__construct();

}
		
		public function fuel_insert($data)
		{
			if(isset($result))
			{
				$this->db->insert('tbl_fuel', $data);	

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


		public function fuel_count()
		{
			return $this->db->count_all('tbl_fuel');
		}


		public function fuel_fetch()
		{
			$query = $this->db->get('tbl_fuel');
			
            if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}

		public function fuel_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_fuel');

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



		// fuel_get: To get the information or data in a row of specific id
		public function fuel_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_fuel')
					->where('fuel_ID',$id)	
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


		// fuel_update: To update data.
		public function fuel_update($fuel_ID, $new_data)
		{
            $this->db->where('fuel_ID', $fuel_ID);
            return $this->db->update('tbl_fuel', $new_data);
        }  


        // fuel_delete: To delete specific data in a row.
	    public function fuel_delete($id)
	    {
	        $this->db->where('fuel_ID',$id);
	        $this->db->delete('tbl_fuel');
	        return TRUE;
    	}
   

    	// fuel_multi_delete: To delete multiple data.
    	public function fuel_multi_delete($ids)
    	{
	        $this->db->where_in('fuel_ID',$ids);
	        $this->db->delete('tbl_fuel');
	        return TRUE;
    	}



}

?>