<?php
use App\Models\tintuc as Tin;

$list = Tin::where('NoiBat','=',1)
        ->where('tin.AnHien','=','1')
        ->orderby('Ngay','asc')
        ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
        ->where('tin.lang','vi') //->inRandomOrder()
        ->limit(2)->get();
?>
<aside class="widget widget-popular-posts">
                <h4 class="widget-title">Bài Viết Phổ Biến</h4>
                <ul class="post-list-small">
                @foreach($list as $l)
                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-100">
                        <a href="single-post.html">
                            <img data-src="{{$l->urlHinh}}" onerror="this.src='img/unnamed.jpg'" src="{{$l->urlHinh}}" alt="" class="post-list-small__img--rounded lazyload">
                        </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">{{$l->TieuDe}}</a>
                        </h3>
                        <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#">HanhBui</a>
                        </li>
                        <li class="entry__meta-date">
                            {{date('d m Y',strtotime($l->Ngay))}}
                        </li>
                        </ul>
                    </div>
                    </article>
                </li>
                @endforeach


                </ul>
            </aside>
