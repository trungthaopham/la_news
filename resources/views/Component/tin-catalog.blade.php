<?php
    use App\Models\loaitin as LoaiTin;
    use App\Models\tintuc as Tin;
?>
<div class="row">

    <!-- Posts -->
    <div class="col-lg-8 blog__content mb-72">

    <!-- Worldwide News -->
    <section class="section">
        <div class="title-wrap title-wrap--line">
        <h3 class="section-title">Tin Tức</h3>
        <a href="#" class="all-posts-url">Tất Cả</a>
        </div>
        @foreach($listTin as $item)
        <?php
            $idLT = $item->idLT;
            $TenLT= LoaiTin::where('loaitin.idLT',$idLT)->value('Ten');
        ?>
        <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder post-list__img-holder_home card__img-holder" style="background-image: url(<?php echo $item->urlHinh = ($item->urlHinh != "") ? $item->urlHinh :"img/unnamed.jpg" ?>)">
                <a href="./ctt/{{$item->idTin}}" class="thumb-url"></a>
                <img src="{{$item->urlHinh}}" onerror="this.src='img/unnamed.jpg'" alt="" class="entry__img d-none">
                <a href="./ttl/{{$item->idTL}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--{{Arr::random($arrayColor)}}">{{$TenLT}}</a>
            </div>

            <div class="entry__body post-list__body post-list__body_home card__body">
                <div class="entry__header">
                <h2 class="entry__title">
                    <a href="./ctt/{{$item->idTin}}">{{$item->TieuDe}}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>bởi</span>
                    <a href="#">HanhBui</a>
                    </li>
                    <li class="entry__meta-date">
                        {{$item->Ngay}}
                    </li>
                </ul>
                </div>
                <div class="entry__excerpt">
                <p><?=Str::limit($item->TomTat, 300, '...') ?></p>
                </div>
            </div>
            </article>
        @endforeach
    </section> <!-- end worldwide news -->
    <!-- Pagination -->
    {{ $listTin->links('./Component/phan-trang-home') }}

    </div> <!-- end posts -->

    <!-- Sidebar 1 -->
    <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

    <!-- Widget Ad 300 -->
    <aside class="widget widget_media_image">
        <a href="#">
        <img src="https://lh3.googleusercontent.com/proxy/ej2sf42j_c322nT5XuOdTTYj9TODC3iCpyGc2UlrfGDWat2iP8kQsnU3EMdiORY3u2z-y8Q7vM0mcmoNIZXwUDhenqNl_HghEv-GRNF4jnmvUGxsgSRbzb-OFKtyt-BnEsvFgP-H_iDv" alt="">
        </a>
    </aside> <!-- end widget ad 300 -->

    <!-- Widget Categories -->
    <aside class="widget widget_categories">
        <h4 class="widget-title">Danh mục</h4>
        <ul>
            @foreach($listTheLoai as $item)
                <?php
                    $count = LoaiTin::where('loaitin.idTL',$item->idTL)->count();
                ?>
                <li><a href="./ttl/{{$item->idTL}}">{{$item->tenTL}} <span class="categories-count">{{$count}}</span></a></li>
            @endforeach
        </ul>
    </aside> <!-- end widget categories -->

    <!-- Widget Recommended (Rating) -->
    <aside class="widget widget-rating-posts">
        <h4 class="widget-title">Tin được quan tâm nhiều</h4>
        @foreach($GroupIdTinByYkien as $item)
            <?php
                $Tin = Tin::where('tin.idTin',$item->idTin)->where('tin.AnHien', 1)
            ->first();
            ?>
        <article class="entry">
        <div class="entry__img-holder">
            <a href="./ctt/{{$Tin->idTin}}">
            <div class="thumb-container thumb-60">
                <img data-src="{{$Tin->urlHinh}}" src="{{$Tin->urlHinh}}" class="entry__img lazyload" alt="">
            </div>
            </a>
        </div>

        <div class="entry__body">
            <div class="entry__header">

            <h2 class="entry__title">
                <a href="./ctt/{{$Tin->idTin}}">{{$Tin->TieuDe}}</a>
            </h2>
            <ul class="entry__meta">
                <li class="entry__meta-author">
                <span>bởi</span>
                <a href="#">PhamThao</a>
                </li>
                <li class="entry__meta-date">
                    {{$Tin->Ngay}}
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
        @endforeach
    </aside> <!-- end widget recommended (rating) -->
    </aside> <!-- end sidebar 1 -->
</div>
