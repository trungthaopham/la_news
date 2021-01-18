<!DOCTYPE html>
<html lang="en">
<head>
<title>Deus | Home 1 Default</title>

<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

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
            <a href="index.html" class="logo">
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
    <div class="container">
    <div class="trending-now">
        <span class="trending-now__label">
        <i class="ui-flash"></i>
        <span class="trending-now__text d-lg-inline-block d-none">Newsflash</span>
        </span>
        <div class="newsticker">
        <ul class="newsticker__list">
            <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">A-HA theme is multi-purpose solution for any kind of business</a></li>
            <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">Satelite cost tens of millions or even hundreds of millions of dollars to build</a></li>
            <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">8 Hidden Costs of Starting and Running a Business</a></li>
        </ul>
        </div>
        <div class="newsticker-buttons">
        <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
        <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
    </div>
    </div>

    <!-- Featured Posts Grid -->
    <section class="featured-posts-grid">
    <div class="container">
        <div class="row row-8">

        <div class="col-lg-6">

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_1.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/hero/hero_post_1.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">World</a>
                </div>

                <div class="entry__body post-list__body card__body">
                <h2 class="entry__title">
                    <a href="single-post.html">3 Founders With Booming Businesses Share Stories About Their Difficult Early</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
            </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_2.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/hero/hero_post_2.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">Fashion</a>
                </div>

                <div class="entry__body post-list__body card__body">
                <h2 class="entry__title">
                    <a href="single-post.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
            </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_3.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/hero/hero_post_3.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">Business</a>
                </div>

                <div class="entry__body post-list__body card__body">
                <h2 class="entry__title">
                    <a href="single-post.html">These Are the 20 Best Places to Work in 2018</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
            </article>
            </div> <!-- end post -->

        </div> <!-- end col -->

        <div class="col-lg-6">

            <!-- Large post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
            <article class="entry card featured-posts-grid__entry">
                <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                    <img src="img/content/hero/hero_post_4.jpg" alt="" class="entry__img">
                </a>
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">Lifestyle</a>
                </div>

                <div class="entry__body card__body">
                <h2 class="entry__title">
                    <a href="single-post.html">What Days and Hours are PH Online Shoppers Most Likely to Buy?</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
            </article>
            </div> <!-- end large post -->
        </div>

        </div>
    </div>
    </section> <!-- end featured posts grid -->

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
            <h4 class="widget-title">Newsletter</h4>
            <p class="newsletter__text">
            <i class="ui-email newsletter__icon"></i>
            Subscribe for our daily news
            </p>
            <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <div class="form-group">
                <input type="email" name="EMAIL" placeholder="Your email" required="">
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                </div>
            </div>
            </form>
        </aside> <!-- end widget newsletter -->

        <!-- Widget Socials -->
        <aside class="widget widget-socials">
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
        </aside> <!-- end widget socials -->

        </aside> <!-- end sidebar -->

    </div> <!-- end content -->

    <!-- Ad Banner 728 -->
    <div class="text-center pb-48">
        <a href="#">
        <img src="img/content/placeholder_728.jpg" alt="">
        </a>
    </div>

    <!-- Carousel posts -->
    @yield('tinmoislider')
    <!-- end carousel posts -->


    <!-- Posts from categories -->
    @yield('tin-theo-loai')
    <!-- end posts from categories -->

    <!-- Video posts -->
    <section class="section mb-24">
        <div class="title-wrap title-wrap--line">
        <h3 class="section-title">Videos</h3>
        <a href="#" class="all-posts-url">View All</a>
        </div>
        <div class="row card-row">
        <div class="col-md-6">
            <article class="entry card">
            <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                <div class="thumb-container thumb-65">
                    <img data-src="img/content/grid/grid_post_5.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                </div>
                </a>
                <div class="entry__play-time"><i class="ui-play"></i>3:21</div>
            </div>

            <div class="entry__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">What Days and Hours are PH Online Shoppers Most Likely to Buy?</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="entry card">
            <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                <div class="thumb-container thumb-65">
                    <img data-src="img/content/grid/grid_post_6.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                </div>
                </a>
                <div class="entry__play-time"><i class="ui-play"></i>3:21</div>
            </div>

            <div class="entry__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">Want to work at Tesla? This program guarantees you a job after graduation</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>
        </div>
        </div>
    </section> <!-- end video posts -->


    <!-- Content Secondary -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-72">

        <!-- Worldwide News -->
        <section class="section">
            <div class="title-wrap title-wrap--line">
            <h3 class="section-title">Worldwide</h3>
            <a href="#" class="all-posts-url">View All</a>
            </div>

            <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_1.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/list/list_post_1.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">Business</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">These Are the 20 Best Places to Work in 2018</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>

            <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_2.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/list/list_post_2.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">Fashion</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">This Co-Working Space is a One-Stop Shop</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>

            <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_3.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/list/list_post_3.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">Mining</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">This 6-Year-Old Kid Reportedly Earned US$11 Million on YouTube</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>

            <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_4.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/list/list_post_4.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">World</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">Rating Agency Breaks with Financial Community </a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>

            <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_5.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/list/list_post_5.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--red">Investment</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">Decentralized Exchanges (DEX) – What Are They?</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>

            <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/list/list_post_6.jpg)">
                <a href="single-post.html" class="thumb-url"></a>
                <img src="img/content/list/list_post_6.jpg" alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--cyan">Technology</a>
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="single-post.html">Decentralized Exchanges (DEX) – What Are They?</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
            </div>
            </article>
        </section> <!-- end worldwide news -->

        <!-- Pagination -->
        <nav class="pagination">
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
        </nav>

        </div> <!-- end posts -->

        <!-- Sidebar 1 -->
        <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

        <!-- Widget Ad 300 -->
        <aside class="widget widget_media_image">
            <a href="#">
            <img src="img/content/placeholder_336.jpg" alt="">
            </a>
        </aside> <!-- end widget ad 300 -->

        <!-- Widget Categories -->
        <aside class="widget widget_categories">
            <h4 class="widget-title">Categories</h4>
            <ul>
            <li><a href="categories.html">World <span class="categories-count">5</span></a></li>
            <li><a href="categories.html">Lifestyle <span class="categories-count">7</span></a></li>
            <li><a href="categories.html">Business <span class="categories-count">5</span></a></li>
            <li><a href="categories.html">Fashion <span class="categories-count">8</span></a></li>
            <li><a href="categories.html">Investment <span class="categories-count">10</span></a></li>
            <li><a href="categories.html">Technology <span class="categories-count">6</span></a></li>
            </ul>
        </aside> <!-- end widget categories -->

        <!-- Widget Recommended (Rating) -->
        <aside class="widget widget-rating-posts">
            <h4 class="widget-title">Recommended</h4>
            <article class="entry">
            <div class="entry__img-holder">
                <a href="single-post.html">
                <div class="thumb-container thumb-60">
                    <img data-src="img/content/review/review_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
                </a>
            </div>

            <div class="entry__body">
                <div class="entry__header">

                <h2 class="entry__title">
                    <a href="single-post.html">UN’s WFP Building Up Blockchain-Based Payments System</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                <ul class="entry__meta">
                    <li class="entry__meta-rating">
                    <i class="ui-star"></i><!--
                    --><i class="ui-star"></i><!--
                    --><i class="ui-star"></i><!--
                    --><i class="ui-star"></i><!--
                    --><i class="ui-star-empty"></i>
                    </li>
                </ul>
                </div>
            </div>
            </article>
            <article class="entry">
            <div class="entry__img-holder">
                <a href="single-post.html">
                <div class="thumb-container thumb-60">
                    <img data-src="img/content/review/review_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
                </a>
            </div>

            <div class="entry__body">
                <div class="entry__header">

                <h2 class="entry__title">
                    <a href="single-post.html">4 credit card tips to make business travel easier</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">DeoThemes</a>
                    </li>
                    <li class="entry__meta-date">
                    Jan 21, 2018
                    </li>
                </ul>
                <ul class="entry__meta">
                    <li class="entry__meta-rating">
                    <i class="ui-star"></i><!--
                    --><i class="ui-star"></i><!--
                    --><i class="ui-star"></i><!--
                    --><i class="ui-star"></i><!--
                    --><i class="ui-star-empty"></i>
                    </li>
                </ul>
                </div>
            </div>
            </article>
        </aside> <!-- end widget recommended (rating) -->
        </aside> <!-- end sidebar 1 -->
    </div> <!-- content secondary -->


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
