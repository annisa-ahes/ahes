<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('web/image/Kementerian_Agama_new_logo.png') }}" type="image/png">
    <title>Asrama Haji Surabaya</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">
</head>
<body>
<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="web/image/Kementerian_Agama_new_logo.png" alt="" width="65"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.about') }}">About us</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{ route('web.room') }}">Type Rooms</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.booking') }}">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Asrama Haji Surabaya</h6>
                <h2 class="header-text">Relax Your Mind</h2>
                <p>Cukup dengan merogoh kocek mulai dari Rp350.000, Anda sudah bisa mendapat penginapan dengan kualitas mantap tapi harga bersahabat. <br>Hotel ini cocok bagi wisatawan yang ingin jalan-jalan.</p>
                <a href="{{ route('web.booking') }}" class="btn theme_btn button_hover">Pesan Sekarang</a>
            </div>
        </div>
    </div>
{{--    <div class="hotel_booking_area position">--}}
{{--        <div class="container">--}}
{{--            <div class="hotel_booking_table">--}}
{{--                <div class="col-md-3">--}}
{{--                    <h2>Book<br> Your Room</h2>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="boking_table">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="book_tabel_item">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class='input-group date' id='datetimepicker11'>--}}
{{--                                            <input type='text' class="form-control" placeholder="Checkin Date"/>--}}
{{--                                            <span class="input-group-addon">--}}
{{--                                                        <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                                    </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class='input-group date' id='datetimepicker1'>--}}
{{--                                            <input type='text' class="form-control" placeholder="Checkout Date"/>--}}
{{--                                            <span class="input-group-addon">--}}
{{--                                                        <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                                    </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="book_tabel_item">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <select class="wide">--}}
{{--                                            <option data-display="Adult Peoples">Adult Peoples</option>--}}
{{--                                            <option value="1">1</option>--}}
{{--                                            <option value="2">2</option>--}}
{{--                                            <option value="3">3</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <select class="wide">--}}
{{--                                            <option data-display="Child">Child</option>--}}
{{--                                            <option value="1">1</option>--}}
{{--                                            <option value="2">2</option>--}}
{{--                                            <option value="3">3</option>--}}
{{--                                            <option value="4">4</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="book_tabel_item">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <select class="wide">--}}
{{--                                            <option data-display="Class Rooms">Number of Rooms</option>--}}
{{--                                            <option value="1">Superior</option>--}}
{{--                                            <option value="2">Deluxe</option>--}}
{{--                                            <option value="3">VIP</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <a class="book_now_btn button_hover" href="#">Book Now</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>
<!--================Banner Area =================-->

{{--<!--================ Accomodation Area  =================-->--}}
{{--<section class="accomodation_area section_gap">--}}
{{--    <div class="container">--}}
{{--        <div class="section_title text-center">--}}
{{--            <h2 class="title_color header-text">Room Type</h2>--}}
{{--            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>--}}
{{--        </div>--}}
{{--        <div class="row mb_30 justify-content-center">--}}
{{--            <div class="col-lg-4 col-sm-6">--}}
{{--                <div class="accomodation_item text-center">--}}
{{--                    <div class="hotel_img">--}}
{{--                        <img src="web/image/banner/superior/kamarsuperior.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">--}}
{{--                        <a href="#" class="btn theme_btn button_hover">Book Now</a>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex justify-content-between facilitas-show">--}}
{{--                        <div class="details-container">--}}
{{--                            <img src="web/image/check-square.svg" alt="tick" class="list-icon">--}}
{{--                            <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>--}}
{{--                        </div>--}}
{{--                        <div class="details-container" style="cursor: pointer;"  onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK MANDI','success',true,true,'pageMessages1');">--}}
{{--                            <img src="web/image/svgviewer-output.svg" alt="tick" class="list-icon">--}}
{{--                            <p class="list-text" style="font-size: 13px;">Show Facilities</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="pageMessages1">--}}

{{--                    </div>--}}
{{--                    <a href="#"><h4 class="sec_h4 header-text" style="font-size: 24px;">Superior Room</h4></a>--}}
{{--                    <h5>350.000<small>.-/ Malam</small></h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6">--}}
{{--                <div class="accomodation_item text-center">--}}
{{--                    <div class="hotel_img">--}}
{{--                        <img src="web/image/banner/delux/deluxedoubel.jpg"  alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">--}}
{{--                        <a href="#" class="btn theme_btn button_hover">Book Now</a>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex justify-content-between facilitas-show">--}}
{{--                        <div class="details-container">--}}
{{--                            <img src="web/image/check-square.svg" alt="tick" class="list-icon">--}}
{{--                            <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>--}}
{{--                        </div>--}}
{{--                        <div class="details-container" style="cursor: pointer;"  onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages2');">--}}
{{--                            <img src="web/image/svgviewer-output.svg" alt="tick" class="list-icon">--}}
{{--                            <p class="list-text" style="font-size: 13px;">Show Facilities</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="pageMessages2">--}}

{{--                    </div>--}}
{{--                    <a href="#"><h4 class="sec_h4 header-text" style="font-size: 24px;">Deluxe Room</h4></a>--}}
{{--                    <h5>435.000<small>.-/ Malam</small></h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6">--}}
{{--                <div class="accomodation_item text-center">--}}
{{--                    <div class="hotel_img">--}}
{{--                        <img src="web/image/banner/vip/fasilitasvip.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">--}}
{{--                        <a href="#" class="btn theme_btn button_hover">Book Now</a>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex justify-content-between facilitas-show">--}}
{{--                        <div class="details-container">--}}
{{--                            <img src="web/image/check-square.svg" alt="tick" class="list-icon">--}}
{{--                            <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>--}}
{{--                        </div>--}}
{{--                        <div class="details-container" id="facilitas" style="cursor: pointer;"  onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC HOT WATER REFRIGERATOR / KULKAS TV CHANEL WASTAPEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages3');">--}}
{{--                            <img src="web/image/svgviewer-output.svg" alt="tick" class="list-icon">--}}
{{--                            <p class="list-text" style="font-size: 13px;">Show Facilities</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="pageMessages3">--}}

{{--                    </div>--}}
{{--                    <a href="#"><h4 class="sec_h4 header-text" style="font-size: 24px;">VIP Room</h4></a>--}}
{{--                    <h5>495.000<small>.-/ Malam</small></h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!--================ Accomodation Area  =================-->--}}

<!--================ Facilities Area  =================-->

<!--================ Booking Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color header-text">Pemesanan</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <div class="row mb_30 justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="web/image/banner/superior/kamarsuperior.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                        <a href="{{ route('web.bookingRoom') }}" class="btn theme_btn button_hover">Kamar</a>
                    </div>
                    <a href="{{ route('web.bookingRoom') }}"><h4 class="sec_h4 header-text" style="font-size: 24px;">Pemesanan Kamar</h4></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="web/image/056-hall.jpeg"  alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                        <a href="{{ route('web.bookingHall') }}" class="btn theme_btn button_hover">Hall</a>
                    </div>
                    <a href="{{ route('web.bookingHall') }}"><h4 class="sec_h4 header-text" style="font-size: 24px;">Pemesanan Hall</h4></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="web/image/IMG-20190503-WA0050.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                        <a href="{{ route('web.bookingManasik') }}" class="btn theme_btn button_hover">Manasik</a>
                    </div>
                    <a href="{{ route('web.bookingManasik') }}"><h4 class="sec_h4 header-text" style="font-size: 24px;">Pemesanan Manasik</h4></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Booking Area  =================-->

<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w header-text">Asrama Haji Surabaya Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Dinner Room</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Wide Environment</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-laptop-phone"></i>Wifi Access</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-apartment"></i>Comfortable Room
                    </h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-user"></i>Meeting Room</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Complete Facilities                            </h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color header-text">About Us <br>Our History<br>Mission & Vision</h2>
                    <p>Asrama Haji Surabaya is one of the Representative hotels in Simpang Empat, West Pasaman Regency which is closest to the City Center, and the West Pasaman Regional Government Complex.
                        We provide several types of rooms, including VIP, Deluxe and Superior rooms, the types of rooms that we provide have different atmospheres and characteristics, so it really supports you to feel comfortable in all the rooms we provide.</p>
                    <a href="#" class="button_hover theme_btn_two">Gallery Hotel</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="web/image/img/slider/bangunan2.JPG" alt="img" style="box-shadow: 0px 1px 10px black;">
            </div>

        </div>
    </div>
</section>
<!--================ About History Area  =================-->

<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color header-text">Testimonial from our Clients</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="testimonial_slider owl-carousel">
            <div class="media testimonial_item">
                <img class="rounded-circle" src="web/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="web/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="web/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="web/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Testimonial Area  =================-->

<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">About Agency</h6>
                    <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Navigation Links</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Facilitas</a></li>
                                <li><a href="#">Room and class</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Tel: Telp. (0753) 65718</a></li>
                                <li><a href="#">Reservation. (0753) 65718</a></li>
                                <li><a href="#">alistiqamah@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Newsletter</h6>
                    <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> reserved Asrama Haji Surabaya
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="web/js/jquery-3.2.1.min.js"></script>
<script src="web/js/popper.js"></script>
<script src="web/js/bootstrap.min.js"></script>
<script src="web/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="web/js/jquery.ajaxchimp.min.js"></script>
<script src="web/js/mail-script.js"></script>
<script src="web/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="web/vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="web/js/mail-script.js"></script>
<script src="web/js/stellar.js"></script>
<script src="web/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="web/js/custom.js"></script>

<script>
    function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
        var iconMap = {
            info: "fa fa-info-circle",
            success: "fa fa-thumbs-up",
            warning: "fa fa-exclamation-triangle",
            danger: "fa ffa fa-exclamation-circle"
        };

        var iconAdded = false;

        var alertClasses = ["alert", "animated", "flipInX"];
        alertClasses.push("alert-" + severity.toLowerCase());

        if (dismissible) {
            alertClasses.push("alert-dismissible");
        }

        var msgIcon = $("<i />", {
            "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
        });

        var msg = $("<div />", {
            "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
        });

        if (title) {
            var msgTitle = $("<h4 />", {
                html: title
            }).appendTo(msg);

            if(!iconAdded){
                msgTitle.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (summary) {
            var msgSummary = $("<strong />", {
                html: summary
            }).appendTo(msg);

            if(!iconAdded){
                msgSummary.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (details) {
            var msgDetails = $("<p />", {
                html: details
            }).appendTo(msg);

            if(!iconAdded){
                msgDetails.prepend(msgIcon);
                iconAdded = true;
            }
        }


        if (dismissible) {
            var msgClose = $("<span />", {
                "class": "close", // you need to quote "class" since it's a reserved keyword
                "data-dismiss": "alert",
                html: "<i class='fa fa-times-circle'></i>"
            }).appendTo(msg);
        }

        $('#' + appendToId).prepend(msg);

        if(autoDismiss){
            setTimeout(function(){
                msg.addClass("flipOutX");
                setTimeout(function(){
                    msg.remove();
                },1000);
            }, 5000);
        }
    }

</script>
</body>
</html>