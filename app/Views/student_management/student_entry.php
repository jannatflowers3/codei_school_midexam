
<?php  include('includes/header.php');?>
<?php // include('includes/table_header.php');?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
   
  </ul>
</nav>
<!-- /.navbar -->

<?php  include('includes/leftsidebar.php');?>



    <!-- Sidebar Menu -->

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1 class="m-0">Student List</h1> -->
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Admin</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row justify-content-center">
        
        <div class="col-lg-6 col-6">
<h1> Student Add</h1>
<form method="post" action="<?= base_url("studentmanagement/create/")?>"
enctype="multipart/form-data">
                <div class="card-body">
               <?php  $errors = [];
                if(session()->has('errors')){
                    $errors = session('errors');
                }
               ?>
             <!-- student img -->
                 <div class="form-group">
                    <label for="pdetails">Student Image</label>
                    <input type="file" class="form-control" id="st_img" 
                    value="<?php echo set_value('st_img');?>" 
                      name="st_img">    
                 </div>
                
              <!-- end student img -->
         <div class="form-group">
                    <label for="st_name">Student Name</label>
                    <input type="text" class="form-control" id="st_name" 
                     name ="st_name" placeholder="Enter Student Name"
                      value="<?php echo set_value('st_name');?>">
                    
                </div>
            <!-- end stdent name -->
            <div class="form-group">
                    <label for="st_email">Student Email</label>
                    <input type="email" class="form-control" value="<?php echo set_value('st_email') ?>" id="st_email" 
                     name ="st_email" placeholder="Enter Student Email">
                  </div>
            <!-- end stdent st_email -->
            <div class="form-group">
                    <label for="st_phone">Student Phone</label>
                    <input type="number" class="form-control"  value="<?php echo set_value('st_phone') ?>"id="st_phone" 
                     name ="st_phone" placeholder=" Student Phone Number">
                  </div>
            <!-- end stdent address -->
                  <div class="form-group">
                    <label for="st_address">Student Address</label>
                      <textarea id="summernote" class="form-control" 
                      name ="st_address" placeholder="Student Addresh">
                     <?php echo set_value('st_phone') ?>
                        </textarea>   
                  </div>
           <!-- end stdent address -->
          <div class="form-check">
                <input class="form-check-input" type="radio" value="male"
                name="st_gender" id="st_gender">
                <label class="form-check-label" for="st_gender">
                  Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="st_gender" value="female" id="st_gender" checked>
                <label class="form-check-label" for="st_gender">
                  Female
                </label>
                </div>
                <!-- gender end -->
              <!-- <div class="form-group">
                    <label for="st_class">Student Class</label>
                     <input type="text" class="form-control" value="<?php echo set_value('st_class') ?>" id="st_class" 
                     name="st_class"/> 
                  </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
              



     </div><!-- /.container-fluid -->
   </section>

 </div>  
      </div>
      <!-- row end -->
    </div><!-- /end container-fluid -->
  </section>
  <!-- /.content -->
</div>


<?php  include("includes/footer.php")?>