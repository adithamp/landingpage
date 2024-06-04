<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Benefit;
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
use App\Models\Privacypolicy;
use App\Models\Termscondition;
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
        $benefit = new Benefit();
        $footer = new Footer();

        $solutions = $solusi->findAll();
        $groupedHarga = [];
        foreach ($solutions as $solution) :
            $prices = $paketharga->where('id_solusi', $solution['id'])->findAll();
            $groupedHarga[$solution['id']] = $prices;
        endforeach;

        $data = [
            'solusi' => $solusi->findAll(),
            'paketharga' => $groupedHarga,
            'headsolusi' => $headsolusi->findAll(),
            'benefit' => $benefit->findAll(),
            'footer' => $footer->findAll(),
        ];
        $head = $headsolusi->findAll();

        return view('solusi', $data);
    }

    public function fitur($slug)
    {

        $m_solusi = new Solusi();
        $solusi = $m_solusi->where('slug', $slug)->first();
        $fitur = new Fitur();
        $footer = new Footer();
        $benefit = new Benefit();
        $harga = new PaketHarga();
        $data = [
            // 'fitur' => $fitur->findAll(),
            'paketharga' => $harga->findAll(),
            'benefit' => $benefit->findAll(),
            'fitur' => $fitur->where('id_solusi', $solusi['id'])->findAll(),
            'footer' => $footer->findAll()
        ];
        // v($slug);
        // var_dump($slug);
        return view('fitur', $data);
    }

    public function detail_fitur($slug)
    {
        $layout = new Layout();
        $m_fitur = new Fitur();
        $fitur = $m_fitur->where('slug', $slug)->first();
        $detail_fitur = new Detailfitur();
        $footer = new Footer();

        $data = [
            'layout' => $layout->findAll(),
            'detailfitur' => $detail_fitur->where('id_fitur', $fitur['id'])->bebas(),
            'footer' => $footer->findAll()
        ];

        return view('detail_fitur', $data);
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
        $privacypolicy = new Privacypolicy();
        $data = [
            'privacypolicy' => $privacypolicy->findAll(),
            'footer' => $footer->findAll()
        ];
        return view('privacypolicy', $data);
    }

    public function terms()
    {
        $footer = new Footer();
        $terms = new Termscondition();
        $data = [
            'termscondition' => $terms->findAll(),
            'footer' => $footer->findAll()
        ];
        return view('termcondition', $data);
    }

    public function ajukan_page_solusi()
    {
        $kontak = new KontakUser();
        $validation = \config\Services::validation();
        $rulse = [
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'pesan' => 'required',
        ];
        if ($this->validate($rulse)) {
            $kontak->save([
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                'pesan' => $this->request->getPost('pesan'),
            ]);
            session()->setFlashdata('sweetalert', "
            
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Anda Mengajukan',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
            
            ");
            return redirect()->back()->to('/solusi');
        } else {
            $errors = $validation->getErrors();
            $errorMessage = 'Formulir belum diisi dengan benar. Mohon periksa kembali:<br>';
            foreach ($errors as $field => $error) {
                switch ($field) {
                    case 'nama':
                        $errorMessage .= 'Nama: Mohon isi nama Anda.<br>';
                        break;
                    case 'email':
                        $errorMessage .= 'Email: Mohon isi alamat email Anda.<br>';
                        break;
                    case 'nomor_telepon':
                        $errorMessage .= 'Nomor Telepon: Mohon isi nomor telepon Anda.<br>';
                        break;
                    case 'pesan':
                        $errorMessage .= 'Pesan: Mohon isi pesan Anda.<br>';
                        break;
                    default:
                        $errorMessage .= ucfirst($field) . ': ' . $error . '<br>';
                        break;
                }
            }
            session()->setFlashdata('sweetalert', "
            Swal.fire({
                title: 'Gagal',
                html: '$errorMessage',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        ");
            return redirect()->back()->to('/solusi');
        }
    }
    public function ajukan_page_beranda()
    {
        $kontak = new KontakUser();
        $validation = \config\Services::validation();
        $rulse = [
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'pesan' => 'required',
        ];
        if ($this->validate($rulse)) {
            $kontak->save([
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                'pesan' => $this->request->getPost('pesan'),
            ]);
            session()->setFlashdata('sweetalert', "
            
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Anda Mengajukan',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
            
            ");
            return redirect()->back()->to('/');
        } else {
            $errors = $validation->getErrors();
            $errorMessage = 'Formulir belum diisi dengan benar. Mohon periksa kembali:<br>';
            foreach ($errors as $field => $error) {
                switch ($field) {
                    case 'nama':
                        $errorMessage .= 'Nama: Mohon isi nama Anda.<br>';
                        break;
                    case 'email':
                        $errorMessage .= 'Email: Mohon isi alamat email Anda.<br>';
                        break;
                    case 'nomor_telepon':
                        $errorMessage .= 'Nomor Telepon: Mohon isi nomor telepon Anda.<br>';
                        break;
                    case 'pesan':
                        $errorMessage .= 'Pesan: Mohon isi pesan Anda.<br>';
                        break;
                    default:
                        $errorMessage .= ucfirst($field) . ': ' . $error . '<br>';
                        break;
                }
            }
            session()->setFlashdata('sweetalert', "
            Swal.fire({
                title: 'Gagal',
                html: '$errorMessage',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        ");
            return redirect()->back()->to('/');
        }
    }
    public function ajukan_page_fitur()
    {
        $kontak = new KontakUser();
        $validation = \config\Services::validation();
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'pesan' => 'required',
        ];
        if ($this->validate($rules)) {
            $kontak->save([
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nomor_telepon' => $this->request->getPost('nomor_telepon'),
                'pesan' => $this->request->getPost('pesan'),
            ]);
            session()->setFlashdata('sweetalert', "
            <script>
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Anda Mengajukan',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
            </script>
            ");
            return redirect()->back();
        } else {
            $errors = $validation->getErrors();
            $errorMessage = 'Formulir belum diisi dengan benar. Mohon periksa kembali:<br>';
            foreach ($errors as $field => $error) {
                switch ($field) {
                    case 'nama':
                        $errorMessage .= 'Nama: Mohon isi nama Anda.<br>';
                        break;
                    case 'email':
                        $errorMessage .= 'Email: Mohon isi alamat email Anda.<br>';
                        break;
                    case 'nomor_telepon':
                        $errorMessage .= 'Nomor Telepon: Mohon isi nomor telepon Anda.<br>';
                        break;
                    case 'pesan':
                        $errorMessage .= 'Pesan: Mohon isi pesan Anda.<br>';
                        break;
                    default:
                        $errorMessage .= ucfirst($field) . ': ' . $error . '<br>';
                        break;
                }
            }
            session()->setFlashdata('sweetalert', "
            <script>
                Swal.fire({
                    title: 'Gagal',
                    html: '$errorMessage',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            </script>
            ");
            return redirect()->back();
        }
    }
}
