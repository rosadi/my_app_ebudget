<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Dashboard</small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</li>
    </ol>
  </div>
</div><!-- /.row -->


<!-- 2 kolom -->
<div class="row"> <!-- .row --> 
  <div class="col-lg-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <?php 
        // hari ini, awal bulan, akhir bulan
        date_default_timezone_set("Asia/Jakarta");
        $hari_ini = date("Y-m-d");
        $tgl_pertama = date('01-m-Y', strtotime($hari_ini));
        $tgl_terakhir = date('t-m-Y', strtotime($hari_ini));
        // hari ini, awal bulan, akhir bulan
        ?>
        <h3 class="panel-title"><i class="fa fa-calendar"></i> <b>Pemasukan : </b> <?php echo $tgl_pertama ?> s/d <?php echo $tgl_terakhir ?></h3>
      </div>
      <div class="panel-body">

        <!-- isi table -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>NO TRX</th>
                <th>TANGGAL </th>
                <th>TOTAL TRANSAKSI </th>
                <th>DETAIL </th>
              </tr>
            </thead>
            <tbody>
              <?php $total = 0 ?>
              <?php foreach ($data_income as $data): ?>
                <tr>
                  <td><?php echo $data['id_transaksi'] ?></td>
                  <?php $tanggal = $data['tanggal_transaksi'] ?>
                  <td><?php echo date("d-M-Y", strtotime($tanggal)) ?></td>
                  <td>Rp. <?php echo number_format($data['total'], 0, ".", ".") ?>,-</td>
                  <td>
                    <a href="<?php echo base_url('dashboard/get_income_id/'.$data['id_transaksi']) ?>"><i class="fa fa-chevron-circle-right"></i> DETAIL</a>
                  </td>
                </tr>
                <?php $total = $total + $data['total'] ?>
              <?php endforeach ?>
              <tr>
                <td colspan="2" align="right">TOTAL : </td>
                <td colspan="2"><b>Rp. <?php echo number_format($total, 0, ".", ".") ?>,-</b></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- isi tables -->
        

        <hr>
        <a href="<?php echo base_url('transaksi/data_all_income') ?>" class="btn btn-success btn-sm"><i class="fa fa-bar-chart-o"></i> DATA ALL</a>
        <a href="<?php echo base_url('transaksi/transaksi_income') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> INPUT INCOME</a>
      </div>
    </div>

  </div>


  <div class="col-lg-6">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-calendar"></i> <b>Pengeluaran : </b><?php echo $tgl_pertama ?> s/d <?php echo $tgl_terakhir ?></h3>
      </div>
      <div class="panel-body">
        <!-- isi table -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>NO TRX</th>
                <th>TANGGAL </th>
                <th>TOTAL TRANSAKSI </th>
                <th>DETAIL </th>
              </tr>
            </thead>
            <tbody>
              <?php $total = 0 ?>
              <?php foreach ($data_expanse as $data): ?>
                <tr>
                  <td><?php echo $data['id_transaksi'] ?></td>
                  <?php $tanggal = $data['tanggal_transaksi'] ?>
                  <td><?php echo date("d-M-Y", strtotime($tanggal)) ?></td>
                  <td>Rp. <?php echo number_format($data['total'], 0, ".", ".") ?>,-</td>
                  <td><a href="<?php echo base_url('dashboard/get_expanse_id/'.$data['id_transaksi']) ?>"><i class="fa fa-chevron-circle-right"></i> DETAIL</a></td>
                </tr>
                <?php $total = $total + $data['total'] ?>
              <?php endforeach ?>
              <tr>
                <td colspan="2" align="right">TOTAL : </td>
                <td colspan="2"><b>Rp. <?php echo number_format($total, 0, ".", ".") ?>,-</b></td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>
        <a href="<?php echo base_url('transaksi/data_all_expanse') ?>" class="btn btn-success btn-sm"><i class="fa fa-bar-chart-o"></i> DATA ALL</a>
        <a href="<?php echo base_url('transaksi/transaksi_expanse') ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> INPUT EXPANSE</a>
      </div>
    </div>


  </div>
</div><!-- /.row -->
<!-- 2 kolom -->

<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Balancing Selisih...</h3>
      </div>
      <div class="panel-body">
        <table>
          <tr>
            <td><h4>Pemasukan</h4></td>
            <td><h4> : </h4></td>
            <td>
              <!-- MENAMPILKAN DATA INCOME -->
              <h4>Rp. <?php echo number_format($total_sel_income['total'], 0, ".", ".") ?>,-</h4>
              <!-- MENAMPILKAN DATA INCOME -->                      
            </td>
          </tr>
          <tr>
            <td><h4>Pengeluaran</h4></td>
            <td><h4>:</h4></td>
            <td>
              <!-- MENAMILKAN DATA EXPANSE -->
              <h4>Rp. <?php echo number_format($total_sel_expanse['total'], 0, ".", ".") ?>,-</h4>
              <!-- MENAMILKAN DATA EXPANSE -->  
            </td>
          </tr>
          <tr>
            <td><h4><b>TOTAL</b></h4></td>
            <td><h4>:</h4></td>
            <td>
              <!-- DATA TOTAL TRANSAKSI -->
              <h4>Rp. <?php echo number_format($total_sel_inc_exp['total_selisih'], 0, ".", ".") ?>,-</h4>
              <!-- DATA TOTAL TRANSAKSI -->                        
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- 1 kolom -->
