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
<?php  $idTL =3 ?>@include('./Component/tin-theo-loai')
<?php  $idTL =9 ?>@include('./Component/tin-theo-loai')
<?php  $idTL =6 ?>@include('./Component/tin-theo-loai')
<?php  $idTL =7 ?>@include('./Component/tin-theo-loai')
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
    <?php
    $listTin = Tin::where('AnHien', 1)
    ->where('tin.lang','vi')
    ->paginate(6);
    $arrayColor= array("blue","purple","orange","violet","red","cyan");
    $listTheLoai = TheLoai::select('idTL','tenTL')
        ->orderby('ThuTu','asc')
        ->where('AnHien','=','1')->where('lang','=','vi')
        ->get();

    $GroupIdTinByYkien= Ykien::select('idTin',Ykien::raw('count(*) as total'))
        ->groupBy('ykien.idTin')->orderby('total','desc')->limit(3)
        ->get();

    ?>
    @include('./Component/tin-catalog')
@endsection
