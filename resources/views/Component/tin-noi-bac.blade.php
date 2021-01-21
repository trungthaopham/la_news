<?php
use App\Models\tintuc as Tin;

$list = Tin::where('NoiBat','=',1)
        ->where('tin.AnHien','=','1')
        ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
        ->where('tin.lang','vi')
        ->offset(0)->limit(4)->get();
?>
    <h4 class="widget-title">Tin nổi bật</h4>
    <ul class="post-list-small">
    @foreach ($list as $item)
    <li class="post-list-small__item">
        <article class="post-list-small__entry clearfix">
        <div class="post-list-small__img-holder">
            <div class="thumb-container thumb-100">
            <a href="./ctt/{{$item->idTin}}">
                <img data-src='{{$item->urlHinh}}' onerror="this.src='img/unnamed.jpg'" src='{{$item->urlHinh}}' alt="" class="post-list-small__img--rounded lazyload">
            </a>
            </div>
        </div>
        <div class="post-list-small__body">
            <h3 class="post-list-small__entry-title">
            <a href="./ctt/{{$item->idTin}}">{{$item->TieuDe}}</a>
            </h3>
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
        </article>
    </li>
    @endforeach

    </ul>

