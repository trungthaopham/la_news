

<!DOCTYPE html>
<html lang="en">
<head>
<title>Tin Tức</title>
<base href="{{asset('/')}}">
<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<!-- Css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-icons.css" />
<link rel="stylesheet" href="css/style.css" />

<!-- Favicons -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Lazyload (must be placed in head in order to work) -->
<script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light style-default style-rounded">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
    <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
    @include('./Component/top-header-over')
<!-- end sidenav -->

<main class="main oh" id="main">

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
    <div class="container">
        {{-- top menu --}}
        @include('./Component/top-header')
        {{-- end top menu --}}
    </div>
    </div> <!-- end top bar -->

    <!-- Navigation -->
    <header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">
        <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
            <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
            </span>
            </button>

            <!-- Logo -->
            <a href="./" class="logo">
            <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
            </a>

            <!-- Nav-wrap -->
            @include('./Component/menu')
            <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right">

            <!-- Search -->
            <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                <form class="nav__search-form">
                    <input type="text" placeholder="Search an article" class="nav__search-input">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                    <i class="ui-search nav__search-icon"></i>
                    </button>
                </form>
                </div>
            </div>

            </div> <!-- end nav right -->

        </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
    </header> <!-- end navigation -->


    <!-- Trending Now -->


    <!-- Featured Posts Grid -->
    @yield('tinmoibanner')
    <!-- end featured posts grid -->

    <div class="main-container container pt-24" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content">

        <!-- Latest News -->
            @yield('noidungchinh')
        <!-- end latest news -->

        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">

        <!-- Widget Popular Posts -->
        <aside class="widget widget-popular-posts">
            @include('./Component/tin-noi-bac')
        </aside>
        <!-- end widget popular posts -->

        <!-- Widget Newsletter -->
        <aside class="widget widget_mc4wp_form_widget">
            <h4 class="widget-title">Theo dõi</h4>
            <p class="newsletter__text">
            <i class="ui-email newsletter__icon"></i>
            Theo dỏi để nhận được thông báo khi có tin mới nhất
            </p>
            <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <div class="form-group">
                <input type="email" name="EMAIL" placeholder="Nhập địa chỉ email của bạn" required="">
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-lg btn-color" value="Đăng ký">
                </div>
            </div>
            </form>
        </aside> <!-- end widget newsletter -->

        <!-- Widget Socials ------------------------------------------------------------------------>
        {{-- <aside class="widget widget-socials">
            <h4 class="widget-title">Let's hang out on social</h4>
            <div class="socials socials--wide socials--large">
            <div class="row row-16">
                <div class="col">
                <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                    <i class="ui-facebook"></i>
                    <span class="social__text">Facebook</span>
                </a><!--
                --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                    <i class="ui-twitter"></i>
                    <span class="social__text">Twitter</span>
                </a><!--
                --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                    <i class="ui-youtube"></i>
                    <span class="social__text">Youtube</span>
                </a>
                </div>
                <div class="col">
                <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                    <i class="ui-google"></i>
                    <span class="social__text">Google+</span>
                </a><!--
                --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                    <i class="ui-instagram"></i>
                    <span class="social__text">Instagram</span>
                </a><!--
                --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                    <i class="ui-rss"></i>
                    <span class="social__text">Rss</span>
                </a>
                </div>
            </div>
            </div>
        </aside>  --}}
        <!-- end widget socials -->

        </aside> <!-- end sidebar -->

    </div> <!-- end content -->



    <!-- Carousel posts -->
    @yield('tinmoislider')
    <!-- end carousel posts -->


    <!-- Posts from categories -->
    <section class="section mb-0">
        <div class="row">
    @yield('tin-theo-loai')
    <!-- end posts from categories -->
        </div>
</section>
    <!-- Video posts -->
    {{-- @yield('videos') --}}
    <!-- end video posts -->


    <!-- Content Secondary -->
    @yield('content_catalog')
    <!-- content secondary -->


    </div> <!-- end main container -->

    <!-- Footer -->
    @include('footer')
    <!-- end footer -->

    <div id="back-to-top">
    <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/owl-carousel.min.js"></script>
<script src="js/flickity.pkgd.min.js"></script>
<script src="js/twitterFetcher_min.js"></script>
<script src="js/jquery.newsTicker.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
