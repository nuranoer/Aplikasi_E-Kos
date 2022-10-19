<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\kamarModel;
use App\Models\penghuniModel;
use App\Models\pembayaranModel;
use App\Models\pemesananModel;
use App\Models\komplainModel;


class PageController extends BaseController
{
    public function index()
    {
        $kamar = new kamarModel();
        $penghuni = new penghuniModel();
        $pembayaran = new pembayaranModel();
        $pemesanan = new pemesananModel();
        $komplain = new komplainModel();
        $data['jumlah_kamar'] = $kamar->countAll();
        $data['jumlah_penghuni'] = $penghuni->countAll();
        $data['jumlah_pembayaran'] = $pembayaran->countAll();
        $data['jumlah_pemesanan'] = $pemesanan->countAll();
        $data['jumlah_komplain'] = $komplain->countAll();
        return view('admin/dashboard', $data);
    }
}
