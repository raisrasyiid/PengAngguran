<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
		$data['blog'] = $this->Madmin->get_all_data('tbl_blog')->result();


		// $data['produk_join'] = $this->Madmin->get_all_data('tbl_produk')->result();
		// $data['toko_join'] = $this->Madmin->get_all_data('tbl_toko')->result();
		// $data['produk_toko'] = $this->Madmin->join2table()->result();

		// join
		$data['produk_toko'] = $this->Madmin->join('tbl_produk', 'tbl_toko', 'tbl_produk.idToko=tbl_toko.idToko')->result();

		$this->load->view('home/layout/header');
		$this->load->view('home/layout/menu', $data);
		$this->load->view('home/layout/footer');
	}

	public function dashboard()
	{
		$this->load->view('home/layout/header');
		$this->load->view('home/dashboard');
		$this->load->view('home/layout/footer');
	}

	public function shop_grid()
	{
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/shop_grid', $data);
		$this->load->view('home/layout/footer');
	}

	public function blog_details($id)
	{
		$dataWhere = array('idBlog' => $id);
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$data['blog'] = $this->Madmin->get_by_id('tbl_blog', $dataWhere)->row_object();
		$data['blog_all'] = $this->Madmin->get_all_data('tbl_blog')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/blog_details', $data);
		$this->load->view('home/layout/footer');
	}

	public function blog()
	{
		$data['blog'] = $this->Madmin->get_all_data('tbl_blog')->result();

		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/blog', $data);
		$this->load->view('home/layout/footer');
	}

	public function contact()
	{
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/contact', $data);
		$this->load->view('home/layout/footer');
	}

	public function login()
	{
		$this->load->view('home/layout/header');
		$this->load->view('home/login');
		$this->load->view('home/layout/footer');
	}

	public function register()
	{
		$this->load->view('home/layout/header');
		$this->load->view('home/register');
		$this->load->view('home/layout/footer');
	}

	public function register_member()
	{
		$username = $this->input->post('username');
		$namaleng = $this->input->post('namalengkap');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');


		$dataInput = array(
			'username' => $username,
			'password' => $pass,
			'namaKonsumen' => $namaleng,
			'alamat' => $alamat,
			'email' => $email,
			'tlpn' => $nohp,
			'statusAktif' => 'Y'
		);

		$this->Madmin->insert('tbl_member', $dataInput);
		redirect('main/login');
	}

	public function login_member()
	{

		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Madmin->cek_login_member($u, $p)->num_rows();
		$result = $this->Madmin->cek_login_member($u, $p)->row_object();

		if ($cek == 1) {
			$data_session = array(
				'idKonsumen' =>  $result->idKonsumen,
				'username' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('main/dashboard');
		} else {
			redirect('main/login');
		}
	}

	// Detail Produk
	public function detail_produk($idProduk)
	{
		$dataWhere = array('idProduk' => $idProduk);
		$data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$data['produk_all'] = $this->Madmin->get_all_data('tbl_produk')->result();
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/shop_details', $data);
		$this->load->view('home/layout/footer');
	}

	public function cart()
	{
		$data['cartItems'] = $this->cart->contents();
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/cart', $data);
		$this->load->view('home/layout/footer');
	}

	public function add_cart($idProduk)
	{
		$dataWhere = array('idProduk' => $idProduk);
		$produk = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();

		// add product to the cart
		$data = array(
			'id' => $produk->idProduk,
			'qty' => 1,
			'price' => $produk->harga,
			'name' => $produk->namaProduk,
			'image' => $produk->foto
		);
		$this->cart->insert($data);
		redirect('main/cart');
	}

	public function delete_cart($rowid)
	{
		$remove = $this->cart->remove($rowid);
		redirect('main/cart');
	}

	// checkout 

	public function check_out()
	{
		$data['produk'] = $this->Madmin->get_all_data('tbl_produk')->row_object();
		$data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/check_out', $data);
		$this->load->view('home/layout/footer');
	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}
}
