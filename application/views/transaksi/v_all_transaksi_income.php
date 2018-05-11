<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Data Income</small></h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">All data income</li>
    </ol>
  </div>
</div><!-- /.row -->

<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">DATA INCOME</h3>
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
                  <td>Rp. <?php echo number_format($data['income'], 0, ".", ".") ?>,-</td>
                  <td>
                    <a href="<?php echo base_url('dashboard/get_income_id/'.$data['id_transaksi']) ?>">DETAIL</a>
                  </td>
                </tr>
                <?php $total = $total + $data['income'] ?>
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
    <a href="<?php echo base_url('transaksi/laporan_excel_income') ?>">PRINT</a>  
  </div>
</div>