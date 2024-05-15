<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Headersolusi;
use App\Models\PaketHarga;
use App\Models\Solusi;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends BaseController
{
    public function index()
    {
        $solusi = new Solusi();
        $headsolusi = new Headersolusi();

        $data =[
            'solusi'=> $solusi->findAll(),
        ];
        $head = $headsolusi->findAll();
        return view('home',$data);
    }

    public function solusi()
    {
        $solusi = new Solusi();
        $headsolusi = new Headersolusi();
        $paketharga = new PaketHarga();

        $data =[
            'solusi'=> $solusi->findAll(),
            'paketharga'=>$paketharga->findAll(),
        ];
        $head = $headsolusi->findAll();

        return view('solusi',$data);
    }

    public function fitur()
    {
        return view('fitur');
    }

    public function detail_fitur()
    {
        return view('detail_fitur');
    }
}
