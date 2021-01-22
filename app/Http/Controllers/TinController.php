<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use DB;
use App\Models\tintuc as Tin;
use App\Models\theloai as TheLoai;
use App\Models\loaitin as LoaiTin;


class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("index");
    }

    public function tintrongloai($idLT, $pageNum = 1)
    {
        settype($idLT, 'int');
        $listTin = Tin::where('idLT', $idLT)
            ->where('AnHien', 1)
            ->paginate(7);
        $tenLT = LoaiTin::where('idLT', $idLT)
            ->value('Ten');
        $idTL = LoaiTin::where('idLT', $idLT)
            ->value('idTL');
        $tenTL = TheLoai::where('idTL', $idTL)
            ->value('TenTL');
        $data = ['listtin' => $listTin, 'idTL' => $idTL, 'TenTL' => $tenTL, 'idLT' => $idLT, 'TenLT' => $tenLT];
        return view('layout-tin-theo-loai', $data);
    }

    public function chitiettin($id)
    {
        $kq = DB::table('tin')
            ->join('loaitin', 'loaitin.idLT', 'tin.idLT')
            ->where('idTin', $id)
            ->where('tin.AnHien', 1)
            ->first(); // lấy kết quả đầu tiên ....
        if ($kq == null) {
            echo 'không tồn tại tin này';
            return;
        }
        $kq->tags = explode(',', $kq->tags);
        $data = ['tin' => $kq];
        return view('layout-tin', $data);
    }
    public function lienhe()
    {
        $d = array('title' => 'Liên hệ');
        return view('./Component/lien-he', $d);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
