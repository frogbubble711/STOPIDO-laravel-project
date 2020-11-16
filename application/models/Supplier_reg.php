<?php
class Supplier_reg extends CI_Model 
{
	function supplieradd($data)
	{
          $this->db->insert('supplier',$data);
          return $this->db->insert_id();
	}
	
	public function login_supplier( $suppliermail, $supplierpass ) {

		$this->db->select( '*' );
		$this->db->from( 'supplier' );
		$this->db->where( 'supplier_mail', $suppliermail );
		$this->db->where( 'supplier_pass', $supplierpass );

		if ( $query = $this->db->get() ) {
			return $query->row_array();
		} else {
			return false;
		}

	}
	
	public function forget_supplier( $suppliermail, $suppliertel ) {

		$this->db->select( '*' );
		$this->db->from( 'supplier' );
		$this->db->where( 'supplier_mail', $suppliermail );
		$this->db->where( 'supplier_tel', $suppliertel );

		if ( $query = $this->db->get() ) {
			return $query->row_array();
		} else {
			return false;
		}

	}
	
}