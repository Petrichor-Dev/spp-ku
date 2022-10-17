
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
              <tr>
                <th>#</th>
                <th>GAMBAR</th>
                <th>NAMA</th>
                <th>NISN</th>
                <th>NOMOR TELPON</th>
                <th>NOMINAL / BULAN</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <?php $n = 1;?>
              <?php foreach ($data as $d) :?>
              <tr>
                <td><b><?= $n; ?></b> </td>
                <td>
                  <img style="width:50px; border-radius:50%; disp" src="<?= base_url()?>assets/img/img_profiles/<?= $d["gambar"]?>" alt="gadis mutia ayumi">
                </td>
                <td><b><?= $d["nama"]?></b></td>
                <td><?= $d["nisn"]?></td>
                <td>0<?= $d["nomor_telpon"]?></td>
                <td>Rp. <?= number_format($d["nominal/bulan"])?>,-</td>
                <td class="text-right">
                  <a href="<?= base_url()?>admin/transaksi/<?= $d['id_spp']?>/<?= $d['nisn']?>" style="border-radius:5px" class="btn btn-success">
                  <img style="width:19px; margin-top:-7px; margin-right:2px; height:17px;" src="<?= base_url()?>assets/img/transaksi3.png">  
                  <b>Bayar SPP</b> </a>

                  <a href="<?= base_url()?>admin/history/<?= $d['nisn']?>" style="border-radius:5px" class="btn btn-primary">
                  <img style="width:24px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/history.png">  
                  <b>History</b> </a>

                </td>
              </tr>
              <?php $n++?>
            <?php endforeach;?>
          </tbody>
              <!-- <tfoot>
              <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Username</th>
                <th>Nama Petugas</th>
                </tr>
              </tfoot> -->
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
