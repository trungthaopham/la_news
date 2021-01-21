<?php
    use App\Models\tintuc as Tin;
    use App\Models\theloai as TheLoai;
    use App\Models\loaitin as LoaiTin;
    use App\Models\tags as Tags;
    use App\Models\ykien as Ykien;
?>

@extends('layout')
@section('noidungchinh')
    <?php
    $listTinMoi = Tin::where('NoiBat','=',1)
    ->orderby('Ngay','desc')
    ->where('tin.AnHien','=','1')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.lang','vi')
    ->offset(0)->limit(4)->get();
    $listTheLoai = TheLoai::where('theloai.AnHien','=','1')->limit(4)->get()
    ?>
    @include('./Component/tin-moi-theo-the-loai')
@endsection
@section('tinmoislider')
    @include('./Component/tin-moi-slider')
@endsection
@section('tin-theo-loai')
    @include('./Component/tin-theo-loai')
@endsection
@section('tinmoibanner')
    <?php
        $listTinMoiBanner = Tin::where('NoiBat','=',1)
        ->orderby('Ngay','desc')
        ->where('tin.AnHien','=','1')
        ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
        ->where('tin.lang','vi')
        ->offset(0)->limit(4)->get();
    ?>
    @include('./Component/tin-moi-banner')
@endsection
@section('videos')
    @include('./Component/videos')
@endsection
@section('content_catalog')
    @include('./Component/tin-catalog')
@endsection
