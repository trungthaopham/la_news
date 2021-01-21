<div class="container">
    <div class="trending-now">
        <span class="trending-now__label">
        <i class="ui-flash"></i>
        <span class="trending-now__text d-lg-inline-block d-none">Tin Nhanh</span>
        </span>
        <div class="newsticker">
        <ul class="newsticker__list">
            @foreach ($listTinMoiBanner as $item)
            <li class="newsticker__item"><a href="./ctt/{{$item->idTin}}" class="newsticker__item-url"><?=Str::limit($item->TomTat, 120, '...') ?></a></li>
            @endforeach

        </ul>
        </div>
        <div class="newsticker-buttons">
        <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
        <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
    </div>
    </div>
<section class="featured-posts-grid">
    <div class="container">
        <div class="row row-8">

        <div class="col-lg-6">

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{$listTinMoiBanner[0]->urlHinh}})">
                <a href="./ctt/{{$item->idTin}}" class="thumb-url"></a>
                <img src={{$listTinMoiBanner[0]->urlHinh}} alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$listTinMoiBanner[0]->Ten}}</a>
                </div>

                <div class="entry__body post-list__body card__body">
                <h2 class="entry__title">
                    <a href="./ctt/{{$item->idTin}}">{{$listTinMoiBanner[0]->TieuDe}}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">PhamThao</a>
                    </li>
                    <li class="entry__meta-date">
                        {{$listTinMoiBanner[0]->Ngay}}
                    </li>
                </ul>
                <p><?=Str::limit($listTinMoiBanner[0]->TomTat, 80, '...') ?></p>
                </div>
            </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{$listTinMoiBanner[1]->urlHinh}})">
                <a href="single-post.html" class="thumb-url"></a>
                <img src={{$listTinMoiBanner[1]->urlHinh}} alt="" class="entry__img d-none">
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">{{$listTinMoiBanner[1]->Ten}}</a>
                </div>

                <div class="entry__body post-list__body card__body">
                <h2 class="entry__title">
                    <a href="./ctt/{{$item->idTin}}">{{$listTinMoiBanner[1]->TieuDe}}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">HanhBui</a>
                    </li>
                    <li class="entry__meta-date">
                        {{$listTinMoiBanner[1]->Ngay}}
                    </li>
                </ul>
                <p><?=Str::limit($listTinMoiBanner[1]->TomTat, 80, '...') ?></p>
                </div>
            </article>
            </div> <!-- end post -->

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry card post-list featured-posts-grid__entry">
                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{$listTinMoiBanner[2]->urlHinh}})">
                <a href="single-post.html" class="thumb-url"></a>
                <img src={{$listTinMoiBanner[2]->urlHinh}} alt="" class="entry__img d-none">
                <a href="" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">{{$listTinMoiBanner[2]->Ten}}</a>
                </div>

                <div class="entry__body post-list__body card__body">
                <h2 class="entry__title">
                    <a href="./ctt/{{$item->idTin}}">{{$listTinMoiBanner[2]->TieuDe}}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">PhamThao</a>
                    </li>
                    <li class="entry__meta-date">
                        {{$listTinMoiBanner[2]->Ngay}}
                    </li>
                </ul>
                <p><?=Str::limit($listTinMoiBanner[2]->TomTat, 80, '...') ?></p>
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
                    <img src={{$listTinMoiBanner[3]->urlHinh}} alt="" class="entry__img">
                </a>
                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{$listTinMoiBanner[3]->Ten}}</a>
                </div>

                <div class="entry__body card__body">
                <h2 class="entry__title">
                    <a href="./ctt/{{$item->idTin}}">{{$listTinMoiBanner[3]->TieuDe}}</a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">HanhBui</a>
                    </li>
                    <li class="entry__meta-date">
                        {{$listTinMoiBanner[3]->Ngay}}
                    </li>
                </ul>
                <p><?=Str::limit($listTinMoiBanner[3]->TomTat, 100, '...') ?></p>
                </div>
            </article>
            </div> <!-- end large post -->
        </div>

        </div>
    </div>
    </section>
