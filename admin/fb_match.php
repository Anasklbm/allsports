
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['user'];

?>
<?php

if($usr=$_SESSION['user'])
{
    
}
 else
     {
    header("location:../ad_login.php");    
}
?>

<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    
    $mid=$_GET['mid'];
    $sel1=mysqli_query($dbcon,"select * from tor_reg where cid='$t1'");
    $r1=mysqli_fetch_row($sel1);
    
    $sel2=mysqli_query($dbcon,"select * from tor_reg where cid='$t2'");
    $r2=mysqli_fetch_row($sel2);
    
    $sel3=mysqli_query($dbcon,"select * from tor where id='$mid'");
    $r3=mysqli_fetch_row($sel3);
    
    $ins=mysqli_query($dbcon,"insert into fb_match values('','$mid','$r3[1]','$t1','$r1[4]','$r1[5]','$t2','$r2[4]','$r2[5]','$r3[4]','$t3','$t4','0')");
    if($ins>0)
    {
        
       
                header("location:fb_match.php?mid=$mid&suss=1");
            }
    }
       


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../ad_temp/../ad_temp/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../ad_temp/../ad_temp/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../ad_temp/../ad_temp/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../ad_temp/../ad_temp/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../ad_temp/../ad_temp/assets/css/style.css" rel="stylesheet">
    <link href="../ad_temp/../ad_temp/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../ad_temp/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="../ad_temp/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>FOOTBALL</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php
      
      include 'menu.php';
      
      ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Form Components</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-6">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add Match</h4>
                      <form class="form-horizontal style-form" method="post"enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select Club A</label>
                              <div class="col-sm-10">
                                  <select name="t1" class="form-control" >
                                      <option value="---Select Club---">---Select Club A---</option> 
                                     <?php
                                     $mid=$_GET['mid'];
                                        $sel_state=mysqli_query($dbcon,"select * from tor_reg where tid='$mid'");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[3] ?>"><?php echo $r_state[4] ?></option>
                                       <?php
                                        }
                                        ?>
                                  </select>
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Select Club B</label>
                              <div class="col-sm-10">
                                  <select name="t2" class="form-control" >
                                      <option value="---Select Club---">---Select Club B---</option> 
                                     <?php
                                     $mid=$_GET['mid'];
                                        $sel_state1=mysqli_query($dbcon,"select * from tor_reg where tid='$mid'");
                                        while($r_state1=mysqli_fetch_row($sel_state1))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state1[3] ?>"><?php echo $r_state1[4] ?></option>
                                       <?php
                                        }
                                        ?>
                                  </select>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date</label>
                              <div class="col-sm-10">
                                  <input name="t3" type="date" class="form-control">
                                 
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date</label>
                              <div class="col-sm-10">
                                  <input name="t4" type="time" class="form-control">
                                 
                              </div>
                          </div>
                           
                          
                          
                          
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label"></label>
                              <div class="col-lg-10">
                                  <input value="Add Data" name="sub" class="btn btn-success" type="submit">
                              </div>
                          </div>
                      </form>
                  </div>
          		</div>
                    <div class="col-lg-6">
                        <div class="form-panel">
                            <img style="width: 100%;height: 400px" src="img1/Real-Madrid-Vs-Barcelona-Wallpapers-041.jpg">
                        
                        </div>
                    </div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	<!-- INLINE FORM ELELEMNTS -->
          	
          	<!-- INPUT MESSAGES -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	<!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="../ad_temp/../ad_temp/form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../ad_temp/assets/js/jquery.js"></script>
    <script src="../ad_temp/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../ad_temp/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../ad_temp/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../ad_temp/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../ad_temp/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../ad_temp/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="../ad_temp/assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="../ad_temp/assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="../ad_temp/assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="../ad_temp/assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
