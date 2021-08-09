@extends('layouts.frontend')
@section('content')
    <div class="pt-24">
        <section class="bg-gray-50 border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                        Form Pendaftaran
                    </h1>
                </div>
                <form class="space-y-4">
                    <select class="block text-sm py-3 px-4 rounded-lg w-full border outline-none">
                        <option>Perorangan</option>
                        <option>Badan Usaha</option>
                    </select>
                    <input type="text" placeholder="Nama" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Nama Perusahaan" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Alamat Usaha" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Alamat Email" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Nomor Telp" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Sektor/Bidang Usaha" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" placeholder="Bidang Usaha yang memuat KBLI" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                </form>
                <div class="text-center mt-6">
                    <button class="py-3 w-64 text-xl text-white bg-red-400 rounded-2xl">Daftar</button>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
