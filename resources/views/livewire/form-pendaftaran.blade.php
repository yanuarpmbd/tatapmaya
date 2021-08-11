<section class="bg-gray-50 border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Form Pendaftaran
                </h1>
            </div>
            <form class="space-y-4" wire:submit.prevent="store">
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <select class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" wire:model="status">
                    <option selected value="">PILIH STATUS</option>
                    <option>PERORANGAN</option>
                    <option>BADAN USAHA</option>
                </select>
                @error('status') <span class="error text-red-500">{{ $message }}</span> @enderror
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
                <div class="text-center mt-6">
                    <button type="submit" class="py-3 w-64 text-xl text-white bg-red-400 rounded-2xl">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</section>
