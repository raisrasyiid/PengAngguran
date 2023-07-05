<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index(){
        if (empty($this->session->userdata('userName'))){
            redirect('adminpanel');
        }
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/kategori/tampil', $data);
        $this->load->view('admin/layout/footer');   
	}

    public function add(){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/kategori/formAdd');
        $this->load->view('admin/layout/footer');   
    }

    public function save_add(){
        $namakat = $this->input->post('namaKat');

        $data = array(
            'namaKat' => $namakat
        );
        $this->Madmin->insert('tbl_kategori', $data);
        redirect('kategori');
    }

    public function edit($id){
        $dataWhere = array('idKat'=>$id);
        $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');   
    }

    public function save_edit(){
        $id = $this->input->post('id');
        $namaKategori = $this->input->post('namaKat');

        $dataUpdate = array('namaKat' => $namaKategori);
        $this->Madmin->update('tbl_kategori', $dataUpdate, 'idKat', $id);
        redirect('kategori');
    }

    public function delete($id){
        $this->Madmin->delete('tbl_kategori', 'idKat', $id);
        redirect('kategori');
    }
}