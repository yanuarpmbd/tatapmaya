<section class="bg-gray-100 border-b py-8 h-screen">
    <div class="container max-w-5xl mx-auto m-8">
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            @if (session()->has('error'))
                <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="text-2xl font-bold">Informasi Pendaftaran</p>
                            <p class="text-lg">{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if (session()->has('message'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="text-2xl font-bold">Informasi Pendaftaran</p>
                            <p class="text-lg">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div>
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Form Pendaftaran
                </h1>
            </div>
            <form class="space-y-4" wire:submit.prevent="store">
                <select class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" wire:model="jenis_pemohon">
                    <option selected value="">PILIH JENIS PEMOHON</option>
                    <option>PERORANGAN</option>
                    <option>BADAN USAHA</option>
                </select>
                @error('jenis_pemohon') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="NAMA" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none uppercase" wire:model="nama_pemohon"/>
                @error('nama_pemohon') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="NAMA PERUSAHAAN" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none uppercase" wire:model="nama_perusahaan"/>
                @error('nama_perusahaan') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="ALAMAT USAHA" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none uppercase" wire:model="alamat_usaha"/>
                @error('alamat_usaha') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="ALAMAT EMAIL" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" wire:model="email"/>
                @error('email') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="NOMOR TELEPON/HP" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" wire:model="phone"/>
                @error('phone') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="SEKTOR/BIDANG USAHA" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none uppercase" wire:model="sektor"/>
                @error('sektor') <span class="error text-red-500">{{ $message }}</span> @enderror
                <input type="text" placeholder="BIDANG USAHA YANG MEMUAT KBLI" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none uppercase" wire:model="kbli"/>
                @error('kbli') <span class="error text-red-500">{{ $message }}</span> @enderror
                <x-honey recaptcha/>
                <div class="text-center mt-6">
                    <button type="submit" class="py-3 w-64 text-xl text-white bg-red-400 rounded-2xl">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</section>
