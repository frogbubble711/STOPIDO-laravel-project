<?php
class Customer_reg extends CI_Model 
{
	function customeradd($data)
	{
          $this->db->insert('customer',$data);
          return $this->db->insert_id();
	}

	public function login_customer( $usermail, $userpass ) {

		$this->db->select( '*' );
		$this->db->from( 'customer' );
		$this->db->where( 'customer_mail', $usermail );
		$this->db->where( 'customer_pass', $userpass );

		if ( $query = $this->db->get() ) {
			return $query->row_array();
		} else {
			return false;
		}

	}

	public function forget_customer( $usermail, $usertel ) {

		$this->db->select( '*' );
		$this->db->from( 'customer' );
		$this->db->where( 'customer_mail', $usermail );
		$this->db->where( 'customer_tel', $usertel );

		if ( $query = $this->db->get() ) {
			return $query->row_array();
		} else {
			return false;
		}

	}
	
}