<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('home');
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('homepage');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function about_us()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('about_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function partners()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('partners_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
		$this->load->model('Partner_reg');
	}
	public function suppliers()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('suppliers_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
		$this->load->model('Supplier_reg');
	}
	public function contact()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('contact_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function career()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('career_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function terms_and_conditions()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('toc');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function privacy_policies()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('policies');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function faq()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('faq_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function faq_partner()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('faq_partner_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function faq_supplier()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('faq_supplier_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function customer()
	{
		$this->load->view('customer_head');
		$this->load->view('customer_nav');
		$this->load->view('customer_after_nav');
		$this->load->view('customer_products');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
		$this->load->model('customer_reg');
	}
	public function customer_registration()
	{
		$this->load->view('head_part');
		$this->load->view('customer_nav');
		$this->load->view('header_banner_part');
		$this->load->view('customer_reg');
		$this->load->view('footer_part');
		$this->load->view('customer_login_modal');
		$this->load->view('below_footer');
		$this->load->model('customer_reg');
	}
	public function customerreg()
	{
		$this->form_validation->set_rules('customer_mail', 'Email', 'required|valid_email|is_unique[customer.customer_mail]');
		$this->form_validation->set_rules('customer_tel', 'Mobile', 'required|is_unique[customer.customer_tel]');
		if ($this->form_validation->run()) {
			$pass = random_string('alnum', 12);
			$this->load->model('Customer_reg');
			if ($this->input->post('addcustomer')) {
				$data['customer_fnm'] = $this->input->post('customer_fnm');
				$data['customer_mnm'] = $this->input->post('customer_mnm');
				$data['customer_lnm'] = $this->input->post('customer_lnm');
				$data['customer_tel'] = $this->input->post('customer_tel');
				$data['customer_mail'] = $this->input->post('customer_mail');
				$data['customer_ct'] = $this->input->post('customer_ct');
				$data['customer_state'] = $this->input->post('customer_state');
				$data['customer_ref'] = $this->input->post('customer_ref');
				$data['customer_address'] = $this->input->post('customer_address');
				$user = $this->Customer_reg->customeradd($data);
				if ($user > 0) {
					// echo "Record Saved Successfully";
					echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>Thank you!</strong> Please check your inbox for login credentials.
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";

					// Registration Confirmation Mail for Customer
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('info@stopido.com', 'Stopido');
					$this->email->to($data['customer_mail']);
					$this->email->bcc('anupamswork@gmail.com');
					$this->email->subject('Stopido Customer Registration');
					$mailregister =
						"Hi " . $data['customer_fnm'] . ", <br>Thank you for registering to Stopido as 
						customer. You can use your registered  email or mobile as username 
						and <strong>" . $pass . "</strong> as  password for login.";
					$this->email->message($mailregister);
					$this->email->send();
					//redirect(base_url()."welcome/login");
					$this->customer_registration();
				} else {
					echo "Insert error !";
				}
			}
		} else {
			$this->customer_registration();
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
			<strong>Email or Mobile already exist!</strong> Please login.
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
		</div>";
		}
	}
	public function recover_password()
	{
		$this->load->view('customer_head');
		$this->load->view('customer_nav');
		$this->load->view('recover_pass');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
		$this->load->model('customer_reg');
	}
	public function forget_pass()
	{
		$user_forget = array(
			'user_mail' => $this->input->post('user_mail'),
			'user_tel' 	=> $this->input->post('user_tel')
		);
		$data = $this->customer_reg->forget_customer($user_forget['user_mail'], $user_forget['user_tel']);
		if ($data) {
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('info@stopido.com', 'Stopido');
			$this->email->to($data['customer_mail']);
			$this->email->bcc('anupamswork@gmail.com');
			$this->email->subject('Stopido Customer Password Recovery');
			$mailregister =
				"Hi " . $data['customer_fnm'] . ", <br>You've asked to recover your Password. 
				You can use your registered  email or mobile as username 
				and <strong>" . $data['customer_pass'] . "</strong> as  password for login.";
			$this->email->message($mailregister);
			$this->email->send();
			$this->recover_password();
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				<strong>Thank you!</strong> Please check your inbox.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
		} else {
			$this->recover_password();
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
			<strong>Email / Mobile Not Found!</strong> Please check again.
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
		</div>";
		}
	}
	public function customer_loggedin()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('customer_after_nav');
		$this->load->view('customer_products');
		$this->load->view('customer_footer');
		// $this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
		$this->load->model('customer_reg');
	}
	public function customer_profile()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('cust_prof');
		// $this->load->view('customer_products');
		$this->load->view('customer_footer');
		// $this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
		// $this->load->model('customer_reg');
	}
	public function customer_login()
	{
		$this->load->model('customer_reg');
		$customer_login = array(
			'usermail' => $this->input->post('user'),
			'userpass' => $this->input->post('pass')
		);
		$data = $this->customer_reg->login_customer($customer_login['usermail'], $customer_login['userpass']);
		if ($data) {
			$this->session->set_userdata('usermail', $data['customer_mail']);
			$this->session->set_userdata('customer_fnm', $data['customer_fnm']);
			$this->input->post($data['customer_mail']);
			$this->input->post($data['customer_fnm']);
			// $this->cart();
			redirect('welcome/customer_loggedin', 'refresh');
		} else {
			// $this->customer();
			$this->session->sess_destroy();
			redirect('welcome/customer', 'refresh');
		}
	}
	public function customer_logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/customer', 'refresh');
	}
	public function customer_address()
	{
		$this->load->view('customer_head');
		$this->load->view('customer_nav');
		$this->load->view('customer_addresses');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function customer_addresses()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('cust_addresses');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function customer_new_address()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('cust_new_address');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function customer_orders()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('cust_orders');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function product()
	{
		$this->load->view('customer_head');
		$this->load->view('product_nav');
		$this->load->view('product');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function cart()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('cart');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function partner_profile()
	{
		$this->load->view('head_part');
		$this->load->view('partner_nav');
		$this->load->view('partner_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function supplier_profile()
	{
		$this->load->view('head_part');
		$this->load->view('supplier_nav');
		$this->load->view('supplier_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function forget_password()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('forget_pass');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function forget_func()
	{
		$user_forget = array(
			'ac_type' 	=> $this->input->post('ac_type'),
			'user_mail' => $this->input->post('user_mail'),
			'user_tel' 	=> $this->input->post('user_tel')
		);
		$actype = $user_forget['ac_type'];
		if ($actype == 'partner') {
			$data = $this->partner_reg->forget_partner($user_forget['user_mail'], $user_forget['user_tel']);
			if ($data) {
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('info@stopido.com', 'Stopido');
				$this->email->to($data['partner_mail']);
				$this->email->bcc('anupamswork@gmail.com');
				$this->email->subject('Stopido Partner Password Recovery');
				$mailregister =
					"Hi " . $data['partner_fnm'] . ", <br>You've asked to recover your Password. 
					You can use your registered  email or mobile as username 
					and <strong>" . $data['partner_pass'] . "</strong> as  password for login.";
				$this->email->message($mailregister);
				$this->email->send();
				$this->forget_password();
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					<strong>Thank you!</strong> Please check your inbox.
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>";
			} else {
				$this->forget_password();
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>Email / Mobile Not Found!</strong> Please check again.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
			}
		} elseif ($actype == 'supplier') {
			$data = $this->supplier_reg->forget_supplier($user_forget['user_mail'], $user_forget['user_tel']);
			if ($data) {
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('info@stopido.com', 'Stopido');
				$this->email->to($data['supplier_mail']);
				$this->email->bcc('anupamswork@gmail.com');
				$this->email->subject('Stopido Supplier Password Recovery');
				$mailregister =
					"Hi " . $data['supplier_fnm'] . ", <br>You've asked to recover your Password. 
					You can use your registered  email or mobile as username 
					and <strong>" . $data['supplier_pass'] . "</strong> as  password for login.";
				$this->email->message($mailregister);
				$this->email->send();
				$this->forget_password();
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					<strong>Thank you!</strong> Please check your inbox.
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>";
			} else {
				$this->forget_password();
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>Email / Mobile Not Found!</strong> Please check again.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
			}
		} else {
			$this->forget_password();
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
			<strong>Error!</strong> Please check again.
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
		</div>";
		}
	}
	public function login()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('login_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function login_func()
	{
		$partner_login = array(
			'ac_type' 		=> $this->input->post('actype'),
			'partner_mail' 	=> $this->input->post('user'),
			'partner_pass' 	=> $this->input->post('pass')
		);
		$actype = $partner_login['ac_type'];
		if ($actype == 'partner') {
			$data = $this->partner_reg->login_partner($partner_login['partner_mail'], $partner_login['partner_pass']);
			if ($data) {
				$this->session->set_userdata('partner_mail', $data['partner_mail']);
				$this->session->set_userdata('partner_fnm', $data['partner_fnm']);
				$this->session->set_userdata('partner_lnm', $data['partner_lnm']);
				$this->session->set_userdata('partner_occu', $data['partner_occu']);
				$this->input->post($data['partner_mail']);
				$this->input->post($data['partner_fnm']);
				redirect('welcome/partner_profile', 'refresh');
				$this->partner_profile();
			} else {
				redirect('welcome/login', 'refresh');
			}
		} elseif ($actype == 'supplier') {
			$data = $this->supplier_reg->login_supplier($partner_login['partner_mail'], $partner_login['partner_pass']);
			if ($data) {
				$this->session->set_userdata('supplier_mail', $data['supplier_mail']);
				$this->session->set_userdata('supplier_bnm', $data['supplier_bnm']);
				$this->session->set_userdata('supplier_prod_category', $data['supplier_prod_category']);
				$this->input->post($data['supplier_mail']);
				redirect('welcome/supplier_profile', 'refresh');
			} else {
				redirect('welcome/login', 'refresh');
			}
		} else {
			$this->index();
		}
	}
	public function partner_logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/login', 'refresh');
	}
	public function supplier_logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/login', 'refresh');
	}
	public function test_tbl()
	{
		$this->load->database();
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('test_dbtbl');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function partnerreg()
	{
		$this->form_validation->set_rules('partner_mail', 'Email', 'required|valid_email|is_unique[partner.partner_mail]');
		$this->form_validation->set_rules('partner_tel', 'Mobile', 'required|is_unique[partner.partner_tel]');
		if ($this->form_validation->run()) {
			$pass = random_string('alnum', 12);
			$stat = 2;
			$this->load->model('Partner_reg');
			if ($this->input->post('addpartner')) {
				$data['partner_fnm'] = $this->input->post('partner_fnm');
				$data['partner_mnm'] = $this->input->post('partner_mnm');
				$data['partner_lnm'] = $this->input->post('partner_lnm');
				$data['partner_tel'] = $this->input->post('partner_tel');
				$data['partner_mail'] = $this->input->post('partner_mail');
				$data['partner_ct'] = $this->input->post('partner_ct');
				$data['partner_occu'] = $this->input->post('partner_occu');
				$data['partner_ref'] = $this->input->post('partner_ref');
				$data['partner_stat'] = $stat;
				$data['partner_pass'] = $pass;
				$user = $this->Partner_reg->partneradd($data);
				if ($user > 0) {
					// echo "Record Saved Successfully";
					echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>Thank you!</strong> Please check your inbox for login credentials.
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					// Registration Confirmation Mail for Partner
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('info@stopido.com', 'Stopido');
					$this->email->to($data['partner_mail']);
					$this->email->bcc('anupamswork@gmail.com');
					$this->email->subject('Stopido Partner Registration');
					$mailregister =
						"Hi " . $data['partner_fnm'] . ", <br>Thank you for registering to Stopido as 
						Partner. You can use your registered  email or mobile as username 
						and <strong>" . $pass . "</strong> as  password for login.";
					$this->email->message($mailregister);
					$this->email->send();
					//redirect(base_url()."welcome/login");
					$this->partners();
				} else {
					echo "Insert error !";
				}
			}
		} else {
			$this->partners();
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
			<strong>Email or Mobile already exist!</strong> Please login.
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
		</div>";
		}
	}
	public function supplierreg()
	{
		$this->form_validation->set_rules('supplier_mail', 'Email', 'required|valid_email|is_unique[supplier.supplier_mail]');
		$this->form_validation->set_rules('supplier_tel', 'Mobile', 'required|is_unique[supplier.supplier_tel]');
		if ($this->form_validation->run()) {
			$pass = random_string('alnum', 12);
			$stat = 2;
			$this->load->model('Supplier_reg');
			if ($this->input->post('addsupplier')) {
				$data['supplier_fnm'] = $this->input->post('supplier_fnm');
				$data['supplier_mnm'] = $this->input->post('supplier_mnm');
				$data['supplier_lnm'] = $this->input->post('supplier_lnm');
				$data['supplier_bnm'] = $this->input->post('supplier_bnm');
				$data['supplier_tel'] = $this->input->post('supplier_tel');
				$data['supplier_mail'] = $this->input->post('supplier_mail');
				$data['supplier_ct'] = $this->input->post('supplier_ct');
				$data['supplier_prod_qty'] = $this->input->post('supplier_prod_qty');
				$data['supplier_type'] = $this->input->post('supplier_type');
				$data['supplier_ref'] = $this->input->post('supplier_ref');
				$data['supplier_prod_category'] = $this->input->post('supplier_prod_category');
				$data['supplier_range'] = $this->input->post('supplier_range');
				$data['supplier_stat'] = $stat;
				$data['supplier_pass'] = $pass;
				$user = $this->Supplier_reg->supplieradd($data);
				if ($user > 0) {
					// echo "Record Saved Successfully";
					echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>Thank you!</strong> Please check your inbox for login credentials.
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					// Registration Confirmation Mail for Supplier
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('info@stopido.com', 'Stopido');
					$this->email->to($data['supplier_mail']);
					$this->email->bcc('anupamswork@gmail.com');
					$this->email->subject('Stopido Supplier Registration');
					$mailregister =
						"Hi " . $data['supplier_fnm'] . ", <br>Thank you for registering to Stopido as 
						Supplier. You can use your registered  email or mobile as username 
						and <strong>" . $pass . "</strong> as  password for login.";
					$this->email->message($mailregister);
					$this->email->send();
					//redirect(base_url()."welcome/login");
					$this->suppliers();
				} else {
					echo "Insert error !";
				}
			}
		} else {
			$this->suppliers();
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
			<strong>Email or Mobile already exist!</strong> Please login.
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
		</div>";
		}
	}
}
