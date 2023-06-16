<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 101B Lê Hữu Trắc, Phước Mỹ, Sơn Tra, Đà Nắng</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
                </ul>
            </div>

            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if (Session::has('users'))
                        <li><a href="logout"><i class="fa fa-user"></i>{{ Session('users')->name }}</a></li>
                    @else
                        <li><a href="register">Register</a></li>
                        <li><a href="login">Login</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index.html" id="logo"><img src="/source/assets/dest/images/logo-cake.png" width="200px"
                        alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                <div class="beta-comp">
                    @if (Session::has('cart'))
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if (Session::has('cart'))
                                    {{ Session('cart')->totalQty }}
                                @else
                                    Trong
                                @endif) <i class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">
                                {{-- product_cart trong AppServiceProvider --}}
                                @foreach ($product_cart as $product)  
                                    <div class="cart-item" id="cart-item{{ $product['item']['id'] }}">
                                        <a class="cart-item-delete" value="{{ $product['item']['id'] }}"
                                            soluong="{{ $product['qty'] }}"><i class="fa fa-times"></i></a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img
                                                    src="source/image/product/{{ $product['item']['image'] }}"
                                                    alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title">{{ $product['item']['name'] }}</span>
                                                <span
                                                    class="cart-item-amount">{{ $product['item']['qty'] }}*<span>{{ $product['item']['unit_price'] }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="cart-caption">
                                    <div class="cart-total text-right">Tổng tiền: <span
                                            class="cart-total-value">{{ number_format(Session('cart')->totalPrice) }}
                                            đồng</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="check-out" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .cart -->
                    @endif

                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                    class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="/trangchu">Trang chủ</a></li>
                    <li><a href="/type/1">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($loai_sp as $loai)
                                <li><a href="/type/{$loai->id}">{{ $loai->name }}</a></li>
                            @endforeach
                        </ul>

                        {{-- lọc theo looại --}}
                        {{-- <li><a href="#">Loại Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($loai_sp as $loai)
                                <li><a href="/type/{$loai->id}">{{ $loai->name }}</a></li>
                            @endforeach
                        </ul> --}}
                    </li>
                    <li><a href="/about">Giới thiệu</a></li>
                    <li><a href="/contact">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
