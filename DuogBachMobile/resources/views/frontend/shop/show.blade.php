@extends('frontend.layouts.master')
<!-- Đặt tên cho mỗi trang -->
@section('title','Chi Tiết Sản Phẩm')
@section('body')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.html">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <li><a href="#"></a>Điện thoại</li>
                        <li><a href="#"></a>Laptop</li>
                        <li><a href="#"></a>Máy tính bảng</li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Samsung
                                <input type="checkbox" name="" id="bc-samsung">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Apple
                                <input type="checkbox" name="" id="bc-apple">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Xiaomi
                                <input type="checkbox" name="" id="bc-xiaomi">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Oppo
                                <input type="checkbox" name="" id="bc-oppo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" name="" id="minamount">
                                <input type="text" name="" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header">
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" name="" id="cs-black">
                            <label for="cs-black" class="cs-black">Black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" name="" id="cs-violet">
                            <label for="cs-violet" class="cs-violet">Violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" name="" id="cs-blue">
                            <label for="cs-blue" class="cs-blue">Blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" name="" id="cs-yellow">
                            <label for="cs-yellow" class="cs-yellow">Yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" name="" id="cs-red">
                            <label for="cs-red" class="cs-red">Red</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" name="" id="cs-green">
                            <label for="cs-green" class="cs-green">Green</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">RAM</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">4gb</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">8gb</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">16gb</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">32gb</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Điện thoại</a>
                        <a href="#">Tai Nghe</a>
                        <a href="#">Máy tính bảng</a>
                        <a href="#">Laptop</a>
                        <a href="#">Sạc dự phòng</a>
                        <a href="#">Phụ kiện</a>
                        <a href="#">Ưu đãi</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="./img/products/{{$product->productImages[0]->path}}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach($product->productImages as $productImage)
                                <div class="pt active" data-imgbigurl="./img/products/{{$productImage->path}}">
                                    <img src="./img/products/{{$productImage->path}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{$product->tag}}</span>
                                <h3>{{$product->name}}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                @for($i = 0; $i <=5;$i++) @if($i <=$product->avgRating)
                                    <i class="fa fa-star"></i>
                                    @else
                                    <i class="fa fa-star-o"></i>
                                    @endif
                                    @endfor
                                    <span>({{count($product->productComments)}})</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{$product->content}}
                                </p>
                                @if($product->discount != null)
                                <h4>${{$product->discount}} <span>${{$product->price}}</span></h4>
                                @else
                                <h4>${{$product->price}}</h4>
                                @endif
                            </div>
                            <div class="pd-color">
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    @foreach(array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                    <div class="cc-item">
                                        <input type="radio" name="" id="cc-{{$productColor}}">
                                        <label for="cc-{{$productColor}}" class="cc-{{$productColor}}"></label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                @foreach(array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize)
                                <div class="sc-item">
                                    <input type="radio" id="sm-{{$productSize}}">
                                    <label for="sm-{{$productSize}}">{{$productSize}}</label>
                                </div>
                                @endforeach
                            </div>
                            <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name="" id="" value="1">
                                    </div>
                                    <a class="primary-btn pd-cart" href="shopping-cart.html">Add To Cart</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Danh mục</span> : {{$product->productCategory->name}}</li>
                                <li><span>TAGS</span> : {{$product->tag}}</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Sku : 00012</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">MÔ TẢ</a>
                                </li>
                                <li><a href="#tab-2" data-toggle="tab" role="tab">THÔNG SỐ KỸ THUẬT</a></li>
                                <li><a href="#tab-3" data-toggle="tab" role="tab">NHẬN XÉT CỦA KHÁCH HÀNG ({{count($product->productComments)}})</a></li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        {!!$product->description!!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Đánh giá của khách hàng</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        @for($i = 0; $i <=5;$i++) @if($i <=$product->avgRating)
                                                            <i class="fa fa-star"></i>
                                                            @else
                                                            <i class="fa fa-star-o"></i>
                                                            @endif
                                                            @endfor
                                                            <span>({{count($product->productComments)}})</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Giá</td>
                                                <td>
                                                    <div class="p-price">${{$product->price}}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Còn hàng</td>
                                                <td>
                                                    <div class="p-stock">{{$product->qty}} trong kho</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Cân nặng</td>
                                                <td>
                                                    <div class="p-weight">{{$product->weight}}kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Dung Lượng</td>
                                                <td>
                                                    <div class="p-size">@foreach(array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize){{$productSize}}
                                                        @endforeach</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Màu sắc</td>
                                                <!-- <td>
                                                    @foreach(array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                                    <span class="cs-{{$productColor}}"></span>
                                                    @endforeach
                                                </td> -->
                                                <td>
                                                    @foreach(array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                                    <span class="cs-color cs-{{$productColor}}"></span>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Mã hàng</td>
                                                <td>
                                                    <div class="p-code">{{$product->sku}}</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>{{count($product->productComments)}} Comments</h4>
                                        <div class="comment-option">
                                            @foreach($product->productComments as $productComment)
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="./img/product-single/{{$productComment->users->avatar ?? 'default-avatar.jpg'}}" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        @for($i = 0; $i <=5;$i++) @if($i <=$product->avgRating)
                                                            <i class="fa fa-star"></i>
                                                            @else
                                                            <i class="fa fa-star-o"></i>
                                                            @endif
                                                            @endfor
                                                    </div>
                                                    <h5>{{$productComment->name}} <span>{{date('M d, Y', strtotime($productComment->create_at))}}</span></h5>
                                                    <div class="at-reply">{{$productComment->messages}}</div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="leave-comment">
                                            <h4>Để Lại Bình Luận Của Bạn</h4>
                                            <form action="{{route('postComment')}}" method="post" class="comment-form">
                                            @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id ?? null}}">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" name="name" id="" placeholder="Name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="email" name="email" id="" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea name="messages" id="" placeholder="Messages"></textarea>
                                                        <div class="personal-rating">
                                                            <h6>Your Rating</h6>
                                                            <div class="rating">
                                                                <div class="rate">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label for="star5" title="text">5 stars</label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label for="star4" title="text">4 stars</label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label for="star3" title="text">3 stars</label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label for="star2" title="text">2 stars</label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label for="star1" title="text">1 star</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="site-btn" type="submit">Send
                                                            messages</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section Beign -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản Phẩm Liên Quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/products/product-1.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="./product.html">+ Quick View</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">$14.00 <span>$35.00</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/products/product-2.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="./product.html">+ Quick View</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">$14.00 <span>$35.00</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/products/product-3.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="./product.html">+ Quick View</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">$14.00 <span>$35.00</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/products/product-4.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="./product.html">+ Quick View</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">$14.00 <span>$35.00</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Products Section End -->
@endsection