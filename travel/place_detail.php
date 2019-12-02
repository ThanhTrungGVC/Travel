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
	
	<!-- #header -->
	<?php include("public/header.php"); ?>		  
	<!-- start banner -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Gói Du Lịch				
					</h1>	
					<p class="text-white link-nav">
                        <a href="index.php">Trang Chủ </a>  
                        <span class="lnr lnr-arrow-right"></span>  
                        <a href="packages.php"> Gói Du Lịch</a>
                        <span class="lnr lnr-arrow-right"></span>  
                        <a href="place_detail.php"> Paris</a>
                    </p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner -->	

	<!-- Start giới thiệu chung -->
	<section class="section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Du lịch Paris</h1>
                        <p>Tour du lịch Paris giá rẻ khám phá kinh đô ánh sáng của thế giới!</p>
                    </div>
                </div>
            </div>

			<!-- chi tiết -bài viết-->
			<?php
				if (isset($_GET['tour_id'])){
					$id = $_GET['tour_id'];
					$result_post = $db->get_info_post($id);
					$row_post = $result_post->fetch_assoc();
					?>
						<p style="text-align: justify;"><?php echo $row_post['post']; ?></p>
						<br>
					<?php
				}

			?>
            <strong> Bài viết chi tiết
                <a href="https://deviet.vn/diem-den/paris/?gclid=EAIaIQobChMIyPSTmoCK5gIVGqyWCh28EQFEEAAYASAAEgI9_fD_BwE"> tại đây </a>
            </strong>
            </div> 
		</div>
	</section> 
    <!-- End giới thiệu chung -->

    

    <!-- Start giới thiệu hình ảnh -->
	<section class="section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Các địa điểm nổi tiếng</h1>
                        <p>Tour du lịch Paris giá rẻ khám phá kinh đô ánh sáng của thế giới!</p>
                    </div>
                </div>
            </div>

			<!-- chi tiết -->
			<div>
			<p class="txts" style="text-align: justify;">Hình ảnh
            </p>
            </div> 
		</div>
	</section> 
    <!-- End giới thiệu hình ảnh -->

    <!-- Start giới thiệu lịch trình -->
	<section class="destinations-area section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Lịch trình chi tiết</h1>
                        <p>Tour du lịch Paris giá rẻ khám phá kinh đô ánh sáng của thế giới!</p>
                    </div>
                </div>
            </div>

			<!-- chi tiết -->
			<div>
			<p class="txts" style="text-align: justify;">https://deviet.vn/tour/tour-phap-thuy-sy-y-vatican-10-ngay-bay-qr-lich-kh-2020/
            </p>
            </div> 
		</div>
	</section> 
    <!-- End giới thiệu lịch trình-->

    <!-- Start giới thiệu chi tiết giá -->
	<section class="section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Chi tiết giá</h1>
                        <p>Tour du lịch Paris giá rẻ khám phá kinh đô ánh sáng của thế giới!</p>
                    </div>
                </div>
            </div>

			<!-- chi tiết -->
			<div>
			<p class="txts" style="text-align: justify;">https://deviet.vn/tour/tour-phap-thuy-sy-y-vatican-10-ngay-bay-qr-lich-kh-2020/
            </p>
            </div> 
		</div>
	</section> 
    <!-- End giới thiệu giá-->

    <!-- Start giới thiệu tour liên quan -->
	<section class="destinations-area section-gap">
		<div class="container">
			<!-- lable -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Các tour liên quan</h1>
                        <p>Tour du lịch Paris giá rẻ khám phá kinh đô ánh sáng của thế giới!</p>
                    </div>
                </div>
            </div>

			<!-- chi tiết -->
			<div>
			<p class="txts" style="text-align: justify;">https://deviet.vn/tour/tour-phap-thuy-sy-y-vatican-10-ngay-bay-qr-lich-kh-2020/
            </p>
            </div> 
		</div>
	</section> 
    <!-- End giới thiệu tour liên quan -->

	<!-- start footer -->		
	<?php include("public/footer.php"); ?>
	<!-- End footer -->	
</body>
</html>