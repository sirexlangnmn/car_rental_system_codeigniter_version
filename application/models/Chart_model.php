<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Chart_model extends CI_Model
{

    public function gettbl_paymentJSON($year) {
		$sql = "SELECT total FROM tbl_payment WHERE year = $year ORDER BY STR_TO_DATE(month, '%m')";
		$totals = array(); 

		while($res = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$totals[] = $res['total'];
		}

		$final = json_encode($totals);
		$results = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":/','$1:', $final);
		print $results;
	}
    
    public function getChartLabelJSON() {
		$sql = "SELECT DISTINCT month FROM tbl_payment ORDER BY STR_TO_DATE(month, '%m')";
		$months = array();

		while($res = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$months[] = $res['month'];
		}
		print json_encode($months);
	}
    
    
    public function getYear(){
        // $this->db->select('year');
        // $this->db->group_by('year');
        // $query = $this->db->get('tbl_payment');
        $query = $this->db->query("SELECT DISTINCT year FROM tbl_payment ORDER BY year ASC");
        return $query->result();
    }

    public function getMonth(){
        // $this->db->select('month');
        // $this->db->group_by('month');
        // $query = $this->db->get('tbl_payment');
        $query = $this->db->query("SELECT DISTINCT month FROM tbl_payment ORDER BY STR_TO_DATE(month, '%m')");
        return $query->result();
    }

    public function getEarning($year){
    	// $this->db->select("total");
    	// $this->db->order_by("STR_TO_DATE(month, '%m')");
    	// $query = $this->db->get_where("tbl_payment", array("year" => $year));
    	$query = $this->db->query("SELECT total FROM tbl_payment WHERE year = '$year' ORDER BY STR_TO_DATE(month, '%m')");
    	return $query->result();
    }
}