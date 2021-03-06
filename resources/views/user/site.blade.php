<!-- <!DOCTYPE html>

<html lang="en">

<head>
    <title>@yield('title_user')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Impel">
    <meta name="keywords" content="">
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320">
    <!--Srart Style -->
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/fonts.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/fa.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/ion.rangeSlider.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/js/plugin/magnific/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/js/plugin/slick/slick.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/js/plugin/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/js/plugin/nice_select/nice-select.css">
<!----Revolution slider---->
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/js/plugin/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="{{url('public/fontend')}}/css/style.css">
<!-- Favicon Link -->
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
@yield('css')
<!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> -->

<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
</script>
</head>

<body>
    <!------ Preloader Start ------>
    <div id="preloader">
        <div id="status">
            <img src="images/logo.png" alt="" />
            <div class="loader">
                Loading...
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
    <!------ Header Start ------>
    <!-- menu -->
    <div class="impl_menu_wrapper">
        <div class="impl_logo">
            <a href="{{route('home')}}"><img style="" src="{{ url('public/uploads/logotest.png') }}" alt="Logo"
                    class="img-fluid"></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <button class="impl_menu_btn">
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="impl_menu_inner">
                        <div class="impl_logo_responsive">
                            <a href="index.html"><img src="images/logotest.png" alt="Logo" class="img-fluid"></a>
                        </div>

                        <div class="impl_menu">
                            <nav>
                                <div class="menu_cross">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <ul class="ul_menu">
                                    <li class="dropdown"><a href="{{ route('home') }}" class="active">Trang Ch???</a></li>
                                    <!-- <li><a href="about.html">C??ng Ty</a></li> -->
                                    <li class="dropdown"><a href="">S???n ph???m</a>
                                        <ul class="sub-menu">
                                            @foreach($cats as $cat)
                                            <li><a
                                                    href="{{ route('purchase',['slug' => $cat->slug]) }}">{{$cat->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('blog_single') }}">Tin t???c</a></li>
                                    <li class="dropdown"><a href="{{ route('blog') }}">D???ch v???</a>
                                        <ul class="sub-menu">
                                            <li><a href="sell_step.html">B???o d?????ng</a></li>
                                            <li><a href="sell_step.html">?????t l???ch </a></li>
                                            <li><a href="sell_step.html">B???o d?????ng ?????nh k??</a></li>
                                            <li><a href="sell_step.html">T??i li???u tham kh???o</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact.create') }}">Li??n h???</a></li>
                                </ul>
                            </nav>

                        </div>
                        <!-- THANH MENU ICON -->
                        <ul class="impl_header_icons">
                            <li class="impl_search"><span><i class="fa fa-search" aria-hidden="true"></i></span></li>
                            <li class="cart-popup"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"><span
                                            class='badge badge-warning'
                                            id='lblCartCount'>{{ $cart->total_quantity}}</span></i></a>
                                <!--shopping cart box-->
                                <div class="cart-box">
                                    <div class="popup-container">
                                        @foreach($cart->items as $cart_item)
                                        <div class="cart-entry">
                                            <a href="#" class="image">
                                                <!-- 70x60 -->
                                                <img src="{{url('public/uploads')}}/{{$cart_item['image']}}" alt=""
                                                    width="70px" height="60px">
                                            </a>
                                            <div class="content">
                                                <a href="#" class="title">{{ $cart_item['name'] }}</a>
                                                <p class="quantity">S??? L?????ng: {{$cart_item['quantity']}}</p>
                                                <span class="price">{{ number_format($cart_item['price']) }} VND</span>
                                            </div>
                                            <div class="button-x">
                                                <a href="{{ route('cart_remove',['id' => $cart_item['id'] ]) }}">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="summary">
                                            <div class="subtotal" style="color: #000;">T???ng gi??:</div>
                                            <div class="price-s" style="color: #000;">
                                                {{number_format($cart->total_price) }} VND</div>
                                        </div>
                                        <div class="cart-buttons">
                                            <a href="{{route('checkout')}}" class="btn btn-outline-primary  w-100">Xem
                                                gi??? h??ng</a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="cart-popup"><a href="#signin"><i class="fa fa-sign-in"
                                        aria-hidden="true"></i></a>
                                <div class="cart-box" style="width: 200px;">
                                    <div class="popup-container">
                                        @if(Auth::guard('customer')->check())
                                        <div class="subtotal" style="color: #000;">
                                            <a
                                                href="{{ route('setting.edit',Auth::guard('customer')->user()->id)}}">{{ Auth::guard('customer')->user()->name }}</a>
                                        </div>
                                        <div class="subtotal" style="color: #000;">
                                            <a href="{{route('reset.edit',Auth::guard('customer')->user()->id )}}">?????i
                                                M???t Kh???u</a>
                                        </div>
                                        <div class="subtotal" style="color: #000;">
                                            <a href="{{ route('Mycart') }}">????n H??ng c???a t??i</a>
                                        </div>

                                        <div class="price-s" style="color: #000;">
                                            <a href="{{ route('logout_user') }}">
                                                Logout
                                            </a>
                                        </div>
                                        @else
                                        <div class="price-s" style="color: #000;">
                                            <a href="{{ route('login_user') }}">Login</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('sell_step') }}" class=""><button
                                        class="btn btn-outline-primary btn-sm">B??o H???ng</button></a>

                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gi???a -->
    @yield('main')
    <!-- LOGIN -->


    <!-- END LOGIN -->
    <!------ Footer Section Start ------>
    <!---- Go To Top---->
    <span class="gotop"><img src="images/goto.png" alt=""></span>
    @include('user.layout.footer')
    <!--Main js file Style-->
    @yield('js')
    <script type="text/javascript">
    $(document).ready(function() {
        function load_comment() {
            $.ajax({
                url: "{{url('/')}}",
                method: "POST",
                data: {
                    query: query,
                    _token: _token
                },
                success: function(data) {
                    $('#search_ajax').fadeIn();
                    $('#search_ajax').html(data);
                }
            });
        }
    });
    </script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/jquery.js"></script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/popper.js"></script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/plugin/magnific/jquery.magnific-popup.min.js">
    </script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/plugin/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{url('public/fontend')}}/js/plugin/nice_select/jquery.nice-select.min.js">
    </script>
    <!----------Revolution slider start---------->
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.extension.actions.min.js"></script>
    <script type="text/javascript"
        src="{{url('public/fontend')}}/js/plugin/revolution/js/revolution.addon.slicey.min.js"></script>
    <!----------Revolution slider start---------->
    <script type="text/javascript" src="{{url('public/fontend')}}/js/custom.js"></script>
    <!--Main js file End-->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102250355624592");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- end -->
    <script>
    window.MBID = "xtVjOkTEi";
    </script>
    <script defer src="https://menu.metu.vn/static/js/sdk.js?container=body"></script>
    <script type="text/javascript">
    $(function() {

        $(document).on({
            mouseover: function(event) {
                $(this).find('.far').addClass('star-over');
                $(this).prevAll().find('.far').addClass('star-over');
            },
            mouseleave: function(event) {
                $(this).find('.far').removeClass('star-over');
                $(this).prevAll().find('.far').removeClass('star-over');
            }
        }, '.rate');


        $(document).on('click', '.rate', function() {
            if (!$(this).find('.star').hasClass('rate-active')) {
                $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
                $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
                $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
            } else {
                console.log('has');
            }
        });

    });
    </script>
    <script type="text/javascript">
    $(function() {

        $(document).on({
            mouseover: function(event) {
                $(this).find('.far').addClass('star-over');
                $(this).prevAll().find('.far').addClass('star-over');
            },
            mouseleave: function(event) {
                $(this).find('.far').removeClass('star-over');
                $(this).prevAll().find('.far').removeClass('star-over');
            }
        }, '.rate');


        $(document).on('click', '.rate', function() {
            if (!$(this).find('.star').hasClass('rate-active')) {
                $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
                $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
                $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
            } else {
                console.log('has');
            }
        });

    });
    </script>
</body>

</html> -->
