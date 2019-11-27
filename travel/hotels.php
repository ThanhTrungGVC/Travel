<?php
	include ("backend/database.php");
	$db = new Database();
?>

<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
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
						Khách Sạn				
					</h1>	
					<p class="text-white link-nav"><a href="index.php">Trang Chủ </a>  <span class="lnr lnr-arrow-right"></span>  <a href="hotels.php"> Khách Sạn</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner -->	

	<!-- Start khách sạn nổi tiếng -->
	<section class="destinations-area section-gap">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Một số khách sạn nổi tiếng</h1>
                        <p>Những nơi nghỉ dưỡng chất lượng luôn mang đến những trải nghiệm tuyệt vời cho bạn.</p>
                    </div>
                </div>
            </div>

			<div class="row">
			<?php
				$result_ht = $db->get_info_hotel();
				while ($row_ht = $result_ht->fetch_assoc()) {
				?>
					<div class="col-lg-4">
						<div class="single-destinations">
							<div class="thumb">
								<img src="img/hotels/<?php echo $row_ht['img']; ?>" alt="">
							</div>
							<div class="details">
								<h4 class="d-flex justify-content-between">
									<span><?php echo $row_ht['title']; ?></span>                              	
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>				
									</div>	
								</h4>

								<p>
									<a href="">Xem trên bản đồ</a> | <?php echo $row_ht['assess']; ?> Đánh giá
								</p>
								<ul class="package-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Trụ sở</span>
										<span><?php echo $row_ht['place']; ?></span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Phòng tập thể dục</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Wifi</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Bể bơi</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Điều hòa không khí</span>
										<span>Có</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Nhà hàng</span>
										<span>Có</span>
									</li>												
									<li class="d-flex justify-content-between align-items-center">
										<span>Giá phòng 1 ngày đêm</span>
										<a href="#" class="price-btn"><?php echo $row_ht['cost']; ?>đ</a>
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
	<!-- End khách sạn nổi tiếng -->
			
	<!-- Start tìm kiếm -->
	<section class="home-about-area">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-6 col-md-12 home-about-left">
					<h1>
						Không tìm thấy khách sạn phù hợp?<br>
						Chúng tôi sẽ giúp bạn.
					</h1>
					<p>
						Chúng tôi sẽ tìm kiếm thông tin khách sạn phù hợp nhất đối với yêu cầu của bạn. Hãy cho chúng tôi biết nó nhé! Sẽ thật tuyệt vời đó!
					</p>

					<a href="#" class="primary-btn text-uppercase">Yêu Cầu Thông Tin Tùy Chỉnh</a>
				</div>
				<div class="col-lg-6 col-md-12 home-about-right no-padding">
					<img class="img-fluid" src="img/hotels/about-img.jpg" alt="">
				</div>
			</div>
		</div>	
	</section>
	<!-- End tìm kiếm -->

	<!-- start footer -->		
	<?php include("public/footer.php"); ?>
	<!-- End footer -->	
</body>
</html>