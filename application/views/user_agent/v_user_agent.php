<div class="row">
    <div class="col-lg-12">
        <h1>Finance <small> User Agent</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">User agent</li>

        </ol>
    </div>
</div><!-- /.row -->

<!-- 1 kolom -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Default</h3>
            </div>
            <div class="panel-body">

                <!-- isi table -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NO </th>
                                <th>IP ADDRESS </th>
                                <th>DASHBOARD</th>
                                <th>OS </th>
                                <th>BROWSER </th>
                                <th>JAM KUNJUNGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($view_dashboard as $data): ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['ip'] ?></td>
                                    <td><?php echo $data['banyak_kedashboard'] ?> x dilihat </td>
                                    <td><?php echo $data['os'] ?></td>
                                    <td><?php echo $data['browser'] ?></td>
                                    <td><?php echo $data['time_date'] ?></td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
                <!-- isi tables -->

            </div>
        </div>
    </div>
</div>
<!-- 1 kolom -->
