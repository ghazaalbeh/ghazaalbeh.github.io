      <?php include 'includes/db.php';?>

<!DOCTYPE html>
<html lang="en">
<?php

	$image_dir= 'img-book/';
  move_uploaded_file($_FILES['image']['tmp_name'], $image_dir. $_FILES['image']['name']);
  $image = $final_save_dir . $_FILES['image']['name'];
  
  
   $c = "SELECT COUNT(*) FROM book";
  $run_cat = mysqli_query($conn,$c);
  $row = $run_cat->fetch_array(MYSQLI_NUM);
  
  $r = $row[0]+1;
  $sql="INSERT INTO book(id,name,author,description,image) 
values($r,'$_POST[name]','$_POST[author]','$_POST[comment]','"."\\img-book\\"."/".$image."')";

$run_cat = mysqli_query($conn,$sql);
  ?>
  


      <?php include 'includes/header.php';?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>Add new book</h3>
          	<div class="row mt">
          		 <!-- FORM VALIDATION -->
          	  <div class="row mt">
                  <div class="col-lg-12">
                      
                      <div class="form-panel">
                          <div class=" form">
                              <form class="cmxform form-horizontal style-form" enctype="multipart/form-data" id="commentForm" method="post" action="#">
                                  <div class="form-group ">
                                      <label for="bname" class="control-label col-lg-2">Book name</label>
                                      <div class="col-lg-10">
                                          <input class=" form-control" id="bname" name="name" minlength="2" type="text" required />
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="bauthor" class="control-label col-lg-2">Author</label>
                                      <div class="col-lg-10">
                                          <input class="form-control " id="bauthor"  name="author" required />
                                      </div>
                                  </div>
                                 
                                  <div class="form-group ">
                                      <label for="bdescription" class="control-label col-lg-2">Description</label>
                                      <div class="col-lg-10">
                                          <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group last">
                                  <label class="control-label col-md-2">Image Upload</label>
                                  <div class="col-md-10">
                                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                              <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                          </div>
                                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                          <div>
                                              <span class="btn btn-theme02 btn-file">
	                                              <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
	                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
	                                              <input type="file" name="image" class="default" />
											  </span>
                                              <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                          </div>
                                      </div>
                                      <span class="label label-info">NOTE!</span>
                                     <span>
                                     Attached image thumbnail is
                                     supported in Latest Firefox, Chrome, Opera,
                                     Safari and Internet Explorer 10 only
                                     </span>
                                  </div>
                              </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button class="btn btn-theme" type="submit">Save</button>
                                          <button class="btn btn-theme04" type="button">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
   <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	
	
	<script src="assets/js/advanced-form-components.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  
  

  </body>


</html>
