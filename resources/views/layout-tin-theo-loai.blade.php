<?php
    use App\Models\tintuc as Tin;
    use App\Models\theloai as TheLoai;
    use App\Models\loaitin as LoaiTin;
    use App\Models\tags as Tags;
    use App\Models\ykien as Ykien;
?>

@extends('layout')
@section('noidungchinh')

    @include('./Component/tin-trong-loai')

@endsection

