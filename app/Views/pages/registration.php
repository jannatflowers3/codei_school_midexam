<?= include("header.php") ?>
</head>
  <body> 
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <?= include("navbar.php") ?>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Contact</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Contact</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>STUDENT REGISTRATION</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row justify-content-center  text-center">
              <div class="col-md-6">
                <div class="mu-contact-left">
                <form method="post" action="<?= base_url("studentmanagement/create")?>"
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
                     name="st_img">    
                 </div>
                
              <!-- end student img -->
         <div class="form-group">
                    <label for="st_name">Student Name</label>
                    <input type="text" class="form-control" id="st_name" 
                    value="<?=old("st_name")?old("st_name"):$studentedit['st_name']?>" name ="st_name" placeholder="Enter Student Name">
                    <span> <?php if(isset($errors['st_name'])){
                    echo $errors['st_name'];}?> </span>
                </div>
            <!-- end stdent name -->
            <div class="form-group">
                    <label for="st_email">Student Email</label>
                    <input type="text" class="form-control" id="st_email" 
                    value="<?=old("st_email")?old("st_email"):$studentedit['st_email'] ?>" name ="st_email" placeholder="Enter Student Email">
                  </div>
            <!-- end stdent st_email -->
            <div class="form-group">
                    <label for="st_phone">Student Phone</label>
                    <input type="number" class="form-control" id="st_phone" 
                    value="<?=old("st_phone")?old("st_phone"):$studentedit['st_phone']  ?>" name ="st_phone" placeholder=" Student Phone Number">
                  </div>
            <!-- end stdent address -->
                  <div class="form-group">
                    <label for="st_address">Student Address</label>
                      <textarea id="summernote" class="form-control" 
                      name ="st_address" placeholder="Student Addresh">
                      <?=old("st_address")?old("st_address"):$studentedit['st_address']; ?>
                        </textarea>   
                  </div>
           <!-- end stdent address -->
          <div class="form-check">
                <input class="form-check-input" type="radio" <?=old("st_gender")?old("st_gender"):$studentedit['st_gender']; ?>
                name="st_gender" id="st_gender">
                <label class="form-check-label" for="st_gender">
                  Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio"<?=old("st_gender")?old("st_gender"):$studentedit['st_gender']; ?>
                 name="st_gender" id="st_gender" checked>
                <label class="form-check-label" for="st_gender">
                  Female
                </label>
                </div>
                <!-- gender end -->
              <div class="form-group">
                    <label for="st_class">Student Class</label>
                     <input type="text" class="form-control" id="st_class" 
                     value=" <?=old("st_class")?old("st_class"):$studentedit['st_class']; ?>" name="st_class"/> 
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="mu-contact-right">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div> -->
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Registration Form</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <?= include("footer.php") ?>