<?php
    use App\Models\theloai as Theloai;
    use App\Models\loaitin as Loaitin;
    $listTheLoai = TheLoai::where('AnHien',1)
    ->where('lang','vi')
    ->get();
    // echo $listTheLoai;
?>
<nav class="flex-child nav__wrap d-none d-lg-block">
    <ul class="nav__menu">
        @foreach($listTheLoai as $theLoai)
        <li class="nav__dropdown">
        <a href="./">{{$theLoai->TenTL}}</a>
        <?php
            $listLoaiTin = Loaitin::where('idTL',$theLoai->idTL)->get();
        ?>
        @if($listLoaiTin != '')
            <ul class="nav__dropdown-menu">
                @foreach($listLoaiTin as $loaiTin)
                    <li><a href="./">{{$loaiTin->Ten}}</a></li>
                @endforeach

            </ul>
        @else

        @endif

        </li>
        @endforeach
        <li><a href="/lienhe">Liên Hệ</a></li>
    </ul> <!-- end menu -->
    </nav>
