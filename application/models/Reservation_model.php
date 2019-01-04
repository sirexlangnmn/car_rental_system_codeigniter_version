<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_model extends CI_Model  
{
	public function __construct() 
	{
		parent::__construct();

	}
		
		


		public function reservation_count()  // for pagination
		{
			return $this->db->count_all('tbl_reservation');
		}


		public function reservation_fetch()
		{
			$query = $this->db->get('tbl_reservation');

            if(isset($query))
            {
                return $query->result();
            }
            else
            {
                return FALSE;
            }
		}


		public function reservation_get($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_ID',$id)	
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
		

		public function reservation_history($id)
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('customer_ID',$id)	
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



		public function reservation_pagination($limit, $offset)
		{
			$this->db->limit($limit, $offset);
			$query = $this->db->get('tbl_reservation');

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


		public function reservation_pending()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Pending")	
					->get();
			
			return $query->result();
		}	


		function reservation_pending_count()
		{
			return $this->db
        				->where('reservation_status', "Pending")
        				->count_all_results('tbl_reservation');
		}


		public function reservation_confirmed()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Confirmed")	
					->get();
			
			return $query->result();
		}	


		function reservation_confirmed_count()
		{
			return $this->db
        				->where('reservation_status', "Confirmed")
        				->count_all_results('tbl_reservation');
		}


		public function reservation_upcoming()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Upcoming")	
					->get();
			
			return $query->result();
		}	


		function reservation_upcoming_count()
		{
			return $this->db
        				->where('reservation_status', "Upcoming")
        				->count_all_results('tbl_reservation');
		}


		public function reservation_ongoing()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Ongoing")	
					->get();
			
			return $query->result();
		}	


		function reservation_ongoing_count()
		{
			return $this->db
        				->where('reservation_status', "Ongoing")
        				->count_all_results('tbl_reservation');
		}



		public function reservation_finished()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Finished")	
					->get();
			
			return $query->result();
		}	


		function reservation_finished_count()
		{
			return $this->db
        				->where('reservation_status', "Finished")
        				->count_all_results('tbl_reservation');
		}


		public function reservation_cancelled()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Cancelled")	
					->get();
			
			return $query->result();
		}	


		function reservation_cancelled_count()
		{
			return $this->db
        				->where('reservation_status', "Cancelled")
        				->count_all_results('tbl_reservation');
		}


		public function reservation_unfulfilled()
		{		
			$query = $this->db
					->select('*')
					->from('tbl_reservation')
					->where('reservation_status', "Unfulfilled")	
					->get();
			
			return $query->result();
		}	


		function reservation_unfulfilled_count()
		{
			return $this->db
        				->where('reservation_status', "Unfulfilled")
        				->count_all_results('tbl_reservation');
		}




		public function reservation_search($input_search)
		{
			$this->db->SELECT('*');
			$this->db->like('dropoff_Location', $input_search);
            $this->db->or_like('dropoff_Date', $input_search);
            $this->db->or_like('dropoff_Time', $input_search);
            $this->db->or_like('pickup_Location', $input_search);
            $this->db->or_like('pickup_Date', $input_search);
            $this->db->or_like('pickup_Time', $input_search);
            $this->db->or_like('reservation_Time', $input_search);
            $this->db->or_like('customer_ID', $input_search);
            $this->db->or_like('car_ID', $input_search);
            $this->db->or_like('driver_ID', $input_search);
            $this->db->or_like('total_payment', $input_search);
            $this->db->or_like('balance', $input_search);
            $this->db->or_like('reservation_status', $input_search);

            $query = $this->db->get('tbl_reservation');
   		
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



		// reservation_update: To update data.
		public function reservation_update($reservation_ID, $new_data)
		{
            $this->db->where('reservation_ID', $reservation_ID);
            return $this->db->update('tbl_reservation', $new_data);
        }  


        // reservation_delete: To delete specific data in a row.
	    public function reservation_delete($id)
	    {
	        $this->db->where('reservation_ID',$id);
	        $this->db->delete('tbl_reservation');
	        return TRUE;
    	}
   

    	// reservation_multi_delete: To delete multiple data.
    	public function reservation_multi_delete($ids)
    	{
	        $this->db->where_in('reservation_ID',$ids);
	        $this->db->delete('tbl_reservation');
	        return TRUE;
    	}



}

?>