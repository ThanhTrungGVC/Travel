<?php
	include ("backend/database.php");
	$db = new Database();
?>

<!DOCTYPE html>
<html lang="vi" class="no-js">
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
	<?php include("public/header.php"); ?>
	<!-- #header -->
			  
	<!-- start banner -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Gói Du Lịch				
					</h1>	
					<p class="text-white link-nav"><a href="index.php">Trang Chủ </a>  <span class="lnr lnr-arrow-right"></span>  <a href="packages.php"> Gói Du Lịch</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner -->	

	<!-- Start giảm giá -->
	<section class="hot-deal-area section-gap">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Ưu đãi lớn ngày hôm nay</h1>
                        <p>Tất cả chúng ta đều sống trong một thời đại thuộc về giới trẻ. Cuộc sống đang trở nên nhanh hơn.</p>
                    </div>
                </div>
            </div>						
			<div class="row justify-content-center">
				<div class="col-lg-10 active-hot-deal-carusel">
					<div class="single-carusel">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="img/packages/hot-deal.jpg" alt="">
						</div>
						<div class="price-detials">
							<a href="#" class="price-btn">Giá Chỉ Từ <span>15.000.000đ</span></a>
						</div>
						<div class="details">
							<h4 class="text-white">Kiến Trúc Cổ</h4>
							<p class="text-white">
								Cairo, Ai Cập
							</p>
						</div>								
					</div>
					<div class="single-carusel">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="img/packages/hot-deal.jpg" alt="">
						</div>
						<div class="price-detials">
							<a href="#" class="price-btn">Giá Chỉ Từ <span>2.000.000đ</span></a>
						</div>
						<div class="details">
							<h4 class="text-white">Kiến Trúc Cổ</h4>
							<p class="text-white">
								Cairo, Ai Cập
							</p>
						</div>								
					</div>
					<div class="single-carusel">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="img/packages/hot-deal.jpg" alt="">
						</div>
						<div class="price-detials">
							<a href="#" class="price-btn">Giá Chỉ Từ <span>5.000.000đ</span></a>
						</div>
						<div class="details">
							<h4 class="text-white">Kiến Trúc Cổ</h4>
							<p class="text-white">
								Cairo, Ai Cập
							</p>
						</div>								
					</div>														
				</div>
			</div>
		</div>	
	</section>
	<!-- End giảm giá -->
			

	<!-- Start khách sạn nổi tiếng -->
	<section class="destinations-area section-gap">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Điểm đến ấn tượng</h1>
                        <p>Tất cả chúng ta đều sống trong một thời đại thuộc về giới trẻ. Cuộc sống đang trở nên nhanh hơn.</p>
                    </div>
                </div>
            </div>						
			<div class="row">
			<?php
				$result_tour = $db->get_info_tour();
				while( $row_tour = $result_tour->fetch_assoc())
				{
				?>
					<div class="col-lg-4">
						<div class="single-destinations">
							<div class="thumb">
								<img src="img/packages/<?php echo $row_tour['img']; ?>" alt="">
							</div>
							<div class="details">
								<h4><?php echo $row_tour['title']; ?></h4>
								<p>
								<?php echo $row_tour['place']; ?>
								</p>
								<ul class="package-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Thời hạn</span>
										<span><?php echo $row_tour['limits']; ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Ngày</span>
										<span><?php echo $row_tour['times']; ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Sân bay</span>
										<span><?php echo $row_tour['airport']; ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Ngoài ra</span>
										<span><?php echo $row_tour['outher']; ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Giá mỗi người</span>
										<a href="place_detail.php?tour_id=<?php echo $row_tour['tour_id']; ?>" class="price-btn"><?php echo $row_tour['cost']; ?>đ</a>
									</li>													
								</ul>
							</div>
						</div>
					</div>
				<?php
				}
			?>																													
			</div>
		</div>	
	</section>
	<!-- End destinations Area -->
			

	<!-- Start home-about Area -->
	<section class="home-about-area">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-6 col-md-12 home-about-left">
					<h1>
						Không tìm thấy gói của bạn?<br>
						Hãy hỏi chúng tôi.
					</h1>
					<p>
						Chúng tôi sẽ gợi ý giúp bạn những lựa chọn phù hợp nhất với những yêu cầu mà bạn đặt ra. Đừng ngại ngần cho chúng tôi biết yêu cầu của bạn.<br> Bắt đầu ngay thôi nào!
					</p>
					<a href="#" class="primary-btn text-uppercase">Yêu Cầu Giá Tùy Chỉnh</a>
				</div>
				<div class="col-lg-6 col-md-12 home-about-right no-padding">
					<img class="img-fluid" src="img/packages/about-img.jpg" alt="">
				</div>
			</div>
		</div>	
	</section>
	<!-- End khách sạn nổi tiếng -->

	<!-- start footer -->		
	<?php include("public/footer.php"); ?>
	<!-- End footer -->	
</body>
</html>

