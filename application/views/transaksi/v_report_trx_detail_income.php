<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Transaksi Detail</small></h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Transaksi Detail Income</li>

    </ol>
  </div>
</div><!-- /.row -->

<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">DETAIL TRANSAKSI FROM NO :  <?php echo $this->uri->segment(3) ?></h3>
      </div>
      <div class="panel-body">
        <!-- isi table -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>NO </th>
                <th>TANGGAL</th>
                <th>ACCOUNT </th>
                <th>CATEGORY </th>
                <th>INCOME </th>
                <th>KETARANGAN</th>
              </tr>
            </thead>
            <tbody>
            <?php $total = 0 ?>
            <?php $no = 1; ?>
            <?php foreach ($data_income_id as $data): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <?php $id_transaksi = $data['id_transaksi'] ?>
                <?php $tanggal = $data['tanggal_transaksi'] ?>
                <td><?php echo date("d-M-Y", strtotime($tanggal)) ?></td>
                <td><?php echo $data['account_name'] ?></td>
                <td><?php echo $data['category_name'] ?></td>
                <td>Rp. <?php echo number_format($data['income'], 0, ".", ".") ?>,-</td>
                <td><?php echo $data['keterangan'] ?></td>
            </tr>
            <?php $total = $total + $data['income'] ?>
            <?php endforeach ?>

            <tr>
                <td colspan="4" align="right"><b>TOTAL : </b></td>
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