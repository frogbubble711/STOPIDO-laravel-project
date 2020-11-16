<?php
class Partner_reg extends CI_Model 
{
	function partneradd($data)
	{
          $this->db->insert('partner',$data);
          return $this->db->insert_id();
	}

	public function login_partner( $partnermail, $partnerpass ) {

		$this->db->select( '*' );
		$this->db->from( 'partner' );
		$this->db->where( 'partner_mail', $partnermail );
		$this->db->where( 'partner_pass', $partnerpass );

		if ( $query = $this->db->get() ) {
			return $query->row_array();
		} else {
			return false;
		}

	}

	public function forget_partner( $partnermail, $partnertel ) {

		$this->db->select( '*' );
		$this->db->from( 'partner' );
		$this->db->where( 'partner_mail', $partnermail );
		$this->db->where( 'partner_tel', $partnertel );

		if ( $query = $this->db->get() ) {
			return $query->row_array();
		} else {
			return false;
		}

	}
	
}