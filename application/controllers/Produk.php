<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index($idToko){
        $data['idToko']=$idToko;
        $dataWhere = array('idToko'=>$idToko);
        $data['produk']=$this->Madmin->get_by_id('tbl_produk', $dataWhere)->result();
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();

        $this->load->view('home/layout/header',$data);
        $this->load->view('home/produk/index', $data);
        $this->load->view('home/layout/footer');
    }

    public function add($idToko){
        $data['idToko']=$idToko;
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/produk/form_tambah', $data);
        $this->load->view('home/layout/footer');
    }

    public function save(){
        $idToko=$this->input->post('idToko');
        $idKategori=$this->input->post('kategori');
        $namaProduk=$this->input->post('namaProduk');
        $hargaProduk=$this->input->post('hargaProduk');
        $jumlahProduk=$this->input->post('jumlahProduk');
        $beratProduk=$this->input->post('beratProduk');
        $deskripsi=$this->input->post('deskripsi');
        $informasi=$this->input->post('informasi');

        $config['upload_path'] = './assets/foto_produk/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $data_file = $this->upload->data();
            $data_insert = array(
                'idKat'=>$idKategori,
                'namaProduk'=>$namaProduk,
                'idToko'=>$idToko,
                'harga'=>$hargaProduk,
                'stok'=>$jumlahProduk,
                'berat'=>$beratProduk,
                'foto'=>$data_file['file_name'],
                'deskripsiProduk'=>$deskripsi,
                'informasi'=>$informasi
            );
            $this->Madmin->insert('tbl_produk', $data_insert);
            redirect('produk/index/'.$idToko);
        } else {
            redirect('produk/add/'.$idToko);
        }
    }

    public function edit($id){
        // $data['idToko']=$idToko;
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();

        $dataWhere = array('idProduk'=>$id);
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/produk/form_edit', $data);
        $this->load->view('home/layout/footer');
    }

    public function save_edit(){
        $idProduk=$this->input->post('idProduk');
        $idToko=$this->input->post('idToko');
        $idKategori=$this->input->post('kategori');
        $namaProduk=$this->input->post('namaProduk');
        $hargaProduk=$this->input->post('hargaProduk');
        $jumlahProduk=$this->input->post('jumlahProduk');
        $beratProduk=$this->input->post('beratProduk');
        $deskripsi=$this->input->post('deskripsi');
        $informasi=$this->input->post('informasi');
        
        $config['upload_path'] = './assets/foto_produk/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $data_file = $this->upload->data();
            $data_insert = array(
                'idKat'=>$idKategori,
                'namaProduk'=>$namaProduk,
                'idToko'=>$idToko,
                'harga'=>$hargaProduk,
                'stok'=>$jumlahProduk,
                'berat'=>$beratProduk,
                'foto'=>$data_file['file_name'],
                'deskripsiProduk'=>$deskripsi,
                'informasi'=>$informasi
            );
            $this->Madmin->update('tbl_produk', $data_insert,'idProduk', $idProduk);
            redirect('produk/index/'.$idToko);
        } else {
            redirect('produk/edit/'.$idProduk);
        }
    }

    
    public function delete($id, $idToko){
        $this->Madmin->delete('tbl_produk', 'idProduk', $id);
        redirect('produk/index/'.$idToko);
    }

}