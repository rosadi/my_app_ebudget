<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Category Expanse</small></h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Category Expanse</li>
    </ol>
  </div>
</div><!-- /.row -->

<!-- notifikasi berhasil input data -->
<div class="row">
  <!-- kiri -->                
  <div class="col-lg-12">

    <?php if ( $this->session->flashdata('category_expanse_input') == TRUE ): ?>
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b><?php echo $this->session->flashdata('category_expanse_input') ?></b>
      </a>.
    </div>
  <?php endif ?>

</div>
</div>
<!-- notifikasi berhasil input data -->

<!-- notifikasi berhasil update data -->
<div class="row">
  <!-- kiri -->                
  <div class="col-lg-12">

    <?php if ( $this->session->flashdata('category_expanse_update') == TRUE ): ?>
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b><?php echo $this->session->flashdata('category_expanse_update') ?></b>
      </a>.
    </div>
  <?php endif ?>

</div>
</div>
<!-- notifikasi berhasil update data -->


<!-- notifikasi berhasil validation_errors data -->
<div class="row">
  <!-- kiri -->                
  <div class="col-lg-12">

    <?php if ( validation_errors() == TRUE ): ?>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b><?php echo validation_errors('<li>', '</li>'); ?></b>
      </div>
    <?php endif ?>

  </div>
</div>
<!-- notifikasi berhasil validation_errors data -->

<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><b>Input data Category Expanse</b></h3>
      </div>
      <div class="panel-body">

        <?php echo form_open('category/category_expanse'); ?>


        <div class="form-group">
          <label>Category Name :</label>
          <input type="text" name="category_name" class="form-control">
          <p class="help-block">Input category name text here.</p>
        </div>

        <input type="submit" name="submit" value="SAVE" class="btn btn-primary col-xs-12 col-md-12">

        <?php echo form_close(); ?>

      </div>
    </div>
  </div>
</div>
<!-- 1 kolom -->

<!-- table -->
<div class="row">

  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <b>DATA CATEGORY EXPANSE</b>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">

        <!-- isi table -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th width="50px">NO </th>
                <th>CATEGORY NAME </th>
                <th colspan="2"><center>ACTION</center> </th>
              </tr>
            </thead>
            <tbody>

              <?php $no = 1; ?>
              <?php foreach ($data_category_expanse as $data): ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['category_name'] ?></td>
                  <td width="80px" align="center">
                    <a href="<?php echo base_url('category/edit_category_expanse/'.$data['id_category']) ?>" class="btn btn-success btn-xs" onclick="return confirm('Are you sure?')">
                      <i class=" fa fa-edit" ></i> 
                      EDIT
                    </a>
                  </td>

                  <td width="80px" align="center">
                    <a href="<?php echo base_url('category/delete_category_expanse/'.$data['id_category']) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">
                      <i class="fa fa-trash-o"></i> 
                      DELETE
                    </a>
                  </td>
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
<!-- table -->