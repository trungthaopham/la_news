<?php
    use App\Models\tintuc as Tin;
    use App\Models\loaitin as LoaiTin;
?>
<section class="section tab-post mb-16">
    <div class="title-wrap title-wrap--line">
    <h3 class="section-title">Tin mới</h3>

    <div class="tabs tab-post__tabs">
        <ul class="tabs__list">
        <li class="tabs__item tabs__item--active">
            <a href="#tab-all" class="tabs__trigger">Tất Cả</a>
        </li>
        @foreach ($listTheLoai as $item)
            <li class="tabs__item">
                <a href="#tab-world{{$item->idTL}}" class="tabs__trigger">{{$item->TenTL}}</a>
            </li>
        @endforeach

        </ul> <!-- end tabs -->
    </div>
    </div>

    <!-- tab content -->
    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

    <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
        <div class="row card-row">
            @foreach ($listTinMoi as $item)
            <div class="col-md-6">
                <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="single-post.html">
                    <div class="thumb-container thumb-70">
                        <img data-src='{{$item->urlHinh}}' src='{{$item->urlHinh}}' class="entry__img lazyload" alt="" />
                    </div>
                    </a>
                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$item->Ten}}</a>
                </div>

                <div class="entry__body card__body">
                    <div class="entry__header">

                    <h2 class="entry__title">
                        <a href="single-post.html">{{$item->TieuDe}}</a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">PhamThao</a>
                        </li>
                        <li class="entry__meta-date">
                            {{$item->Ngay}}
                        </li>
                    </ul>
                    </div>
                    <div class="entry__excerpt">
                    <p><?=Str::limit($item->TomTat, 120, '...') ?></p>
                    </div>
                </div>
                </article>
            </div>
            @endforeach


        </div>
    </div> <!-- end pane 1 -->

    @foreach ($listTheLoai as $item)
    <div class="tabs__content-pane" id="tab-world{{$item->idTL}}">
        <div class="row card-row">
            <?php
                $listTinTheoTheLoai = Tin::where('idTL',$item->idTL)
                ->offset(0)
                ->limit(4)->orderby('Ngay','desc')->get();
            ?>
            @foreach ($listTinTheoTheLoai as $item)
            <?php
                $tenLoaiTin = LoaiTin::select('Ten')->where('idLT',$item->idLT)->get();
            ?>
            <div class="col-md-6">
                <article class="entry card">
                <div class="entry__img-holder card__img-holder">
                    <a href="single-post.html">
                    <div class="thumb-container thumb-70">
                        <img data-src='{{$item->urlHinh}}' src='{{$item->urlHinh}}' class="entry__img lazyload" alt="" />
                    </div>
                    </a>
                    <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">{{$tenLoaiTin[0]['Ten']}}</a>
                </div>

                <div class="entry__body card__body">
                    <div class="entry__header">
                    <h2 class="entry__title">
                        <a href="single-post.html">{{$item->TieuDe}}</a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">HanhBui</a>
                        </li>
                        <li class="entry__meta-date">
                            {{$item->Ngay}}
                        </li>
                    </ul>
                    </div>
                    <div class="entry__excerpt">
                    <p><?=Str::limit($item->TomTat, 120, '...') ?></p>
                    </div>
                </div>
                </article>
            </div>
            @endforeach


        </div>
    </div>
    @endforeach
    <!-- end pane 2 -->


    </div> <!-- end tab content -->
</section>
