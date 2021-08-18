<?php

namespace App\Http\Livewire;

use App\Models\DataPendaftaran;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class FormPendaftaran extends Component
{
    public function render(){
        return view('livewire.form-pendaftaran')->extends('layouts.frontend');
    }

    public $jenis_pemohon = null, $nama_pemohon, $nama_perusahaan, $alamat_usaha, $email, $phone, $sektor, $kbli, $status = 1;

    protected $rules = [
        'jenis_pemohon' => 'required',
        'nama_pemohon' => 'required',
        'nama_perusahaan' => 'required',
        'alamat_usaha' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'sektor' => 'required',
        'kbli' => 'required',
    ];

    protected $messages = [
        'jenis_pemohon.required' => 'Silahkan Pilih Jenis Pemohon',
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

        $cek_data = DataPendaftaran::where('email', $this->email)->get();

        if ($cek_data->isNotEmpty()) {
            session()->flash('error', 'Pendaftaran Gagal, Anda Sudah Pernah Melakukan Pendaftaran Sebelumnya, Silahkan Tunggu 2x24 Jam Untuk Melakukan Pendaftaran Kembali, Terima Kasih.');
        }
        else{
            DataPendaftaran::create([
                'jenis_pemohon' => strtoupper($this->jenis_pemohon),
                'nama_pemohon' => strtoupper($this->nama_pemohon),
                'nama_perusahaan' => strtoupper($this->nama_perusahaan),
                'alamat_usaha' => strtoupper($this->alamat_usaha),
                'email' => $this->email,
                'phone' => strtoupper($this->phone),
                'sektor' => strtoupper($this->sektor),
                'kbli' => strtoupper($this->kbli),
                'status' => $this->status,
            ]);

            session()->flash('message', 'Pendaftaran Berhasil, Petugas Kami Akan Segera Menjadwalkan Pelayanan Pendampingan Perizinan Secara Tatap Maya, Silahkan Tunggu 2x24 Jam dan Cek Email Anda Secara Berkala, Terima Kasih.');
        }
    }
}
