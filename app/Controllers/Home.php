<?php

namespace App\Controllers;

use App\Models\bukutamuModel;

class Home extends BaseController
{

    protected $modelTamu;

    function __construct()
    {
        $this->modelTamu = new bukutamuModel();
    }

    public function index()
    {
        return view('index');
    }

    public function bukutamu($id = null)
    {
        // $modelTamu = new bukutamuModel();
        $data = $this->modelTamu->tampil_datatamu($id);
        return view('buku_tamu', $data);
    }
    public function savebukutamu()
    {
        $data = [
            'tanggal_masuk' => $this->request->getPost('tanggal'),
            'jam_masuk' => $this->request->getPost('jamdatang'),
            'jam_keluar' => $this->request->getPost('jam_keluar'),
            'nama' => $this->request->getPost('nama'),
            'dari_mana' => $this->request->getPost('datangdari'),
            'telpon' => $this->request->getPost('telpon'),
            'keperluan' => $this->request->getPost('keperluan'),
        ];

        $id = $this->request->getPost('id');
        if ($id != '') {
            $data['id'] = $id;
        }


        $this->modelTamu->save($data);

        return redirect()->to('home/listbukutamu');
    }

    public function hapusbukutamu($id)
    {
        // dd($id);
        $this->modelTamu->delete($id);
        return redirect()->to('home/listbukutamu');
    }

    public function listbukutamu()
    {

        $query = $this->modelTamu->findAll();
        $data = [
            'datatamu' => $query,
            'title' => 'List data tamu'
        ];
        return view('list_bukutamu', $data);
    }

    public function printbukutamu()
    {
        $query = $this->modelTamu->findAll();
        $data = [
            'datatamu' => $query,
            'title' => 'List data tamu'
        ];
        return view('print_bukutamu', $data);
    }

    public function latihan()
    {
        return view('latihan');
    }
}
