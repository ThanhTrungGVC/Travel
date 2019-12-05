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
    <section class="price-area section-gap">
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
            <?php
                $id = $row_post['schedule_id'];
                $result_schedule = $db->get_info_schedule($id);
                while ($row_schedule = $result_schedule->fetch_assoc()) {
                ?>
                    <div class="card">
                    <div class="card-header" id="heading<?php echo $row_schedule['tour_schedule_id']; ?>">
                        <h5 class="mb-0">
                            <div class="lichtrinh-stt"><?php echo $row_schedule['tour_schedule_id']; ?></div>
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo $row_schedule['tour_schedule_id']; ?>"
                                aria-expanded="false" aria-controls="collapse<?php echo $row_schedule['tour_schedule_id']; ?>">
                                <?php echo $row_schedule['title']; ?>
                            </a>
                        </h5>
                    </div>

                    <div id="collapse<?php echo $row_schedule['tour_schedule_id']; ?>" class="collapse" aria-labelledby="heading<?php echo $row_schedule['tour_schedule_id']; ?>" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $row_schedule['content']; ?>
                        </div>
                    </div>
                </div>
                <?php
                }
            ?>
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
                <!--Giá tour-->
                <div class="d-flex pb-4">
                    <img class="pr-3" src="https://deviet.vn/wp-content/themes/gctheme/images/new/coin.svg"
                        data-src="https://deviet.vn/wp-content/themes/gctheme/images/new/coin.svg">
                    <div class="tdetail-pitem-wrap">
                        <h3 class="s20"> Giá tour
                            <div class="text-info pt-2">
                                <span class="s28"> 57.900.000 đ </span>
                            </div>
                        </h3>
                        <ul class="tdetail-sale"></ul>
                    </div>
                </div>
                <!--End Giá tour-->
                <!--Giá báo gồm-->
                <div class="d-flex pb-4">
                    <img class="pr-3" src="https://deviet.vn/wp-content/themes/gctheme/images/new/check.svg"
                        data-src="https://deviet.vn/wp-content/themes/gctheme/images/new/check.svg">
                    <div class="tdetail-pitem-wrap">
                        <h3 class="s20 pb-3">Giá bao gồm</h3>
                        <ul>
                            <ul class="tdetail-lcontent" >
                                <li style="text-align: justify;">Phí tư vấn, hoàn thiện hồ sơ, khai form, đặt lịch hẹn
                                    xin visa</li>
                                <li style="text-align: justify;">Phí dịch thuật, công chứng và hoàn tất hồ sơ nộp visa
                                </li>
                                <li style="text-align: justify;">Phí nộp visa Schengen cho Đại sứ quán và phí nộp cho
                                    trung tâm tiếp nhận hồ sơ được ủy quyền của Đại sứ quán</li>
                                <li style="text-align: justify;">Vé máy bay khứ hồi quốc tế của hàng không cao cấp 5 sao
                                    Qatar Airlines, một trong những hãng hàng không lớn nhất thế giới.</li>
                                <li style="text-align: justify;">Xe đón và tiễn sân bay cho đoàn tại Việt Nam</li>
                                <li style="text-align: justify;">Xe thăm quan tại Châu Âu chất lượng cao, lái xe kinh
                                    nghiệm theo chương trình (xe phục vụ tối đa 11 tiếng / ngày)</li>
                                <li style="text-align: justify;">Trưởng đoàn đưa đoàn đi từ Việt Nam</li>
                                <li style="text-align: justify;">Khách sạn từ 4* sao tiêu chuẩn Châu Âu (02 khách ngủ 1
                                    phòng)</li>
                                <li style="text-align: justify;">Ăn các bữa theo chương trình</li>
                                <li style="text-align: justify;">Vé thăm quan theo chương trình.</li>
                                <li style="text-align: justify;">Thuế, phí dành cho khách du lịch tại các thành phố theo
                                    chương trình.</li>
                                <li style="text-align: justify;">Bảo hiểm du lịch toàn cầu, mức bồi thường tối đa 1 tỉ
                                    VND</li>
                                <li style="text-align: justify;">Quà tặng từ tour Dế Việt Châu Âu</li>
                                <li style="text-align: justify;">Hỗ trợ 24/7 trong suốt thời gian thăm quan Châu Âu</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <!--End Giá báo gồm-->
                <!--Giá không báo gồm-->
                <div class="d-flex pb-4">
                    <img class="pr-3" src="https://deviet.vn/wp-content/themes/gctheme/images/new/x.svg"
                        data-src="https://deviet.vn/wp-content/themes/gctheme/images/new/x.svg">
                    <div class="tdetail-pitem-wrap">
                        <h3 class="s20 pb-3">Giá không bao gồm:</h3>
                        <ul>
                            <ul class="tdetail-lcontent" >
                                <li style="text-align: justify;">Tip cho trưởng đoàn, hướng dẫn viên và lái xe&nbsp;: 7
                                    Euro / khách / ngày</li>
                                <li style="text-align: justify;">Chi phí cá nhân&nbsp;: giặt là, điện thoại, đồ uống,
                                    hành lý quá cước, các chi phí cá nhân phát sinh không có trong phần bao gồm …</li>
                                <li style="text-align: justify;">Phụ thu ở khách sạn phòng đơn.</li>
                                <li style="text-align: justify;">Chi phí cho HDV và lái xe phục vụ (nếu có yêu cầu ngoài
                                    giờ).</li>
                                <li style="text-align: justify;">Phương tiện vận chuyển ngoài giờ của chương trình (nếu
                                    có yêu cầu).</li>
                                <li style="text-align: justify;">Các chi phí khác không đề cập trong mục dịch vụ đã bao
                                    gồm.</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <!--End Giá không báo gồm-->
                <!--Trẻ em-->
                <div class="d-flex pb-4">
                    <img class="pr-3" src="https://deviet.vn/wp-content/themes/gctheme/images/new/child.svg"
                        data-src="https://deviet.vn/wp-content/themes/gctheme/images/new/child.svg">
                    <div class="tdetail-pitem-wrap">
                        <h3 class="s20 pb-3">Trẻ em</h3>
                        <ul>
                            <ul class="tdetail-lcontent" >
                                <li style="text-align: justify;">Trẻ em dưới 2 tuổi: 30% tổng giá trị tour và ngủ cùng
                                    bố mẹ</li>
                                <li style="text-align: justify;">Trẻ em từ 2 đến 11 tuổi: 85% tổng giá trị tour và ngủ
                                    cùng bố mẹ</li>
                                <li style="text-align: justify;">Trẻ em từ 2 đến 11 tuổi: 95% tổng giá trị tour và ngủ
                                    giường riêng</li>
                                <li style="text-align: justify;">Trẻ em từ 12 tuổi trở lên: 100% tổng giá trị tour và
                                    ngủ giường riêng</li>
                                <li style="text-align: justify;">Tổng số cháu được hưởng chính sách cho trẻ em không quá
                                    3 cháu / đoàn. Các gia đình ký hợp đồng và đặt cọc trước được ưu tiên chính sách
                                    giảm giá cho trẻ em. Các gia đình đăng ký sau khi đoàn đã có đủ 3 trẻ em được giảm
                                    giá, thì các cháu đăng ký sau sẽ được tính như người lớn.</li>
                                <li style="text-align: justify;">Chính sách giảm giá cho trẻ em chỉ áp dụng khi 1 trẻ em
                                    đi cùng 02 người lớn và ngủ cùng phòng với 02 người lớn</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <!--End Trẻ em-->
                <!--Ký hợp đồng và đặt cọc tour-->
                <div class="d-flex pb-4">
                    <img class="pr-3" src="https://deviet.vn/wp-content/themes/gctheme/images/new/sign.svg"
                        data-src="https://deviet.vn/wp-content/themes/gctheme/images/new/sign.svg">
                    <div class="tdetail-pitem-wrap">
                        <h3 class="s20 pb-3">Ký hợp đồng và đặt cọc tour</h3>
                        <ul>
                            <h6 class="m-0 pb-1" style="text-align: justify;">Quy trình đăng ký và tham gia tour: </h6>
                            <ul class="tdetail-lcontent pb-2" style="text-align: justify;">
                                <li>Quý khách vui lòng đem theo Hộ chiếu (bản chính), ký hợp đồng và đóng tiền đặt
                                    cọc 20.000.000 VND / 1 người khi đăng ký tour</li>
                                <li>Dế Việt Châu Âu sẽ hướng dẫn thủ tục xin visa, hoàn thiện các mẫu đơn visa,
                                    đăng ký ngày nộp hồ sơ, khách hàng phải có mặt để nộp hồ sơ và mang theo hồ sơ bản
                                    gốc để đối chiếu.</li>
                                <li>Hoàn tất thanh toán tiền tour khi có kết quả visa hoặc 2 tuần trước khi khởi hành.
                                </li>
                                <li>Tham gia họp đoàn trước 7 ngày so với ngày khởi hành hoặc theo lịch của đoàn để
                                    chuẩn bị tốt nhất cho chuyến thăm quan</li>
                            </ul>
                            <h6 class="m-0 pb-1" style="text-align: justify;">Trong trường hợp quý khách hủy tour:</h6>
                            <ul class="tdetail-lcontent">
                                <li style="text-align: justify;">Huỷ sau khi đã nộp hoặc / và có kết quả visa, đóng 10%
                                    giá tour.</li>
                                <li style="text-align: justify;">Trước từ 30 đến 16 ngày so với ngày khởi hành, đóng 50%
                                    giá tour</li>
                                <li style="text-align: justify;">Trước 15 ngày đến 8 ngày so với ngày khởi hành, đóng
                                    75% giá tour</li>
                                <li style="text-align: justify;">Trong vòng 7 ngày so với ngày khởi hành, đóng 100% giá
                                    tour</li>
                                <li style="text-align: justify;">Trong trường hợp quý khách bị từ chối visa, chúng tôi
                                    sẽ cam kết hoàn 100% phí dịch vụ visa và tour cho quý khách. Quý khách chỉ mất
                                    3.000.000 VND / người lớn (phí sứ quán, trung tâm</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <!--End Ký hợp đồng và đặt cọc tour-->
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