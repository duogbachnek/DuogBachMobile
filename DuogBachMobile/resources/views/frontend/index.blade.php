@extends('frontend.layouts.master')
<!-- Đặt tên cho mỗi trang -->
@section('title','Trang Trủ')
@section('body')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
            <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non laboriosam quae hic porro
                                magnam doloribus asperiores, inventore, quis aut voluptates omnis a iste quibusdam amet
                                delectus provident adipisci et sapiente?
                            </p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div> -->
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
            <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non laboriosam quae hic porro
                                magnam doloribus asperiores, inventore, quis aut voluptates omnis a iste quibusdam amet
                                delectus provident adipisci et sapiente?
                            </p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div> -->
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/hero-3.jpg"></div>
        <div class="single-hero-items set-bg" data-setbg="img/hero-4.jpg"></div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="./img/banner-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Điện thoại</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="./img/banner-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Laptop</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="./img/banner-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Máy tính bảng</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                    <h2>Điện thoại</h2>
                    <a href="#">Khám Phá Thêm</a>
                </div>
            </div>

            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">IPHONE</li>
                        <li>SAMSUNG</li>
                        <li>OPPO</li>
                        <li>PHỤ KIỆN</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/women-1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/women-2.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/women-3.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/women-4.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin -->
<section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Sale Of The Week</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque aperiam enim repellat nostrum
                    illum? Error itaque saepe aspernatur voluptatum nihil enim, assumenda, voluptates quia quae
                    deserunt, consequatur consequuntur eligendi. Itaque.</p>
                <div class="product-price">$35.00<span>/ HanBag</span></div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active">ACER</li>
                        <li>LENOVO</li>
                        <li>HP</li>
                        <li>PHỤ KIỆN</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/man-1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/man-2.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/man-3.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/products/man-4.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="./product.html">+ Xem Chi Tiết</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Coat</div>
                            <a href="">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">$14.00 <span>$35.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="img/products/man-large.jpg">
                    <h2>Laptop</h2>
                    <a href="#">Khám Phá Thêm</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<!-- Instagram Section Begin -->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">DuogBachDev</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">DuogBachDev</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">DuogBachDev</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">DuogBachDev</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">DuogBachDev</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">DuogBachDev</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tin Tức</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="./img/latest-1.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4, 2023
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="">
                            <h4>The Best Street Style From Lodon DuogBachDev</h4>
                        </a>
                        <p>
                            Các sản phẩm đến từ thương hiệu Apple luôn chiếm trọn niềm yêu thích của mình từ cái
                            nhìn đầu tiên. Và Hoàng Hà Mobile là nơi Jun Vũ tin tưởng nhất để mua sắm, với hơn 100
                            chi nhánh trên toàn quốc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="./img/latest-2.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4, 2023
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="">
                            <h4>The Best Street Style From Lodon DuogBachDev</h4>
                        </a>
                        <p>
                            Các sản phẩm đến từ thương hiệu Apple luôn chiếm trọn niềm yêu thích của mình từ cái
                            nhìn đầu tiên. Và Hoàng Hà Mobile là nơi Jun Vũ tin tưởng nhất để mua sắm, với hơn 100
                            chi nhánh trên toàn quốc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="./img/latest-3.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4, 2023
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="">
                            <h4>The Best Street Style From Lodon DuogBachDev</h4>
                        </a>
                        <p>
                            Các sản phẩm đến từ thương hiệu Apple luôn chiếm trọn niềm yêu thích của mình từ cái
                            nhìn đầu tiên. Và Hoàng Hà Mobile là nơi Jun Vũ tin tưởng nhất để mua sắm, với hơn 100
                            chi nhánh trên toàn quốc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit single-benefitnek">
                        <div class="sb-icon">
                            <img src="./img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Miễn phí vận chuyển</h6>
                            <p>Đối với đơn hàng trên 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="./img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Giao hàng đúng hạn</h6>
                            <p>Nếu không có vấn đề gì</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="./img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Thanh toán an toàn</h6>
                            <p>Thanh toán an toàn 100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

@endsection