<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid mb-5"></div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Data Member</h4>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            <!-- /.card-header -->

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Usernama</th>
                  <th>Password</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Status Aktif</th>
                  <th style="width: 100px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($memberEdit as $val) { ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $val->username; ?></td>
                    <td><?php echo $val->password; ?></td>
                    <td><?php echo $val->namaKonsumen; ?></td>
                    <td><?php echo $val->email; ?></td>
                    <td><?php echo $val->tlpn; ?></td>
                    <td><?php echo $val->alamat; ?></td>
                    <td><?php if ($val->statusAktif == "Y") {
                          echo "Aktif";
                        } else {
                          echo "Tidak Aktif";
                        }; ?></td>
                    <td>

                      <a href="<?php echo site_url('member/edit_profile_member/' . $val->idKonsumen); ?>" class="btn btn-outline-primary">Edit</a>

                    </td>
                  </tr>
                <?php $no++;
                } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">

          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>