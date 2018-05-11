<div class="row">
    <div class="col-lg-12">
        <h1>Finance <small> Transaksi Expanse</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Transaksi Expanse</li>

        </ol>
    </div>
</div><!-- /.row -->



<!-- notifikasi required data -->
<div class="row">
  <!-- kiri -->                
  <div class="col-lg-12">

    <?php if ( validation_errors() == TRUE ): ?>
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b><?php echo validation_errors('<li>', '</li>') ?></b>
    </div>
<?php endif ?>

</div>
</div>
<!-- notifikasi required data -->

<!-- notifikasi berhasil input data -->
<div class="row">
  <!-- kiri -->                
  <div class="col-lg-12">

    <?php if ( $this->session->flashdata('transaksi_income') == TRUE ): ?>
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b><?php echo $this->session->flashdata('transaksi_income') ?></b>
    </a>.
</div>
<?php endif ?>

</div>
</div>
<!-- notifikasi berhasil input data -->

<!-- notifikasi berhasil selesai transaksi -->
<div class="row">
  <!-- kiri -->                
  <div class="col-lg-12">

    <?php if ( $this->session->flashdata('selesai_transaksi') == TRUE ): ?>
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b><?php echo $this->session->flashdata('selesai_transaksi') ?></b>
    </a>.
</div>
<?php endif ?>

</div>
</div>
<!-- notifikasi berhasil selesai transaksi -->

<!-- notifikasi delete data -->
<div class="row">
    <!-- kiri -->                
    <div class="col-lg-12">

        <?php if ( $this->session->flashdata('transaksi_delete') == TRUE ): ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><?php echo $this->session->flashdata('transaksi_delete') ?></b>
            </a>.
        </div>
    <?php endif ?>

</div>
</div>
<!-- notifikasi delete data -->

<?php echo form_open('transaksi/transaksi_expanse'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Input Transkasi Expanse</b></h3>
            </div>
            <div class="panel-body">

                <!-- form 2 display -->
                <div class="row">
                    <!-- input text kiri -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>EXPANSE : </label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="expanse" class="form-control" placeholder="input expanse">
                            </div>
                        </div>
                    </div>
                    <!-- input text kiri -->
                    <!-- input text kanan -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>QTY : </label>
                            <input type="text" name="qty" class="form-control" placeholder="Qty Barang">
                        </div>
                    </div>
                    <!-- input text kanan -->
                </div>
                <!-- form 2 display -->
                <!-- form 2 display -->
                <div class="row">
                    <!-- input text kiri -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>ACCOUNT : </label>
                            <select class="form-control" name="id_account">
                                <?php foreach ($account as $data): ?>
                                    <option value="<?php echo $data['id_account'] ?>">
                                        <?php echo $data['account_name'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <!-- input text kiri -->
                    <!-- input text kanan -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>CATEGORY : </label>
                            <select class="form-control" name="id_category">
                                <?php foreach ($category as $data): ?>
                                    <option value="<?php echo $data['id_category'] ?>">
                                        <?php echo $data['category_name'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <!-- input text kanan -->
                </div>
                <!-- form 2 display -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>KETERANGAN</label>
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-xs-8 col-sm-6 col-md-10">

                        <input type="submit" name=submit"" value="Simpan" class="btn btn-warning">

                        <a href="<?php echo base_url('transaksi/selesai_transaksi') ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Selesai</a> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>

<!-- 1 kolom -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Input Transkasi Expanse</b></h3>
            </div>
            <div class="panel-body">
                <!-- isi table -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ACCOUNT </th>
                                <th>CATEGORY </th>
                                <th>KETERANGAN </th>
                                <th>EXPANSE</th>
                                <th>QTY </th>
                                <th>TOTAL</th>
                                <th>CANCEL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no    = 1; ?>
                            <?php $total = 0 ?>
                            <?php foreach ($data_transaksi as $data): ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['account_name'] ?></td>
                                    <td><?php echo $data['category_name'] ?></td>
                                    <td><?php echo $data['keterangan'] ?></td>
                                <?php $expanse = $data['expanse'] ?>
                                    <td>Rp. <?php echo number_format($expanse, 0, ".", ".") ?>,-</td>
                                    <td><?php echo $data['qty'] ?></td>
                                <?php $total = $data['qty'] * $data['expanse'] ?>
                                    <td>Rp. <?php echo number_format($total, 0, ".", ".") ?>,-</td>
                                    <td><a href="<?php echo base_url('transaksi/transaksi_expanse_delete/'.$data['t_detail_id']) ?>">DELETE</a></td>
                                </tr>
                                <?php $sub_total = 100 ?>
                            <?php endforeach ?>
                            <tr>
                                <td colspan="6" align="right">TOTAL : </td>
                                <td colspan="2"><b>Rp. <?php echo number_format($data_total_transaksi['total'], 0, ".", ".") ?>,-</b></td>
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