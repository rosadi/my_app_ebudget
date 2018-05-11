<div class="row">
  <div class="col-lg-12">
    <h1>Finance <small> Account</small></h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>"><i class="icon-file-alt fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url('account/account') ?>"> Account</a></li>
      <li class="active">Account Edit</li>

    </ol>
  </div>
</div><!-- /.row -->

<!-- 1 kolom -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title"><b>Edit data Account</b></h3>
      </div>
      <div class="panel-body">

        <?php echo form_open('account/edit_account/'.$data_account_id['id_account']); ?>
        <?php echo validation_errors('<li>', '</li>'); ?>

        <div class="form-group">
         <label>Account Name :</label>

         <input type="text" name="account_name" class="form-control" value="<?php echo $data_account_id['account_name'] ?>">

         <p class="help-block">Update account name text here.</p>
       </div>

       <input type="submit" name="submit" value="UPDATE" class="btn btn-warning col-xs-12 col-md-12">
       
       <?php echo form_close(); ?>

     </div>
   </div>
 </div>
</div>
<!-- 1 kolom -->

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
          <table class="table table-hover" >
            <thead>
              <tr>
                <th width="50px">NO </th>
                <th>ACCOUNT NAME </th>
                <th width="20px" colspan="2"><center>ACTION</center> </th>
              </tr>
            </thead>
            <tbody>
            
               <?php $no = 1; ?>
              <?php foreach ($data_account as $data): ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['account_name'] ?></td>
                  <td width="80px" align="center">
                    <a href="<?php echo base_url('account/edit_account/'.$data['id_account']) ?>" class="btn btn-success btn-xs" onclick="return confirm('Are you sure?')">
                      <i class=" fa fa-edit" ></i> 
                      EDIT
                    </a>
                  </td>
                  <td width="80px" align="center">
                    <a href="<?php echo base_url('account/delete_account/'.$data['id_account']) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">
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