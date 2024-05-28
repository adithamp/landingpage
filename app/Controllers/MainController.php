<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Fitur;
use App\Models\Footer;
use App\Models\Headersolusi;
use App\Models\KontakUser;
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
        $footer = new Footer();
        $data = [
            'solusi' => $solusi->findAll(),
            'artikel' => $artikel->findAll(),
            'headartikel' => $headartikel->findAll(),
            'headsolusi' => $headsolusi->findAll(),
            'banner' => $banner->findAll(),
            'layout' => $layout->findAll(),
            'footer' => $footer->findAll()

        ];
        $head = $headsolusi->findAll();
        return view('home', $data);
    }

    public function solusi()
    {
        $solusi = new Solusi();
        $headsolusi = new Headersolusi();
        $paketharga = new PaketHarga();
        $footer = new Footer();

        $solutions = $solusi->findAll();
        $groupedHarga = [];
        foreach($solutions as $solution):
            $prices = $paketharga->where('id_solusi',$solution['id'])->findAll();
            $groupedHarga[$solution['id']] = $prices;
        endforeach;

        $data = [
            'solusi' => $solusi->findAll(),
            'paketharga' => $groupedHarga,
            'headsolusi' => $headsolusi->findAll(),
            'footer' => $footer->findAll(),
        ];
        $head = $headsolusi->findAll();

        return view('solusi', $data);
    }

    public function fitur($id)
    {
        $fitur = new Fitur();
        $footer = new Footer();
        $data = [
            // 'fitur' => $fitur->findAll(),
            'fitur' => $fitur->where('id_solusi' , $id )->findAll(),
            'footer' => $footer->findAll()
        ];
        // dd($data);

        return view('fitur', $data);
    }

    public function detail_fitur($id)
    {
        $layout = new Layout();
        $detail_fitur = new Detailfitur();
        $footer = new Footer();
        $data = [
            'layout' => $layout->findAll(),
            'detailfitur' =>$detail_fitur->where('id_fitur' , $id )->findAll(),
            'footer' => $footer->findAll()
        ];

        return view('detail_fitur',$data);
    }

    public function tentangkami()
    {
        $tentangkami = new Tentangkami();
        $headaboutus = new Headeraboutus();
        $footer = new Footer();
        $data = [
            'tentangkami' => $tentangkami->findAll(),
            'headeraboutus' => $headaboutus->findAll(),
            'footer' => $footer->findAll()
        ];
        

        return view('tentangkami', $data);
    }

    public function privacy()
    {
        $footer = new Footer();
        $data = [
            'footer' => $footer->findAll()
        ];
        return view('privacypolicy',$data);
    }

    public function terms()
    {
        $footer = new Footer();
        $data = [
            'footer' => $footer->findAll()
        ];
        return view('termcondition',$data);
    }

    public function ajukan_page_solusi()
    {
        $kontak = new KontakUser();
        $kontak->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'pesan' => $this->request->getPost('pesan'),
        ]);

        return redirect()->back()->to('/solusi');
    }
    public function ajukan_page_beranda()
    {
        $kontak = new KontakUser();
        $kontak->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'pesan' => $this->request->getPost('pesan'),
        ]);

        return redirect()->back()->to('/');
    }
    public function ajukan_page_fitur()
    {
        $kontak = new KontakUser();
        $kontak->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'pesan' => $this->request->getPost('pesan'),
        ]);

        return redirect()->back()->to('/fitur');
    }
}
