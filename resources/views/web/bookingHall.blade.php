<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ URL::asset('web/image/Kementerian_Agama_new_logo.png') }}" type="image/png">
    <title>Asrama Haji Surabaya - Pemesanan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('web/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('web/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('web/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('web/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('web/vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('web/css/responsive.css') }}">
</head>
<body>
<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="{{ URL::asset('web/image/Kementerian_Agama_new_logo.png') }}" alt="" width="65"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.about') }}">About us</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{ route('web.room') }}">Type Rooms</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.booking') }}">Booking</a>
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('web.contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Pemesanan</h2>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Pemesanan</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!-- Rooms Section Begin -->
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ URL::asset('web/image/hall/hall-1.jpg') }}" width="270" height="270" alt="">
                    <div class="ri-text">
                        <h4>Hall Shofa</h4>
                        <h3>Rp. 5.000.000<span>/hari</span></h3>
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>30 ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>1000 orang</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>AC, Sound System</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('web.bookingHallDetails') }}" class="primary-btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ URL::asset('web/image/hall/hall-2.jpg') }}" width="270" height="270" alt="">
                    <div class="ri-text">
                        <h4>Hall Bir Ali</h4>
                        <h3>Rp. 5.000.000<span>/hari</span></h3>
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>30 ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>1000 orang</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>AC, Sound System</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('web.bookingHallDetails') }}" class="primary-btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ URL::asset('web/image/hall/hall-3.jpg') }}" width="270" height="270" alt="">
                    <div class="ri-text">
                        <h4>Hall Muzdalifah</h4>
                        <h3>Rp. 5.000.000<span>/hari</span></h3>
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>30 ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>1000 orang</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>AC, Sound System</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('web.bookingHallDetails') }}" class="primary-btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ URL::asset('web/image/hall/hall-4.jpg') }}" width="270" height="270" alt="">
                    <div class="ri-text">
                        <h4>Hall C</h4>
                        <h3>Rp. 5.000.000<span>/hari</span></h3>
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>30 ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>1000 orang</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>AC, Sound System</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('web.bookingHallDetails') }}" class="primary-btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ URL::asset('web/image/hall/hall-5.jpg') }}" width="270" height="270" alt="">
                    <div class="ri-text">
                        <h4>Hall Zam-Zam</h4>
                        <h3>Rp. 5.000.000<span>/hari</span></h3>
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>30 ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>1000 orang</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>AC, Sound System</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('web.bookingHallDetails') }}" class="primary-btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ URL::asset('web/image/hall/hall-6.jpg') }}" width="270" height="270" alt="">
                    <div class="ri-text">
                        <h4>Hall Mina</h4>
                        <h3>Rp. 5.000.000<span>/hari</span></h3>
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td>30 ft</td>
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>1000 orang</td>
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td>AC, Sound System</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('web.bookingHallDetails') }}" class="primary-btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="room-pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->

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
<script src="{{ URL::asset('web/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('web/js/popper.js') }}"></script>
<script src="{{ URL::asset('web/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('web/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('web/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ URL::asset('web/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ URL::asset('web/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
<script src="{{ URL::asset('web/js/mail-script.js') }}"></script>
<script src="{{ URL::asset('web/js/stellar.js') }}"></script>
<script src="{{ URL::asset('web/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('web/vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ URL::asset('web/js/stellar.js') }}"></script>
<script src="{{ URL::asset('web/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ URL::asset('web/js/custom.js') }}"></script>
</body>
</html>