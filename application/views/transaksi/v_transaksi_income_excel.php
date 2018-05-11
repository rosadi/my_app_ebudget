<h3>DATA INCOME</h3>

<table class="table table-hover" border="1" cellpadding="5" cellspacing="1">
  <thead>
    <tr>
      <th>NO TRX</th>
      <th>TANGGAL </th>
      <th>TOTAL TRANSAKSI </th>
    </tr>
  </thead>
  <tbody>
    <?php $total = 0 ?>
    <?php $no = 1; ?>

    <?php foreach ($data_excel as $data): ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['tanggal_transaksi'] ?></td>
        <td>Rp. <?php echo number_format($data['income'], 0, ".", ".") ?>,-</td>
      </tr>
      <?php $total = $total + $data['income'] ?>
    <?php endforeach ?>

    <tr>
      <td colspan="2" align="right">TOTAL : </td>
      <td><b>Rp. <?php echo number_format($total, 0, ".", ".") ?>,-</b></td>
    </tr>
  </tbody>
</table>