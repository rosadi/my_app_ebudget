<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FINANCE APPLICATION</title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
  
  <!-- Add custom CSS here -->
  <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">

</head>

<body>
  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('dashboard/page_dashboard') ?>">Finance - Application</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav"> <!-- UL AWAL --> 

          <li class="<?=($this->uri->segment(2)==='page_dashboard')?'active':''?>">
            <a href="<?php echo base_url('dashboard/page_dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>

          <li class="<?=($this->uri->segment(2)==='account')?'active':''?>">
            <a href="<?php echo base_url('account/account') ?>"><i class="fa fa-arrow-right"></i> Account</a>
          </li>

          <li class="dropdown 
          <?=($this->uri->segment(2)==='category_income')?'active':''?>
          <?=($this->uri->segment(2)==='edit_category_income')?'active':''?>
          <?=($this->uri->segment(2)==='category_expanse')?'active':''?>
          ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Setting Category <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('category/category_income') ?>"><i class="fa fa-dollar"></i> Category Income</a></li>
            <li><a href="<?php echo base_url('category/category_expanse') ?>"><i class="fa fa-dollar"></i> Category Expanse</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Laporan <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Laporan Income</a></li>
            <li><a href="#">Laporan Expanse</a></li>
            <li><a href="#">Laporan Per-periode</a></li>
          </ul>
        </li>

        <li class="<?=($this->uri->segment(2)==='sample_page')?'active':''?>">
          <a href="<?php echo base_url('dashboard/sample_page') ?>"><i class="fa fa-file"></i> Sample</a>
        </li>


      </ul> <!-- UL AKHIR -->



      <ul class="nav navbar-nav navbar-right navbar-user">
        <li class="dropdown messages-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">7 New Messages</li>
            <li class="message-preview">
              <a href="#">
                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                <span class="name">John Smith:</span>
                <span class="message">Hey there, I wanted to ask you something...</span>
                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
              </a>
            </li>
            <li class="divider"></li>
            <li class="message-preview">
              <a href="#">
                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                <span class="name">John Smith:</span>
                <span class="message">Hey there, I wanted to ask you something...</span>
                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
              </a>
            </li>
            <li class="divider"></li>
            <li class="message-preview">
              <a href="#">
                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                <span class="name">John Smith:</span>
                <span class="message">Hey there, I wanted to ask you something...</span>
                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
              </a>
            </li>
            <li class="divider"></li>
            <li><a href="#">View Inbox <span class="badge">7</span></a></li>
          </ul>
        </li>
        <li class="dropdown alerts-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Default <span class="label label-default">Default</span></a></li>
            <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
            <li><a href="#">Success <span class="label label-success">Success</span></a></li>
            <li><a href="#">Info <span class="label label-info">Info</span></a></li>
            <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
            <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
            <li class="divider"></li>
            <li><a href="#">View All</a></li>
          </ul>
        </li>
        <li class="dropdown user-dropdown 
        <?=($this->uri->segment(2)==='web_setting')?'active':''?>
        <?=($this->uri->segment(2)==='test_1')?'active':''?>
        ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Rosadi <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>

          <li class="<?=($this->uri->segment(2)==='web_setting')?'active':''?>">
            <a href="<?php echo base_url('') ?>"><i class="fa fa-gear"></i> Settings</a></li>

            <li class="divider"></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">
    <!-- content nanti disini -->
    <?php echo $contents; ?>
    <!-- content nanti disini -->
  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

</body>
</html>