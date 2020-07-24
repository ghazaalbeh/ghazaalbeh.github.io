<?php  include 'includes/db.php';?>
<?php

  
  $image_dir= 'images/';
  move_uploaded_file($_FILES['image']['tmp_name'], $image_dir. $_FILES['image']['name']);
  $image = $final_save_dir . $_FILES['image']['name'];
  

  
   $video_dir= 'videos/';
  move_uploaded_file($_FILES['video']['tmp_name'], $video_dir. $_FILES['video']['name']);
  
  $video = $final_save_dir . $_FILES['video']['name'];
  
  
   $audio_dir= 'audios/';
  move_uploaded_file($_FILES['audio']['tmp_name'], $audio_dir. $_FILES['audio']['name']);
  
  $audio = $final_save_dir . $_FILES['audio']['name'];
  
   $pdf_dir= 'pdfs/';
  move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf_dir. $_FILES['pdf']['name']);
  
  $pdf = $final_save_dir . $_FILES['pdf']['name'];
  
  
  $c = "SELECT COUNT(*) FROM content";
  $run_cat = mysqli_query($conn,$c);
  $row = $run_cat->fetch_array(MYSQLI_NUM);
  
  $r = $row[0]+1;
  $sql="INSERT INTO content(uid,cid,book,image,video,audio,pdf) 
values(1,$r,'$_POST[book]','"."\\images\\"."/".$image."','/"."\\videos\\"."/".$video."','/"."\\audios\\"."/".$audio."','/"."\\pdfs\\"."/".$pdf."')";

$run_cat = mysqli_query($conn,$sql);
  ?>

<!DOCTYPE html>
<html lang="en">
 <style>
 hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
   
    color:#EFF2F7;
} 
 </style> 

      <?php include 'includes/header.php';?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Add content</h3>
          	<div class="row mt">
          		 <div class="col-lg-12">
                   <div class="form-panel">

                      <form action="" method="post" enctype="multipart/form-data">
                       
                                <label for="file">Select book:</label>
                               
                              <select name="book" class="form-control">
						 		<?php $sel_sql = "SELECT * FROM book ";
									  $run_sql = mysqli_query($conn,$sel_sql);
									  while($rows = mysqli_fetch_assoc($run_sql)){
										  echo '<option value="'.$rows['name'].'">'.$rows['name'].'</option>';
										  
										  }
								
								
								 ?>
						  
						</select>
                       <hr>
	<label for="file">image:</label>
   
        <input type="file" name="image" ><br>
        <hr>
       <label for="file">video:</label>
        <input class="default" type="file" name="video" id="video"><br>
        <hr>
        <label for="file">Audio:</label>
        <input class="default" type="file" name="audio" id="audio"><br>
        <hr>
        <label for="file">pdf:</label>
        <input class="default" type="file" name="pdf" id="pdf"><br>
        <hr>
        <input  class="btn btn-theme" type="submit" name="submit" value="Submit">
</form>
					</div>
                    </div>
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
