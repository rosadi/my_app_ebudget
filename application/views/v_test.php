<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Dashboard</small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</li>
    </ol>
  </div>
</div><!-- /.row -->

<?php 

# menampilkan tanggal data awal bulan dan akhir bulan
date_default_timezone_set("Asia/Jakarta");
$hari_ini = date("Y-m-d");
$tgl_pertama = date('Y-m-01', strtotime($hari_ini));
$tgl_terakhir = date('Y-m-t', strtotime($hari_ini));
?>

<table>
  <tr>
    <th>AWAL BULAN</th> <td> <?php echo $tgl_pertama ?></td>
  </tr>
  <tr>
    <th>AKHIR BULAN</th> <td> <?php echo $tgl_terakhir ?></td>
  </tr>
  <tr>
    <th>HARI INI</th> <td> <?php echo $hari_ini ?></td>
  </tr>
</table>

<div class="container">    
<!-- Tombol untuk menampilkan modal-->

<div class="row">
  <br><a href="" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">MODAL POP UP</a><br><br>
</div>

<!-- ======================================MODAL POP UP========================================= -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bagian heading modal</h4>
      </div>
      <!-- body modal -->
      <div class="modal-body">
        <p>disini nanti isi nya</p>
        
      </div>
      <!-- footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- ======================================MODAL POP UP========================================= -->

<div class="row">
  
<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Panel Default</h3>
      </div>
      <div class="panel-body">
        Panel Tengah
      </div>
    </div>
  </div>
</div>
<!-- 1 kolom -->

<!-- 3 kolom -->
<div class="row"> <!-- .row --> 
  <!-- kiri -->
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Panel primary</h3>
      </div>
      <div class="panel-body">
        Panel Kiri
      </div>
    </div>

  </div>
  <!-- tengah -->
  <div class="col-lg-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Panel danger</h3>
      </div>
      <div class="panel-body">
        Panel Tengah
      </div>
    </div>
  </div>
  <!-- kanan -->
  <div class="col-lg-4">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Panel Success</h3>
      </div>
      <div class="panel-body">
        Panel Tengah
      </div>
    </div>
  </div>

</div><!-- /.row -->
<!-- 3 kolom -->

<!-- table -->
<div class="row">

  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        DATA ACCOUNT
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">

        <!-- isi table -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Page </th>
                <th>Visits </th>
                <th>% New Visits </th>
                <th>Revenue </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>/index.html</td>
                <td>1265</td>
                <td>32.3%</td>
                <td>$321.33</td>
              </tr>
              <tr>
                <td>/about.html</td>
                <td>261</td>
                <td>33.3%</td>
                <td>$234.12</td>
              </tr>
              <tr>
                <td>/sales.html</td>
                <td>665</td>
                <td>21.3%</td>
                <td>$16.34</td>
              </tr>
              <tr>
                <td>/blog.html</td>
                <td>9516</td>
                <td>89.3%</td>
                <td>$1644.43</td>
              </tr>
              <tr>
                <td>/404.html</td>
                <td>23</td>
                <td>34.3%</td>
                <td>$23.52</td>
              </tr>
              <tr>
                <td>/services.html</td>
                <td>421</td>
                <td>60.3%</td>
                <td>$724.32</td>
              </tr>
              <tr>
                <td>/blog/post.html</td>
                <td>1233</td>
                <td>93.2%</td>
                <td>$126.34</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- isi tables -->

      </div>
    </div>
  </div>  
</div>
<!-- table -->

<!-- form 2 display -->
<div class="row">
  <!-- input text kiri -->
  <div class="col-lg-6">
    <div class="form-group">
      <label>Text Input</label>
      <input class="form-control">
      <p class="help-block">Example block-level help text here.</p>
    </div>
  </div>
  <!-- input text kiri -->
  
  <!-- input text kanan -->
  <div class="col-lg-6">
    <div class="form-group">
      <label>Text Input</label>
      <input class="form-control">
      <p class="help-block">Example block-level help text here.</p>
    </div>
  </div>
</div>
<!-- input text kanan -->
<!-- form 2 display -->
</div>