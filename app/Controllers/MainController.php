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

        $data = [
            'solusi' => $solusi->findAll(),
            'artikel' => $artikel->findAll(),
            'headartikel' => $headartikel->findAll(),
            'headsolusi' => $headsolusi->findAll(),
            'banner' => $banner->findAll(),
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
        return view('detail_fitur');
    }

    public function tentangkami()
    {
        $tentangkami = new Tentangkami();

        $data = [
            'tentangkami' => $tentangkami->findAll(),
        ];

        return view('tentangkami', $data);
    }
}
