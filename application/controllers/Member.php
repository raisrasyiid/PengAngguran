<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $data['member'] = $this->Madmin->get_all_data('tbl_member')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/member/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function ubah_status($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $dataWhere = array('idKonsumen' => $id);
        $result = $this->Madmin->get_by_id('tbl_member', $dataWhere)->row_object();
        $status = $result->statusAktif;
        if ($status == "Y") {
            $dataUpdate = array('statusAktif' => "N");
        } else {
            $dataUpdate = array('statusAktif' => "Y");
        }
        $this->Madmin->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member');
    }


    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->Madmin->delete('tbl_member', 'idKonsumen', $id);
        redirect('member');
    }

    // menampilkan member bedasarkan id
    public function tampil_profile()
    {

        $id = $this->session->userdata('idKonsumen');
        $dataWhere = array('idKonsumen' => $id);
        $data['memberEdit'] = $this->Madmin->get_by_id('tbl_member', $dataWhere)->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/member/index', $data);
        $this->load->view('home/layout/footer');
    }

    public function edit_profile_member($id)
    {
        $dataWhere = array('idKonsumen' => $id);
        $data['memberEdit'] = $this->Madmin->get_by_id('tbl_member', $dataWhere)->row_object();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/member/form_edit', $data);
        $this->load->view('home/layout/footer');
    }

    public function save_edit_member_profile()
    {

        $id = $this->input->post('idKonsumen');
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $notlp = $this->input->post('notlp');
        $alamat = $this->input->post('alamat');


        $dataUpdate = array(
            'username' => $username,
            'password' => $pass,
            'namaKonsumen' => $nama,
            'email' => $email,
            'tlpn' => $notlp,
            'alamat' => $alamat
        );
        $this->Madmin->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member/tampil_profile');
    }
}
