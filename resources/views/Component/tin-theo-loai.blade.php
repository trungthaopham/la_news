<?php
    use App\Models\tintuc as Tin;
    use App\Models\theloai as TheLoai;
    use App\Models\loaitin as LoaiTin;

    $TenTL = TheLoai::where("idTL",$idTL)->value("TenTL");
    $tin = Tin::join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
    ->where('tin.idTL','=',$idTL)
    ->offset(0)->limit(5)->get();
?>


    <!-- Technology -->
    <div class="col-md-6">
        <div class="title-wrap title-wrap--line">
        <h3 class="section-title"><?=$TenTL?></h3>
        </div>
        <div class="row">
        <div class="col-lg-6">
            <article class="entry thumb thumb--size-2">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?= $tin[0]->urlHinh?>');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder thumb-text-holder--1">
                <h2 class="thumb-entry-title">
                    <a href="single-post.html"><?= $tin[0]->TieuDe?></a>
                </h2>
                <ul class="entry__meta">
                    <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">PhamThao</a>
                    </li>
                    <li class="entry__meta-date">
                        <?= $tin[0]->Ngay?>
                    </li>
                </ul>
                </div>
                <a href="single-post.html" class="thumb-url"></a>
            </div>
            </article>
        </div>
        <div class="col-lg-6">
            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                    <a href="single-post.html"><?= $tin[1]->TieuDe?></a>
                    </h3>
                </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                    <a href="single-post.html"><?= $tin[2]->TieuDe?></a>
                    </h3>
                </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                    <a href="single-post.html"><?= $tin[3]->TieuDe?></a>
                    </h3>
                </div>
                </article>
            </li>
            <li class="post-list-small__item">
                <article class="post-list-small__entry">
                <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                    <a href="single-post.html"><?= $tin[4]->TieuDe?></a>
                    </h3>
                </div>
                </article>
            </li>
            </ul>
        </div>
        </div>
    </div> <!-- end technology -->


