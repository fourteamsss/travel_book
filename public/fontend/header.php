
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link ref="stylesheet" href="css/menu_dropdown.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="booking/js/booking.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl = $("#owl");
            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [995, 2], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                pagination: false
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
</head>

<body>
    <!--==============================header=================================-->
    <div class="page1 " id="top">
        <header>
            <div class="top_header ">
                <ul>
                    <li>
                        <span class="glyphicon glyphicon-earphone" style='font-size:15px;color:red'></span>
                        <a href="#">9189877</a>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-map-marker" style='font-size:15px;color:red'></span>
                        <a href="#">Hà Nội</a>
                    </li>
                    <li>
                        <span class='glyphicon glyphicon-envelope' style='font-size:15px;color:red'></span>
                        <a href="#">mail@travel_book.com</a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="container_12">
                <div class="grid_12">
                    <div class="menu_block">
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                <li class="current"><a href="index.php">Trang chủ</a></li>
                                <li ><a href="#">Tour Du Lịch</a>
                                <!-- đoạn này test  -->
                                <ul class="danhmuc_menu">
                                    <li > <a href="/trong-nuoc"><span>Trong  nước</span></a>	
                                    	<ul >						
						                    <li > <a href="/ha-long"><span>Hạ Long</span></a> </li>						
						                    <li > <a href="/ninh-binh"><span>Ninh Bình</span></a> </li>						
						                    <li > <a href="/nghe-an"><span>Nghệ An</span></a> </li>						
                                            <li > <a href="/da-nang"><span>Đà Nẵng</span></a> </li>                                            
                                            <li > <a href="/tam-dao"><span>Tam Đảo</span></a> </li>                                            
                                            <li > <a href="/quang-ninh"><span>Quảng Ninh</span></a> </li>                                            
                                            <li > <a href="/thanh-hoa"><span>Thanh Hóa</span></a> </li>						
					                    </ul>
				                    </li>
                                    <li > <a href="/ngoai-nuoc"><span>Ngoài  nước</span></a>	
                                    	<ul >						
                                            <li> <a href="/tay-ban-nha"><span>Tây Ban Nha</span></a> </li>						
                                            <li> <a href="/y"><span>Ý</span></a> </li>                                            
                                            <li> <a href="/phap"><span>Pháp</span></a> </li>                                            
                                            <li> <a href="/anh"><span>Anh</span></a> </li>                                            
                                            <li> <a href="/thai-lan"><span>Thái Lan</span></a> </li>                                            
                                            <li> <a href="/han-quoc"><span>Hàn Quốc</span></a> </li>                                            
                                            <li> <a href="/trung-quoc"><span>Trung Quốc</span></a> </li>					
					                    </ul>
				                    </li>
						        </ul>
                                
                                 <!-- kết thúc đoạn test-->
                                   <!-- <ul class="danhmuc_menu">
                                        <li><a href="DomesticTour.php">Tour Trong Nước</a></li>
                                        <li><a href="tour_nuoc_ngoai.php">Tour Ngoài Nước</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="tours.php">Giới Thiệu</a>
                                    <ul class="danhmuc_menu">
                                        <li><a href="DomesticTour.php">Cẩm Nang Du Lịch</a></li>
                                        <li><a href="tour_nuoc_ngoai.php">Kinh Nghiệm Du Lịch</a></li>
                                    </ul>
                                </li>

                                <li><a href="">Tin Tức</a></li>
                                <li><a href="lienhe.php">Liên hệ</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_12">
                    <h1>
                        <a href="index.html">
                            <img src="images/logo.png" alt="Your Happy Family">
                        </a>
                    </h1>
                </div>
            </div>
        </header>
        <div class="slider_wrapper">
            <div id="camera_wrap" class="">
                <div data-src="images/slide.jpg">
                    <div class="caption fadeIn">
                        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">ĐÀ LẠT</h2>
                        <div class="price">
                            Chỉ từ
                            <span>2tr</span>
                        </div>
                        <a href="#">Thông tin thêm</a>
                    </div>
                </div>
                <div data-src="images/slide1.jpg">
                    <div class="caption fadeIn ">
                        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">NINH BÌNH</h2>
                        <div class="price">
                            Chỉ từ
                            <span>3.5tr</span>
                        </div>
                        <a href="#">Thông tin thêm</a>
                    </div>
                </div>
                <div data-src="images/slide2.jpg">
                    <div class="caption fadeIn">
                        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">HÀ NỘI</h2>
                        <div class="price">
                            Chỉ từ
                            <span>2tr</span>
                        </div>
                        <a href="#">Thông tin thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================Content=================================-->
        <div class="">
            <div class="container_12">
                <div class="grid_4">
                    <div class="banner zoom">
                        <div class="label">
                            <div class="title name_tour_tt">
                                <p>Đà Lạt</p>
                            </div>
                            <div class="price">FROM<span>2.5tr</span></div>
                            <a href="#">LEARN MORE</a>
                        </div>
                        <img src="images/iloveimg-resized/dalt.jpg" alt="">
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner zoom">
                        <img src="images/iloveimg-resized/hoian.jpg" alt="">
                        <div class="label">
                            <div class="title name_tour_tt">
                                <p>Hội An</p>
                            </div>
                            <div class="price">FROM<span>3.5tr</span></div>
                            <a href="#">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4 ">
                    <div class="banner zoom">
                        <img src="images/iloveimg-resized/quynhon.jpg" alt="">
                        <div class="label">
                            <div class="title name_tour_tt">
                                <p>Quy Nhơn</p>
                            </div>
                            <div class="price">FROM<span>1.5tr</span></div>
                            <a href="#">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!--==============================footer=================================-->
        <script>
            $(function () {
                $('#bookingForm').bookingForm({
                    ownerEmail: '#'
                });
            })
            $(function () {
                $('#bookingForm input, #bookingForm textarea').placeholder();
            });
        </script>
    </div>
    <!-- ==============================main======================================= -->
    <div class="space container"></div>
    <div class=" container">
        <div class="row ">
            <div class="tag_ col-sm-6">
                <ul>
                    <li>
                        <a>Chọn tỉnh thành</a>
                        <ul class="ul_tag">
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="search-box col-sm-4">
                <form class="search-form">
                    <input class="form-control" placeholder="Tìm kiếm tour du lịch" type="text">
                    <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
