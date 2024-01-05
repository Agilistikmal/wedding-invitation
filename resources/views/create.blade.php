@extends("layout")

@section("content")
<div class="mx-auto w-full max-w-screen-xl grid grid-cols-1 md:grid-cols-2 min-h-dvh pt-8 gap-8 px-2">
    <div class="hidden md:block md:mt-20">
        <img src="{{ asset('/imgs/bird.png') }}" alt="" class="rounded-xl w-[80%] mx-auto">
    </div>
    <div>
        @if(isset($error))
        @if($error == true)
        <div class="rounded-xl p-5 bg-red-500 text-[--white] mb-2">
            <p>Error: {{ $data }}</p>
        </div>
        @else
        <div class="rounded-xl p-5 bg-green-500 text-black mb-2">
            <p>Berhasil! Undangan online anda dapat diakses melalui:</p>
            <span><a href="/i/{{ $data->slug }}">wedding.safatanc.com/i/{{ $data->slug }}</a></span>
        </div>
        @endif
        @endif
        <form action="" method="post" class="rounded-xl p-5 h-max bg-[--primary] text-[--white] space-y-2">
            @csrf
            <h1 class="font-bold text-3xl text-center font-[Laviossa] mb-5">Buat undangan online</h1>
            <div>
                <h1>Nama URL (slug)</h1>
                <p class="text-sm">*digunakan untuk mengakses undangan melalui url, <br>
                    contoh:
                    <a href="/i/agil_ella" target="_blank">wedding.safatanc.com/i/agil_ella</a>
                </p>
                <p class="text-xs">*huruf kecil tanpa spasi & special character</p>
                <div class="flex input items-center">
                    <span class="text-gray-500 tracking-tight">wedding.safatanc.com/i/</span>
                    <input type="text" id="slug" name="slug" placeholder="Masukkan nama URL (contoh: agil_ella)" required onkeyup="handleChangeSlug()">
                </div>
            </div>
            <div>
                <h1>Nama mempelai Pria</h1>
                <input type="text" name="nama_pria" placeholder="Masukkan nama" required>
            </div>
            <div>
                <h1>Nama mempelai Wanita</h1>
                <input type="text" name="nama_wanita" placeholder="Masukkan nama" required>
            </div>
            <div>
                <h1>Alamat Acara</h1>
                <textarea name="alamat" rows="5" placeholder="Masukkan alamat" required></textarea>
            </div>
            <div class="space-y-2">
                <div>
                    <h1>Tanggal</h1>
                    <input type="date" id="tanggal" name="tanggal" value="now()" required>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h1>Waktu Mulai</h1>
                        <input type="time" name="waktu_mulai" required>
                    </div>
                    <div>
                        <h1>Waktu Selesai</h1>
                        <input type="time" name="waktu_selesai" required>
                    </div>
                </div>
            </div>
            <div class="!mt-5">
                <button class="button !border !border-[--secondary] !w-full">Create</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById('tanggal').valueAsDate = new Date();
    function handleChangeSlug() {
        document.getElementById("slug").value = generateSlug(document.getElementById("slug").value)
    }

    function generateSlug(text) {
        return text.toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }
</script>
@endsection
