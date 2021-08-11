<?php

namespace App\Http\Livewire;

use App\Models\DataPendaftaran;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class FormPendaftaran extends Component
{
    public $status = null, $nama_pemohon, $nama_perusahaan, $alamat_usaha, $email, $phone, $sektor, $kbli;

    protected $rules = [
        'status' => 'required',
        'nama_pemohon' => 'required',
        'nama_perusahaan' => 'required',
        'alamat_usaha' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'sektor' => 'required',
        'kbli' => 'required',
    ];

    protected $messages = [
        'status.required' => 'Silahkan Pilih Status',
        'nama_pemohon.required' => 'Silahkan Isi Nama Pemohon',
        'nama_perusahaan.required' => 'Silahkan Isi Nama Perusahaan',
        'alamat_usaha.required' => 'Silahkan Isi Alamat Usaha',
        'email.required' => 'Silahkan Isi Alamat Email',
        'email.email' => 'Alamat Email Tidak Valid',
        'phone.required' => 'Silahkan Isi Nomor Telepon/HP',
        'phone.numeric' => 'Nomor Telepon/HP Tidak Valid',
        'sektor.required' => 'Silahkan Pilih Sektor',
        'kbli.required' => 'Silahkan Pilih Bidang Usaha yang memuat KBLI'
    ];

    public function store(){
        $this->validate();

        DataPendaftaran::create([
            'status' => strtoupper($this->status),
            'nama_pemohon' => strtoupper($this->nama_pemohon),
            'nama_perusahaan' => strtoupper($this->nama_perusahaan),
            'alamat_usaha' => strtoupper($this->alamat_usaha),
            'email' => $this->email,
            'phone' => strtoupper($this->phone),
            'sektor' => strtoupper($this->sektor),
            'kbli' => strtoupper($this->kbli)
        ]);

        session()->flash('message', 'Pendaftaran Berhasil, Petugas Kami Akan Segera Menjadwalkan Pelayanan Pendampingan Perizinan Secara Tatap Maya, Silahkan Tunggu 1x24 Jam dan Cek Email Anda Secara Berkala, Terima Kasih.');
    }

    public function render(){
        return view('livewire.form-pendaftaran')->extends('layouts.frontend');
    }
}
