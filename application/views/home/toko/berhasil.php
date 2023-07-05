<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Selamat Anda Berhasil Membuat Toko</h4>
        <input type="hidden" name="idToko" value="<?php echo $toko->idToko; ?>">
        <a href="<?php echo site_url('validasi/'.$toko->idToko);?>" class="btn btn-outline-primary">Edit</a>  
    </div>

</div>