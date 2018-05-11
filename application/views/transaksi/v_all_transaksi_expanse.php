<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Data Expanse</small></h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">All data expanse</li>
    </ol>
  </div>
</div><!-- /.row -->

<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">DATA EXPANSE</h3>
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
              <?php $no = 1; ?>

              <?php foreach ($data_transaksi_all as $data): ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <?php $tanggal = $data['tanggal_transaksi'] ?>
                  <td><?php echo date("d-M-Y", strtotime($tanggal)) ?></td>
                  <td>Rp. <?php echo number_format($data['expanse'], 0, ".", ".") ?>,-</td>
                  <td>
                    <a href="<?php echo base_url('dashboard/get_expanse_id/'.$data['id_transaksi']) ?>">DETAIL</a>
                  </td>
                </tr>
              <?php $total = $total + $data['expanse'] ?>
              <?php endforeach ?>

              <tr>
                <td colspan="2" align="right">TOTAL : </td>
                <td colspan="2"><b>Rp. <?php echo number_format($total, 0, ".", ".") ?>,-</b></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- isi tables -->
      </div>
    </div>
  </div>
</div>
<!-- 1 kolom -->

<div class="row">
  <div class="col-lg-12">
    <a href="<?php echo base_url('transaksi/laporan_excel_expanse') ?>">PRINT</a>  
  </div>
</div>