<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
	}


	public function index()
	{
		$this->load->view('admin/login');
	}

	public function dashboard()
	{
		if (empty($this->session->userdata('userName'))) {
			redirect('adminpanel');
		}
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/footer');
	}

	public function register()
	{
		$this->load->view('admin/register');
	}

	public function save_register()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$data = array(
			'userName' => $u,
			'password' => $p
		);
		$this->Madmin->insert('tbl_admin', $data);
		redirect('adminpanel');
	}

	public function save_login()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Madmin->cek_login($u, $p)->num_rows();

		if ($cek == 1) {
			$data_session = array(
				'userName' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			redirect('adminpanel');
		}
	}

	// function main() {
	// 	$this->load->view('home/layout/header');
	// 	$this->load->view('home/layout/menu');
	// 	$this->load->view('home/layout/footer');
	// }

	function change_pass()
	{
		//$dataWhere = array('idAdmin'=>$id);
		if (empty($this->session->userdata('userName'))) {
			redirect('adminpanel');
		}
		$data['admin'] = $this->Madmin->get_all_data('tbl_admin')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/change_pass', $data);
		//$this->load->view('admin/change_pass');
		$this->load->view('admin/layout/footer');
	}

	public function edit_change_pass($id)
	{
		$dataWhere = array('idAdmin' => $id);
		$data['admin'] = $this->Madmin->get_by_id('tbl_admin', $dataWhere)->row_object();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/formUbah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save_change_pass()
	{
		$id = $this->input->post('id');
		$passNew = $this->input->post('passNew');

		$dataUpdate = array('password' => $passNew);
		$this->Madmin->update('tbl_admin', $dataUpdate, 'idAdmin', $id);
		redirect('adminpanel/change_pass');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('adminpanel');
	}
}
