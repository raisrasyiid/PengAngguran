<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index(){
        if (empty($this->session->userdata('userName'))){
            redirect('adminpanel');
        }
        $data['blog']=$this->Madmin->get_all_data('tbl_blog')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/blog/tampil', $data);
        $this->load->view('admin/layout/footer');   
	}

    public function add(){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/blog/formAdd');
        $this->load->view('admin/layout/footer');   
    }

    public function save_add_blog(){
       $tanggal = $this->input->post('tanggal');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

      
        $config['upload_path'] = './assets/blog/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover_blog')){
            $data_file = $this->upload->data();
            $data_insert = array(
                'judul_blog' => $judul,
                'tanggal' => $tanggal,
                'cover_blog' => $data_file['file_name'],
                'isi_blog' => $isi
                
            );
            $this->Madmin->insert('tbl_blog', $data_insert);
            redirect('blog');
        } else {
            redirect('blog/add');
        }
    }

    public function edit($id){
        $dataWhere = array('idBlog'=>$id);
        $data['blog'] = $this->Madmin->get_by_id('tbl_blog', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/blog/formEdit', $data);
        $this->load->view('admin/layout/footer');   
    }

    public function save_edit_blog(){
        $id = $this->input->post('idBlog');
        $tanggal = $this->input->post('tanggal');
        $judul = $this->input->post('judul');
       // $cover_blog = $this->input->post('cover_blog');
        $isi = $this->input->post('isi');

         
        $config['upload_path'] = './assets/blog/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover_blog')){
            $data_file = $this->upload->data();
            $data_insert = array(
                'judul_blog' => $judul,
                'tanggal' => $tanggal,
                'cover_blog' => $data_file['file_name'],
                'isi_blog' => $isi
                
            );
            $this->Madmin->update('tbl_blog', $data_insert, 'idBlog', $id);
            redirect('blog');
        } else{
            redirect('blog/edit');
        }

    }

    public function delete($id){
        $this->Madmin->delete('tbl_blog', 'idBlog', $id);
        redirect('blog');
    }
}