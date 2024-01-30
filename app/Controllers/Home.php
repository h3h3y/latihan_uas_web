<?php

namespace App\Controllers;
use App\Models\DataModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('homeview');
    }
    public function data(){
        $dataModel = new DataModel();
        $getdata = $dataModel->findAll();
        $arraydata = [
            'data' => $getdata
        ];
        return view('tampildataview', $arraydata);
    }
    public function tambahdata(){
        helper('form');
        return view('tambahdataview');
    }
    public function prosestambahdata(){
        $data = new DataModel();
        $validationRules = [
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('input_data', $this->request->getPost());
            if ($this->validator->hasError('foto')) {
                session()->setFlashdata('inputfotogagal', 'Gagal melakukan Input Data. Pastikan file gambar (jpg, jpeg, png)');
                return redirect()->to('/tambah')->with('errors', $this->validator->getErrors());
            }
        }

        $foto = $this->request->getFile('foto');
        $fotoname = $foto->getRandomName();
        $foto->move(ROOTPATH . 'public/uploads/foto', $fotoname);

        $data->insert([
            'nama' => $this->request->getVar('nama'),
            'jenkel' => $this->request->getVar('jenkel'),
            'hobi' => $this->request->getVar('hobi'),
            'tanggal_masuk' => $this->request->getVar('tanggalmasuk'),
            'foto' =>'uploads/foto/' . $fotoname,
            
        ]);
        session()->setFlashdata('inputdataberhasil', 'Data Berhasil Ditambah');
        return redirect()->to('/data');
    }
}
