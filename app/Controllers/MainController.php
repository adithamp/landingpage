<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Fitur;
use App\Models\Headersolusi;
use App\Models\PaketHarga;
use App\Models\Solusi;
use App\Models\Artikel;
use App\Models\HeadArtikel;
use App\Models\Tentangkami;
use App\Models\Baner;
use App\Models\Detailfitur;
use App\Models\Headeraboutus;
use App\Models\Layout;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends BaseController
{
    public function index()
    {
        $solusi = new Solusi();
        $headsolusi = new Headersolusi();
        $headartikel = new HeadArtikel();
        $artikel = new Artikel();
        $banner = new Baner();
        $layout = new Layout();

        $data = [
            'solusi' => $solusi->findAll(),
            'artikel' => $artikel->findAll(),
            'headartikel' => $headartikel->findAll(),
            'headsolusi' => $headsolusi->findAll(),
            'banner' => $banner->findAll(),
            'layout' => $layout->findAll(),

        ];
        $head = $headsolusi->findAll();
        return view('home', $data);
    }

    public function solusi()
    {
        $solusi = new Solusi();
        $headsolusi = new Headersolusi();
        $paketharga = new PaketHarga();

        $data = [
            'solusi' => $solusi->findAll(),
            'paketharga' => $paketharga->findAll(),
            'headsolusi' => $headsolusi->findAll(),
        ];
        $head = $headsolusi->findAll();

        return view('solusi', $data);
    }

    public function fitur()
    {
        $fitur = new Fitur();
        $headsolusi = new Headersolusi();

        $data = [
            'fitur' => $fitur->findAll(),
        ];
        $head = $headsolusi->findAll();

        return view('fitur', $data);
    }

    public function detail_fitur()
    {
        $layout = new Layout();
        $detail_fitur = new Detailfitur();

        $data = [
            'layout' => $layout->findAll(),
            'detailfitur' =>$detail_fitur->findAll(),
        ];

        return view('detail_fitur',$data);
    }

    public function tentangkami()
    {
        $tentangkami = new Tentangkami();
        $headaboutus = new Headeraboutus();

        $data = [
            'tentangkami' => $tentangkami->findAll(),
            'headeraboutus' => $headaboutus->findAll(),
        ];
        

        return view('tentangkami', $data);
    }

    public function privacy()
    {
        return view('privacypolicy');
    }

    public function terms()
    {
        return view('termcondition');
    }
}
