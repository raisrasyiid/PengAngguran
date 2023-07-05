<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Data Toko</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-12 mb-5">
            <a href="<?php echo site_url('toko/add'); ?>" class="btn bnt-sm btn-info float-left mb-3">Tambah Toko</a>
            <table class="table table-boardered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach($toko as $val) { ?>
                        <tr>
                            <th scope="row"> <?php echo $no; ?></th>
                            <td><?php echo $val->namaToko; ?></td>
                            <td><img src="<?php echo base_url('assets/logo_toko/'.$val->logo); ?>" width="150" height="110"></td>
                            <td><?php echo $val->deskripsi; ?></td>
                           
                            <td>
                                <a href="<?php echo site_url('toko/edit/'.$val->idToko);?>" class="btn btn-outline-primary">Edit</a>  
                                <a href="<?php echo site_url('produk/index/'.$val->idToko);?>" class="btn btn-outline-info">Kelola Toko</a>  
                                <a href="<?php echo site_url('toko/delete/'.$val->idToko);?>" onclick="return confirm('Yakin Akan Menghapus Data ini? - Admin')" class="btn btn-outline-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>