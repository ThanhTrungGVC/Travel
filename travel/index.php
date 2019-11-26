<?php
	include ("backend/database.php");
	$db = new Database();
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Title -->
	<title>Travelista</title>

	<!-- CSS  ----------------------------------------------------------------------------------------------->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">				
	<link rel="stylesheet" href="css/nice-select.css">							
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">				
	<link rel="stylesheet" href="css/main.css">
	<!-- CSS  ----------------------------------------------------------------------------------------------->

</head>

<body>	
	<!-- header -->
	<header id="header">
		<!-- liên hệ - facebook -->
		<div class="header-top">
			<div class="container">
	  			<div class="row align-items-center">
	  				<div class="col-lg-6 col-sm-6 col-6 header-top-left">
	  					<ul>
	  						<li><a href="#lienhe">Liên hệ</a></li>
	  						<li><a href="#">Đặt vé</a></li>
	  					</ul>			
	  				</div>

		  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
						<div class="header-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
		  			</div>
	  			</div>			  					
			</div>
		</div>
		
		<!-- logo - menu -->
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
		    	<div id="logo">
		        	<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
		      	</div>

		      	<nav id="nav-menu-container">
			        <ul class="nav-menu">
			        	<li><a href="index.php">Trang chủ</a></li>
			        	<li><a href="index.php#cost">Giá</a></li>
			        	<li><a href="packages.php">Gói du lịch</a></li>
			        	<li><a href="hotels.php">Khách sạn</a></li>
			        	<li><a href="insurance.php">Bảo hiểm</a></li>
			        	<li><a href="about.php">Về chúng tôi</a></li>
			        </ul>
		      	</nav><!-- #thanh menu -->					      		  
			</div>
		</div>
	</header><!-- #header -->
			
	<!-- start banner -->
	<section class="banner-area relative">
		<!-- ảnh nền -->
		<div class="overlay overlay-bg"></div>	

		<!-- nội dung -->
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<!-- Thông điệp - Phần áp đảo -->
				<div class="col-lg-6 col-md-6 banner-left">
					<h6 class="text-white">Tạm xa rời cuộc sống đơn điệu</h6>
					<h1 class="text-white">Cùng tôi <br>khám phá</h1>
					<p class="text-white">Không thể thay đổi cuộc sống của bạn, nhưng chúng tôi có thể<br> thay đổi cách nhìn cuộc sống của bạn. Nơi những dịch vụ tận tâm nhất!</p>
					<a href="#" id="starts" class="primary-btn text-uppercase">Bắt đầu nào!</a>
				</div>
				
				<!-- tìm kiếm -->
				<div class="col-lg-4 col-md-6 banner-right">
					<!-- Các mục tìm kiếm -->
					<ul class="nav nav-tabs" id="myTab" role="tablist">
				  		<li class="nav-item mgr">
				    		<a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Máy bay</a>
				  		</li>
				  		<li class="nav-item mgr">
				    		<a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Khách sạn</a>
				  		</li>
				  		<li class="nav-item">
				    		<a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Kỳ nghỉ</a>
				  		</li>
					</ul>

					<!-- nội dung tìm kiếm -->
					<div class="tab-content" id="myTabContent">
						<!-- TÌM CHUYẾN BAY -->
				  		<div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
				  			<!-- form tìm máy bay -->
							<form class="form-wrap">
								<input type="text" class="form-control" name="name" placeholder="Xuất phát " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Xuất phát '">									
								<input type="text" class="form-control" name="to" placeholder="Đích đến" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Đích đến '">

								<input type="text" class="form-control date-picker" name="start" placeholder="Thời gian bắt đầu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Thời gian bắt đầu '">

								<input type="text" class="form-control date-picker" name="return" placeholder="Thời gian kết thúc " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Thời gian kết thúc '">

								<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Số lượng người lớn " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng người lớn '">

								<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Số lượng trẻ nhỏ " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng trẻ nhỏ '">

								<a href="#" class="primary-btn text-uppercase">Tìm kiếm chuyến bay</a>
							</form>
				  		</div>

						<!-- TÌM KHÁCH SẠN -->
				  		<div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
				  			<!-- form tìm khách sạn -->
							<form class="form-wrap">
								<input type="text" class="form-control" name="name" placeholder="Đến từ " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Đến từ '">									
								<input type="text" class="form-control" name="to" placeholder="Nơi đến " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nơi đến '">

								<input type="text" class="form-control date-picker" name="start" placeholder="Lịch xuất phát " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lịch xuất phát '">

								<input type="text" class="form-control date-picker" name="return" placeholder="Lịch kết thúc " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lịch kết thúc '">

								<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Số lượng người lớn " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng người lớn '">

								<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Số lượng trẻ nhỏ " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng trẻ nhỏ '">

								<a href="#" class="primary-btn text-uppercase">Tìm kiếm khách sạn</a>
							</form>							  	
				  		</div>

				  		<!-- TÌM LỄ HỘI -->
				  		<div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
				  			<!-- form tìm kiếm lễ hội -->
							<form class="form-wrap">
								<input type="text" class="form-control" name="name" placeholder="Đến từ " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Đến từ '">									
								<input type="text" class="form-control" name="to" placeholder="Nơi đến " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nơi đến '">

								<input type="text" class="form-control date-picker" name="start" placeholder="Thời gian bắt đầu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Thời gian bắt đầu'">

								<input type="text" class="form-control date-picker" name="return" placeholder="Thời gian kết thúc " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Thời gian kết thúc '">

								<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Số lượng người lớn " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng người lớn '">

								<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Số lượng trẻ nhỏ " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng trẻ nhỏ '">

								<a href="#" class="primary-btn text-uppercase">Tìm  kiếm  kỳ  nghỉ</a>
							</form>							  	
				  		</div>
					</div>
				</div>
			</div>
		</div>					
	</section><!-- End banner -->

	<!-- Start Điểm đến nổi tiếng -->
	<section class="popular-destination-area section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Điểm đến nổi tiếng</h1>
                        <p>Chúng ta đang sống trong một thế giới năng động. Cuộc sống đang thay đổi từng ngày!</p>
                    </div>
                </div>
            </div>

			<!-- chi tiết -->
			<div class="row">
			<?php
				$result = $db->get_info_hot_place();
				while ($row = $result->fetch_assoc()) {
					?>
					<div class="col-lg-4">
						<div class="single-destination relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="img/<?php echo $row['img']; ?>" alt="">
							</div>
							<div class="desc">	
								<a href="#" class="price-btn"><?php echo $row['cost']; ?>đ</a>			
								<h4><?php echo $row['title']; ?></h4>
								<p><?php echo $row['place']; ?></p>			
							</div>
						</div>
					</div>
					<?php
				}
			?>
			</div> 
		</div>
	</section> <!-- End Điểm đến nổi tiếng -->
			

	<!-- Start giá-->
	<section class="price-area section-gap">
		<div id="cost" class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Chúng tôi luôn cung cấp<br> giá cả hợp lý nhất</h1>
                        <p>Thật tuyệt vời khi bạn có nhiều lựa chọn cho chuyến du lịch của mình.</p>
                    </div>
                </div>
            </div>	

            <!-- chi tiết -->					
			<div class="row">
			<?php
				$result_pk = $db->get_info_package_cost();
				while ($row_pk = $result_pk->fetch_assoc()){
				?>
					<div class="col-lg-4">
						<div class="single-price">
							<h4><?php echo $row_pk['title']; ?></h4>
							<ul class="price-list">
							<?php
								$result_cd = $db->get_info_cost($row_pk['package_cost_id']);
								while ($row_cd = $result_cd->fetch_assoc()) {
								?>
									<li class="d-flex justify-content-between align-items-center">
										<h6><?php echo $row_cd['name']; ?></h6>
										<a href="#" class="price-btn"><?php echo $row_cd['cost']; ?>đ</a>
									</li>
								<?php
								}
							?>													
							</ul>
						</div>
					</div>
				<?php
				}
			?>											
			</div>
		</div>	
	</section>
	<!-- End giá -->
			

	<!-- Start dịch vụ -->
	<section class="other-issue-area section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10">Các dịch vụ khác</h1>
                        <p>Chúng ta luôn gặp những vấn đề. Cuộc sống vốn là thế!</p>
                    </div>
                </div>
            </div>	

            <!-- chi tiết -->				
			<div class="row">
				<!-- dv1 -->
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o1.jpg" alt="">					
						</div>
						<a href="#"><h4>Thuê xe</h4></a>
						<p>Tự do đi lại trên những cung đường mới cùng người thân luôn là trải nghiệm tuyệt vời nhất.</p>
					</div>
				</div>

				<!-- dv2 -->
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o2.jpg" alt="">					
						</div>
						<a href="#"><h4>Đặt lịch Tàu biển</h4></a>
						<p>Tôi chắc là bạn sẽ muốn có những trải nghiệm mới trên biển.</p>
					</div>
				</div>

				<!-- dv3 -->
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o3.jpg" alt="">					
						</div>
						<a href="#"><h4>Mẹo khi đi du lịch</h4></a>
						<p>Theo dõi văn hóa, thời tiết địa phương bạn đến là một trong những điều quan trọng nhất cho một chuyến đi thú vị.</p>
					</div>
				</div>

				<!-- dv4 -->
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o4.jpg" alt="">					
						</div>
						<a href="#"><h4>Thực phẩm</h4></a>
						<p>Không thể không nhắc đến những món ăn đặc sản khi đến một vùng đất mới. Nó sẽ cho bạn những cảm xúc thăng hoa.</p>
					</div>
				</div>																		
			</div>
		</div>	
	</section>
	<!-- End dịch vụ -->
			

	<!-- Start đánh giá -->
    <section class="testimonial-area section-gap">
        <div class="container">
        	<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Người dùng nói gì về chúng tôi</h1>
                        <p>Những chia sẻ từ người sử dụng dịch vụ của chúng tôi sẽ là một thông tin khá cần thiết đối với bạn! </p>
                    </div>
                </div>
            </div>

            <!-- chi tiết -->
            <div class="row">
                <div class="active-testimonial">	
					<?php
						$result_cmt = $db->get_info_comment();
						while ($row_cmt = $result_cmt->fetch_assoc()){
						?>
							<div class="single-testimonial item d-flex flex-row">
								<div class="thumb">
									<img class="img-fluid" src="img/user1.png" alt="">
								</div>
								<div class="desc">
									<h4><?php echo $row_cmt['username']; ?></h4>
									<p><?php echo $row_cmt['content']; ?></p>
									
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>				
									</div>	
								</div>
							</div>
						<?php
						}
					?>
		                    		                    
                </div>
            </div>
        </div>
    </section>
    <!-- end nhận xét -->	


	<!-- start footer -->		
	<footer class="footer-area section-gap">
		<div class="container">

			<!-- Thông tin -->
			<div class="row">
				<!-- bản quyền -->
				<div id="lienhe" class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Travelista</h6>
						<p>
							Địa chỉ: Cầu Giấy - Hà Nội <br>
							SĐT: 01234566 <br>
							Email: suport_travelista@gmail.com 
						</p>
					</div>
				</div>

				<!-- điều hướng -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Điều hướng</h6>
						<div class="row">
							<div class="col">
								<ul>
									<li><a href="index.html">Trang chủ</a></li>
									<li><a href="#">Dịch vụ</a></li>
									<li><a href="insurance.html">Bảo hiểm</a></li>
									<li><a href="hotels.html">Khách sạn</a></li>
								</ul>
							</div>

							<div class="col">
								<ul>
									<li><a href="#">Tư vấn</a></li>
									<li><a href="index.html#cost">Giá</a></li>
									<li><a href="#">Đặt lịch</a></li>
									<li><a href="https://uet.vnu.edu.vn/">Liên hệ</a></li>
								</ul>
							</div>										
						</div>							
					</div>
				</div>

				<!-- đăng ký email -->
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Thông tin</h6>
						<p>
							Đăng ký thư điện tử để nhận thông tin mới nhất từ chúng tôi.									
						</p>								
						<div id="mc_embed_signup">
							<form target="_blank" action="" method="get" class="subscription relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" required="" type="email">
									<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
								</div>									
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>

				<!-- khám phá -->
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Khám phá</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>						
			</div>

			<!-- liên kết -->
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0">Copyright &copy; <script>document.write(new Date().getFullYear());</script> | Design by <a href="#" target="_blank">UETer Team</a></p>

				<!-- facebook - twitter -->
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->	


	<!-- JavaScript ------------------------------------------------------------------------------------------->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>				
	<script src="js/jquery-ui.js"></script>					
	<script src="js/easing.min.js"></script>			
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>	
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>						
	<script src="js/jquery.nice-select.min.js"></script>					
	<script src="js/owl.carousel.min.js"></script>							
	<script src="js/mail-script.js"></script>	
	<script src="js/main.js"></script>
	<!-- JavaScript ------------------------------------------------------------------------------------------->

</body>
</html>