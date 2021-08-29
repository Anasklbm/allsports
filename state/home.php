<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Soccer HTML5 Template</title>
<!-- StyleSheets -->
<link rel="stylesheet" href="../temp/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../temp/css/main.css">	
<link rel="stylesheet" href="../temp/css/icomoon.css">
<link rel="stylesheet" href="../temp/css/animate.css">
<link rel="stylesheet" href="../temp/css/transition.css">
<link rel="stylesheet" href="../temp/css/font-awesome.min.css">
<link rel="stylesheet" href="../temp/style.css">
<link rel="stylesheet" href="../temp/css/color.css">
<link rel="stylesheet" href="../temp/css/responsive.css">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- JavaScripts -->
<script src="../temp/js/vendor/modernizr.js"></script>
</head>
<body>

<!-- Wrapper -->
<div class="wrap push">

	<!-- Header -->
	<?php
        include 'menu.php';
        
        ?>
	<!-- Header -->

	<!-- Slider Holder -->
	
	<!-- Slider Holder -->

	<!-- Main Content -->
	<main class="main-content">
		
		<!-- Match Detail -->
		<section class="theme-padding-bottom bg-fixed">
			<div class="container">

				<!-- Add Banners -->
				
				<!-- Add Banners -->

				<!-- Match Detail Content -->
				<div class="match-detail-content">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="row">

								<!-- Next Matches -->
								<div class="col-sm-4 col-xs-5 r-full-width">
									<div class="next-matches">
										<h4>Next Match</h4> 
										<div id="matches-detail-slider" class="matches-detail-slider">
											<?php
                                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_match  order by date limit 2");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
											<!-- Item -->
											<div class="item matches-detail" style="background: url(../temp/images/inner-banner/img-04.jpg);">
												<div class="time-left">
													<ul id="countdown-1" class="countdown">
													  <?php echo $r_gal[2] ?>	
													</ul>
												</div>
												<span class="left-date"><?php echo $r_gal[10] ?></span>
												<div class="team-btw-match">
													<ul>
														<li>
                                                                                                                    <img style="width:  70px;height: 70px" src="../state/img1/<?php echo $r_gal[5] ?>" alt="">
															<span>Footbal<span>Team</span></span>
														</li>
														<li>
															<img style="width:  70px;height: 70px"  src="../state/img1/<?php echo $r_gal[8] ?>" alt="">
															<span>Super Team<span>Club</span></span>
														</li>
													</ul>
												</div>
											</div>
											<!-- Item -->

											<!-- Item -->
											<?php
                                                            }
                                                        }
                                                        ?>
											<!-- Item -->

										</div>
									</div>
								</div>
								<!-- Next Matches -->

								<!-- Upcoming Fixture -->
								<div class="col-sm-8 col-xs-7 r-full-width">
									<h3><span><i class="red-color">UPCOMING </i>FIXTURE</span><a class="view-all pull-right" href="#">view all<i class="fa fa-angle-double-right"></i></a></h3>
									<div class="upcoming-fixture">
										<div class="table-responsive">
											<table class="table table-bordered">
											    <tbody>
                                                                                                <?php
                                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_match  order by date limit 4");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
												    <tr>
												        <td>
                                                                                                            <div class="logo-width-name"><img style="width: 35px;height: 35px" src="../state/img1/<?php echo $r_gal[5] ?>" alt=""><?php echo $r_gal[4] ?></div>
												        </td>
												        <td class="upcoming-fixture-date"><span><?php echo $r_gal[10] ?></span></td>
												        <td>
												        	<div class="logo-width-name w-icon"><img style="width: 35px;height: 35px"  src="../state/img1/<?php echo $r_gal[8] ?>" alt=""><?php echo $r_gal[7] ?></div>
												        </td>
												    </tr>
												    <?php
                                                            }
                                                        }
                                                        ?>
											    </tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Upcoming Fixture -->

								<!-- Latest News -->
								<div class="col-xs-12">
									<div class="latest-news-holder">
										<h3><span>Latest News</span></h3>

										<!-- latest-news Slider -->
										<div class="row no-gutters white-bg">

											<!-- Slider -->
											<div class="col-sm-9">
												<ul id="latest-news-slider" class="latest-news-slider">
                                                                                                    <?php
                                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_final order by date limit 5");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
													<li>
                                                                                                            <img style="width: 650px;height: 357px" src="../admin/img3/<?php echo $r_gal[14] ?>" alt="">
                                                                                                            <p><?php echo substr($r_gal['13'],0,100)?>.....<a href="match-detail.php?mid=<?php echo $r_gal[0] ?>">Read more</a></p>
												    </li>
												    <?php
                                                            }
                                                        }
                                                        ?>
												</ul>
											</div>
											<!-- Slider -->

											<!-- Thumnail -->
											<div class="col-sm-3">
												<ul id="latest-news-thumb" class="latest-news-thumb">
                                                                                                    <?php
                                                                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from fb_final order by date limit 5");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                            
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
													<li>
														<p><?php echo $r_gal[12] ?></p>
                                                                                                                
														<span><?php echo $r_gal[10] ?></span>
													</li>
													
													<?php
                                                            }
                                                        }
                                                        ?>
												</ul>
												<ul class="news-thumb-arrows">
													<li class="prev"><span class="fa fa-angle-up"></span></li>
													<li class="next"><span class="fa fa-angle-down"></span></li>
												</ul>
											</div>
											<!-- Thumnail -->

										</div>
										<!-- latest-news Slider -->

									</div>
								</div>
								<!-- Latest News -->

							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="row">

								<!-- Last Match -->
								<div class="col-lg-12 col-md-12 col-sm-5 col-xs-6 r-full-width">
									<div class="last-matches theme-margin-bottom win-tag">
										<h4>Last Match</h4>
                                                                                <?php
                                                        $sel_gal1=mysqli_query($dbcon,"select * from fb_final order by date limit 1");
                                                        if(mysqli_num_rows($sel_gal1)>0)
                                                        {$i=0;
                                                            while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                                $i++;
                                                                ?>
										<div class="matches-detail style-2" style="background: url(../temp/images/adds-02.jpg);">
											<p><?php echo $r_gal1[12] ?></p>
                                                                                        <br/>
											<div class="team-btw-match">
												<ul>
													<li>
														<img style="width:  70px;height: 70px" src="../state/img1/<?php echo $r_gal1[5] ?>" alt="">
														<span><?php echo $r_gal1[4] ?><span></span></span>
													</li>
													<li>
														<img style="width:  70px;height: 70px" src="../state/img1/<?php echo $r_gal1[8] ?>" alt="">
														<span><?php echo $r_gal1[7] ?><span></span></span>
													</li>
												</ul>
											</div>
											
										</div>
                                                                                <?php
                                                            }
                                                        }
                                                        ?>
									</div>
								</div>
								<!-- Last Match -->

								<!-- Last Match -->
								<div class="col-lg-12 col-md-12 col-sm-7 col-xs-6 r-full-width">
									<div class="last-matches styel-1">
										<h3><span>POINTS TABLE</span></h3>
										<table class="table table-bordered table-hover">
										    <thead>
										    	<tr>
											        <th>#</th>
											        <th>Team</th>
											        <th>W</th>
											        <th>L</th>
											        <th>D</th>
										      	</tr>
										    </thead>
										    <tbody>
                                                                                        <?php
                                                        $sel_gal=mysqli_query($dbcon,"select * from add_club order by fb_won desc limit 10");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
										    	<tr>
											        <td><?php echo $i ?></td>
											        <td><?php echo $r_gal[1] ?></td>
											        <td><?php echo $r_gal[11] ?></td>
											        <td><?php echo $r_gal[12] ?></td>
											        <td><?php echo $r_gal[13] ?></td>
										      	</tr>
										      	<?php
                                                            }
                                                        }
                                                        ?>
										    </tbody>
									  	</table>
									</div>
								</div>
								<!-- Last Match -->

							</div> 
						</div>
					</div>
				</div>
				<!-- Match Detail Content -->

			</div>
		</section>
		<!-- Match Detail -->

		<!-- Player Features And History -->
		<section class="red-section" style=" background: url(images/red-bg.jpg) no-repeat;">

			<!-- Red Section Heading -->
			<div class="red-sec-heading">
				<div class="container">
					<h5>Player Features</h5>
				</div>
			</div>
			<!-- Red Section Heading -->

			<!-- Red saection Content -->
			<div class="container">
				<div class="row">
					
					<!-- Player Featuer -->
					<div class="col-sm-6">
						<div class="theme-padding top-profiler">
							<img class="player-img animate fadeInLeft" data-wow-delay="0.2s" src="../temp/images/player-img.jpg" alt="">
							<strong class="number-batch style-1">13</strong>
							<strong class="number-batch style-2">06</strong>
						</div>
					</div>
					<!-- Player Featuer -->

					<!-- Player History -->
					<div class="col-sm-6">
						<ul id="video-slider" class="video-slider">
							<li class="red-sec-widget player-history h-white p-white">
								<h3>Related Match</h3>
								<p>The wait for a major title is weighing heavily on Argentina, and it showed as they lost again to Chile, Tim Vickery writes</p>
								<div class="player-video-sec">
									<div class="video video-post">
                                                                            <video  width="100%" controls onclick="load_vdo('1.com_636611166535094_HD.mp4')" ><source src="../admin/video/1.com_636611166535094_HD.mp4" type="video/mp4">
                                                                                    <source src="../admin/video/1.com_636611166535094_HD.mp4" type="video/ogg"></video>
										</div>
								</div>
							</li>
							<li class="red-sec-widget player-history h-white p-white">
								<h3>Related Match</h3>
								<p>The wait for a major title is weighing heavily on Argentina, and it showed as they lost again to Chile, Tim Vickery writes</p>
								<div class="player-video-sec">
									<div class="video video-post">
										<img src="../temp/images/video-bg-2.jpg" alt="">
										<span class="play-lable fa fa-video-camera"></span>
										<a class="position-center-center play-icon" href="../temp/http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
									</div>
								</div>
							</li>
							<li class="red-sec-widget player-history h-white p-white">
								<h3>Related Match</h3>
								<p>The wait for a major title is weighing heavily on Argentina, and it showed as they lost again to Chile, Tim Vickery writes</p>
								<div class="player-video-sec">
									<div class="video video-post">
										<img src="../temp/images/video-bg-3.jpg" alt="">
										<span class="play-lable fa fa-video-camera"></span>
										<a class="position-center-center play-icon" href="../temp/http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- Player History -->

				</div>
			</div>
			<!-- Red saection Content -->
 
		</section>
		<!-- Player Features And History -->

		<!-- Facts Accounter -->
		<div class="facts-acounter">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 pull-right">
						<ul class="facts-list-acounter" id="tc-counters">
                                                    <?php
                            
                            
                            $f=mysqli_query($dbcon,"select * from add_club");
                            $f1= mysqli_num_rows($f);
                            
                            $g=mysqli_query($dbcon,"select * from fb_squad");
                            $g1= mysqli_num_rows($g);
                            
                            $h=mysqli_query($dbcon,"select * from tor");
                            $h1= mysqli_num_rows($h);
                            
                            $j=mysqli_query($dbcon,"select * from fb_match");
                            $j1= mysqli_num_rows($j);
                            
                            $k=mysqli_query($dbcon,"select * from fb_final");
                            $k1= mysqli_num_rows($k);
                            
                            $m=mysqli_query($dbcon,"select * from ad_st");
                            $m1= mysqli_num_rows($m);
                            ?>
                                                    <li>
								<strong class="facts-number" data-from="0" data-to="<?php echo $m1 ?>" data-speed="1000"></strong>
								<span>Leagues</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="<?php echo $f1 ?>" data-speed="1000"></strong>
								<span>Club</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="<?php echo $g1 ?>" data-speed="2000"></strong>
								<span>Team Members</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="<?php echo $h1 ?>" data-speed="3000"></strong>
								<span>Leagues</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="<?php echo $j1 ?>" data-speed="4000"></strong>
								<span>Total Matches</span>
							</li>
							<li>
								<strong class="facts-number" data-from="0" data-to="<?php echo $k1 ?>" data-speed="5000"></strong>
								<span>Finished Matches</span>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Facts Accounter -->

		<!-- Gallery And Team -->
		
		<!-- Gallery And Team -->

		<!-- Products -->
		
		<!-- Products -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<footer class="main-footer style-2" style="display: none">

		<!-- Footer Columns -->
		<div class="container">

			<!-- Footer columns -->
			<div class="footer-column border-0">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<div class="logo-column p-white">
								<img class="footer-logo" src="../temp/images/footer-logo.png" alt="">
								<ul class="address-list style-2">
									<li><span>Address:</span>1782 Harrison Street  Sun Prairie</li>
									<li><span>Phone Number:</span>49 30 47373795</li>
									<li><span>Email Address:</span>moin@blindtextgenerator.de</li>
								</ul>
								<span class="follow-us">follow us </span>
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Advertisment</h5>
							<a href="#"><img src="../temp/images/footer-add.jpg" alt=""></a>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-sm-4 col-xs-6 r-full-width-2 r-full-width">
						<div class="column-widget h-white">
							<h5>Sponcer</h5>
							<ul id="brand-icons-slider-2" class="brand-icons-slider-2">
								<li>
									<a href="#"><img src="../temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="../temp/images/brand-icons/img-1-1.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-2.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-3.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-4.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-5.png" alt=""></a>
									<a href="#"><img src="../temp/images/brand-icons/img-1-6.png" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Footer Column -->

				</div>
			</div>
			<!-- Footer columns -->

		</div>
		<!-- Footer Columns -->

		<!-- Copy Rights -->
		<div class="copy-rights">
			<div class="container">
				<p>© Copyright by <i class="red-color">FineLayers</i> All rights reserved.</p>
				<a class="back-to-top scrollup" href="#"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		<!-- Copy Rights -->

	</footer> 
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<?php
                            include 'menu1.php';
?>
<!-- Slide Menu -->

<!-- Java Script -->
<script src="../temp/js/vendor/jquery.js"></script>        
<script src="../temp/js/vendor/bootstrap.min.js"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="../temp/js/gmap3.min.js"></script>				
<script src="../temp/js/bigslide.js"></script>		
<script src="../temp/js/slick.js"></script>	
<script src="../temp/js/waterwheelCarousel.js"></script>
<script src="../temp/js/contact-form.js"></script>	
<script src="../temp/js/countTo.js"></script>		
<script src="../temp/js/datepicker.js"></script>		
<script src="../temp/js/rating-star.js"></script>							
<script src="../temp/js/range-slider.js"></script>				
<script src="../temp/js/spinner.js"></script>			
<script src="../temp/js/parallax.js"></script>			   	 
<script src="../temp/js/countdown.js"></script>	
<script src="../temp/js/appear.js"></script>		 		
<script src="../temp/js/prettyPhoto.js"></script>			
<script src="../temp/js/wow-min.js"></script>						
<script src="../temp/js/main.js"></script>	
</body>
</html>