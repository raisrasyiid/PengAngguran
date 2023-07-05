<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Toko extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $id = $this->session->userdata('idKonsumen');
        $dataWhere = array('idKonsumen' => $id);
        $data['toko']=$this->Madmin->get_by_id('tbl_toko', $dataWhere)->result();
        
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/index', $data);
        $this->load->view('home/layout/footer');
    }

    public function add(){
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_tambah');
        $this->load->view('home/layout/footer');
    }

  
    public function save(){
        $id = $this->session->userdata('idKonsumen');
        $nama_toko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path'] = './assets/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('logo')){
            $data_file = $this->upload->data();
            $data_insert = array(
                'idKonsumen' => $id,
                'namaToko' => $nama_toko,
                'logo' => $data_file['file_name'],
                'deskripsi' => $deskripsi,
                'statusAktif' => 'Y'
            );
            $this->Madmin->insert('tbl_toko', $data_insert);
            redirect('toko');
        } else {
            redirect('toko/add');
        }
    }

    // public function success(){
    //     // $id = $this->session->userdata('idToko');
    //     // $dataWhere = array('idToko'=>$id);
    //     // $data['idToko']=$idToko;
    //   //  $data['toko']=$this->Madmin->get_by_id('tbl_toko', $dataWhere)->result();
    //     $this->load->view('home/layout/header');
    //     $this->load->view('home/toko/berhasil');
    //     $this->load->view('home/layout/footer');
    // }

    // public function perlengkapan_surat($id){
        
    //    // $id = $this->session->userdata('idToko');
    //    // $id = $this->session->userdata('idKonsumen');
    //     // $dataWhere = array('idToko' => $id);
    //     // $data['toko']=$this->Madmin->get_by_id('tbl_toko', $dataWhere)->result();
        
    //     // $data['idToko']=$idToko;
    //     // $dataWhere = array('idToko'=>$idToko);

       
    // //    $data['idToko']=$idToko;

    // //    $data['toko']=$this->Madmin->get_by_id('tbl_toko', $dataWhere)->result();

    //    $dataWhere = array('idToko'=>$id);
    //    $data['toko'] = $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
    //     $this->load->view('home/layout/header');
    //     $this->load->view('home/toko/form_surat',$data);
    //     $this->load->view('home/layout/footer');
    // }

    // public function save_surat(){
    //     $idToko=$this->input->post('idToko');
    //     $nama = $this->input->post('namaPemilik');
    //     $tahun = $this->input->post('tahunberdiri');
    //     $foto = $this->input->post('foto_toko');
    //     $video = $this->input->post('video_toko');
    //     $alamat = $this->input->post('alamat_toko');

    //     $config['upload_path'] = './assets/validasi/foto/';
    //     $config['allowed_types'] = 'jpg|png|jpeg';

    //     $config['upload_path'] = './assets/validasi/video/';
    //     $config['allowed_types'] = 'mp4|m4v|mov|avi|mkv';
    //     $this->load->library('upload', $config);
    //     if($this->upload->do_upload('foto_toko' && 'video_toko')){
    //         $data_file = $this->upload->data();
    //         $data_insert = array(
    //             'idToko' => $idToko,
    //             'nama_pemilik' => $nama,
    //             'foto_toko' => $data_file['file_name'],
    //             'video_toko'=>$data_file['file_name'],
    //             'alamat_toko' => $alamat
    //         );
    //         $this->Madmin->insert('tbl_surat_toko', $data_insert);
    //         redirect('toko');
    //     } else {
    //         redirect('toko/perlengkapan_surat/'.$idToko);
    //     }
    // }

    public function edit($id){
        $dataWhere = array('idToko'=>$id);
        $data['toko'] = $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_edit', $data);
        $this->load->view('home/layout/footer');
    }

    public function save_edit(){
        $id = $this->input->post('idToko');
        $id_kon = $this->session->userdata('idKonsumen');
        $nama_toko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');
        $config['upload_path'] = './assets/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('logo')){
            $data_file = $this->upload->data();
            $data_insert = array(
                'idKonsumen' => $id_kon,
                'namaToko' => $nama_toko,
                'logo' => $data_file['file_name'],
                'deskripsi' => $deskripsi,
                'statusAktif' => 'Y'
            );
            $this->Madmin->update('tbl_toko', $data_insert, 'idToko', $id);
            redirect('toko');
        } else{
            redirect('toko/edit');
        }
        
    } 
    
    public function delete($id){
        $this->Madmin->delete('tbl_toko', 'idToko', $id);
        redirect('toko');
    }

}
?>