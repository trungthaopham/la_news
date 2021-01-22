
<ul class="breadcrumbs">
    <li class="breadcrumbs__item">
      <a href="./" class="breadcrumbs__url">Trang chủ</a>
    </li>
    <li class="breadcrumbs__item">
      <a href="./ttl/{{$idTL}}" class="breadcrumbs__url">{{ $TenTL }}</a>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
        {{ $TenLT }}
    </li>
  </ul>
<div class="col-lg-12 blog__content mb-72">
    <!-- Worldwide News -->
    <section class="section">
        <div class="title-wrap title-wrap--line">
        <h3 class="section-title">{{ $TenLT }}</h3>
        <a href="#" class="all-posts-url">Tất cả</a>
        </div>

        <?php
            $arrayColor= array("blue","purple","orange","violet","red","cyan");
        ?>
        @foreach($listtin as $item)
        <article class="entry card post-list">
        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo $item->urlHinh = ($item->urlHinh != "") ? $item->urlHinh :"img/unnamed.jpg" ?>)">
            <a href="./ctt/{{$item->idTin}}" class="thumb-url"></a>
            <img src="{{$item->urlHinh}}" onerror="this.src='img/unnamed.jpg'" alt="" class="entry__img d-none">
            <a href="./ttl/{{$idTL}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--{{Arr::random($arrayColor)}}">{{$TenLT}}</a>
        </div>

        <div class="entry__body post-list__body card__body">
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
    {{ $listtin->links('./Component/phan-trang') }}
    <!-- Pagination -->


    </div>
