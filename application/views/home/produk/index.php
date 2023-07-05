<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Data Produk</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-12 mb-5">
            <a href="<?php echo site_url('produk/add/' . $idToko); ?>" class="btn bnt-sm btn-info float-left mb-3">Tambah Produk</a>
            <table class="table table-boardered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Informasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($produk as $val) { ?>
                        <tr>
                            <th scope="row"> <?php echo $no; ?></th>
                            <td><?php echo $val->namaProduk; ?></td>
                            <td><img src="<?php echo base_url('assets/foto_produk/' . $val->foto); ?>" width="150" height="110"></td>
                            <td><?php echo $val->harga; ?></td>
                            <td><?php echo $val->stok; ?></td>
                            <td><?php echo $val->berat; ?></td>
                            <td><?php echo $val->deskripsiProduk; ?></td>
                            <td><?php echo $val->informasi; ?></td>
                            <td>
                                <a href="<?php echo site_url('produk/edit/' . $val->idProduk); ?>" class="btn btn-outline-primary">Edit</a>
                                <a href="<?php echo site_url('produk/delete/' . $val->idProduk . '/' . $val->idToko); ?>" onclick="return confirm('Yakin Akan Menghapus Data ini? - Admin')" class="btn btn-outline-danger">Hapus</a>

                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>