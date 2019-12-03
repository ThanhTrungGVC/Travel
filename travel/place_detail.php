<?php
    include("backend/database.php");
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
    <style type="text/css">
    .size-img {
        width: 100%;
        height: 250px;
    }

    .fav-stit {
        font-size: 28px;
        position: absolute;
        pointer-events: none;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 90%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1.2;
    }

    .card {
        border: 1px solid rgba(26, 115, 190, .3);
        margin-bottom: 15px;
        background: aliceblue;
    }

    .card-header {
        border-bottom: 0;
        padding: 5px 15px;
    }

    .btn-link {
        width: 100%;
        text-align: justify;
        color: blue !important;
    }

    .lichtrinh-stt {
        position: absolute;
        background: url(//deviet.vn/wp-content/themes/gctheme/assets/css/../images/new/calendar.svg);
        width: 48px;
        height: 48px;
        text-align: center;
        top: 0;
        left: -60px;
        padding-top: 22px;
        color: #1a73be;
    }

    #accordion {
        margin-left: 59px;
    }
    </style>
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
                if (isset($_GET['tour_id'])) {
                    $id = $_GET['tour_id'];
                    $result_post = $db->get_info_post($id);
                    $row_post = $result_post->fetch_assoc(); ?>
            <p style="text-align: justify;"><?php echo $row_post['post']; ?></p>
            <br>
            <?php
                }

            ?>
            <strong> Bài viết chi tiết
                <a
                    href="https://deviet.vn/diem-den/paris/?gclid=EAIaIQobChMIyPSTmoCK5gIVGqyWCh28EQFEEAAYASAAEgI9_fD_BwE">
                    tại đây </a>
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
                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2018/02/Versailles3.jpg"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Cung điện Versailles">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Cung điện
                                    Versailles </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2017/05/tham-quan-bao-tang-louvre.jpg"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Bảo tàng Louvre">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Bảo tàng
                                    Louvre </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2017/10/khai-hoan-mon.png"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Khải Hoàn Môn">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Khải Hoàn
                                    Môn </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2019/05/cau-alexandre-iii.jpg"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Cầu Alexandre III">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Cầu
                                    Alexandre III </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2019/05/dien-invalides.jpg"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Điện Invalides">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Điện
                                    Invalides </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2019/05/dien-pantheon.jpg"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Điện Pantheon">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Điện
                                    Pantheon </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2019/03/song-seine-anh-dai-dien.png"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Sông Seine">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Sông
                                    Seine </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2019/04/Notre-Dame.jpg"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Nhà thờ Đức Bà Paris">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Nhà thờ
                                    Đức Bà Paris </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2017/05/cung-dien-Versailles2-1.png"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Đại lộ Champs Elysees">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Đại lộ
                                    Champs Elysees </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2018/12/dai-lo-Champs-Elysees2.png"
                                    class="img-fluid z-depth-1 size-img rounded" alt="Quảng trường Concorde">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Quảng
                                    trường Concorde </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-12 mb-3">
                        <div class="single-other-issue">
                            <div class="thumb">
                                <img src="https://deviet.vn/wp-content/uploads/2017/05/Concorde-1.png"
                                    class="img-fluid z-depth-1 size-img rounded img-responsive" alt="Responsive image">
                            </div>
                            <div class="fav-stit text-center"> <a href="" class="font-weight-bold text-white"> Cung điện
                                    Versailles </a></div>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

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
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <div class="lichtrinh-stt">1</div>
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <div class="lichtrinh-stt">1</div>
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <div class="lichtrinh-stt">1</div>
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
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
                <p class="txts" style="text-align: justify;">
                    https://deviet.vn/tour/tour-phap-thuy-sy-y-vatican-10-ngay-bay-qr-lich-kh-2020/
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
            <div class="row">
                <div class="col-lg-3">
                    <div class="single-destinations">
                        <div class="thumb rounded">
                            <img src="img/packages/d1.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4>Bắc Kinh - Trung Quốc</h4>
                            <p>
                                Beijing - China </p>
                            <ul class="package-list">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Thời hạn</span>
                                    <span>3 ngày và 4 đêm</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Giá mỗi người</span>
                                    <a href="#" class="price-btn">2500000đ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-destinations">
                        <div class="thumb rounded">
                            <img src="img/packages/d3.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4>Vịnh Hạ Long - Việt Nam</h4>
                            <p>
                                HaLongBay - VietNam </p>
                            <ul class="package-list">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Thời hạn</span>
                                    <span>2 ngày và 3 đêm</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Giá mỗi người</span>
                                    <a href="#" class="price-btn">1500000đ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-destinations">
                        <div class="thumb rounded">
                            <img src="img/packages/d4.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4>London - Vương Quốc Anh</h4>
                            <p>
                                London - United Kingdom </p>
                            <ul class="package-list">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Thời hạn</span>
                                    <span>3 ngày và 4 đêm</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Giá mỗi người</span>
                                    <a href="#" class="price-btn">5500000đ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-destinations">
                        <div class="thumb rounded">
                            <img src="img/packages/d5.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4>Hoa Kỳ</h4>
                            <p>
                                United staes of America </p>
                            <ul class="package-list">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Thời hạn</span>
                                    <span>2 ngày và 3 đêm</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Giá mỗi người</span>
                                    <a href="#" class="price-btn">4500000đ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End giới thiệu tour liên quan -->

    <!-- start footer -->
    <?php include("public/footer.php"); ?>
    <!-- End footer -->
</body>

</html>