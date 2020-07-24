<?php  include 'includes/db.php';?>
<!DOCTYPE html>
<html lang="en">
  

      <?php include 'includes/header.php';?>
      <?php 
	if(isset($_GET['del_id'])){
		$del_id = $_GET['del_id'];
		$sql ="DELETE FROM content WHERE cid ='$del_id'";
		if($run = mysqli_query($conn,$sql)){
			$result = 'You Delete A Row From Database';
			
			}
		
		}

?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>Edit content</h3>
          	 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4>content list</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-book"></i> Book name</th>
                                  <th class="hidden-phone"><i class="fa fa-picture-o"></i> Image</th>
                                  <th><i class="fa fa-paragraph"></i> video</th>
                                  <th><i class=" fa fa-edit"></i> Audio</th>
                                  <th><i class=" fa fa-edit"></i> Pdf</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php
							  
							  	$sql = "SELECT * FROM content";
								$run = mysqli_query($conn,$sql);
								while($rows = mysqli_fetch_assoc($run)){
									 echo '
									        <tr>
                                  <td>'.$rows['book'].'</td>
                                  <td class="hidden-phone"><img height="100" width="100" class="img-responsive" src="'.$rows['image'].'" alt="" /></td>
                                  <td><span class="label label-success label-mini">'.$rows['video'].'</span></td>
                                  <td><span class="label label-danger label-mini">'.$rows['audio'].'</span></td>
                                  <td><span class="label label-success label-mini">'.$rows['pdf'].'</span></td>
                                  <td>
                                     
                                     
                                      <a href="edit-content.php?del_id='.$rows['cid'].'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                                                           
                              </thead>
									 
									 ';}?>
                                     
                       
                             
                             
                                                          
                            
                             
                             
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
			
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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>


</html>
