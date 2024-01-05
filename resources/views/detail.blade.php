@extends("layout")

@section("content")
<div class="mx-auto max-w-screen-sm min-h-dvh px-2">
    @if($error)
        <div class="text-center pt-20">
            <h1 class="font-bold text-6xl font-[Laviossa]">Error</h1>
            <p>Undangan <b>{{ $data }}</b> tidak ditemukan.</p>
        </div>
    @else
        <div class="text-center pt-20 grid grid-cols-2 justify-center">
            <h1 class="font-bold text-3xl sm:text-6xl font-[Callifornia]">Wedding <br>Invitation</h1>
            <h2 class="mt-5 font-bold text-lg sm:text-3xl font-[Callifornia] tracking-widest">{{ $data->nama_pria }} <br> ... & {{ $data->nama_wanita }}</h2>
        </div>
        <div class="flex justify-center w-max mx-auto items-center gap-2 mt-5 text-xs">
            <h1 class="text-center"><i class='bx bxs-music text-2xl align-middle'></i> JKT48 - Rapsodi</h1>
            <audio id="music" src="{{ asset('music/Rapsodi.mp3') }}" autoplay="true" muted="muted"></audio>
            <button id="mute" onclick="handleMute()">
                <i class='bx bxs-volume-full text-3xl align-middle'></i>
            </button>
        </div>
        <div class="rounded-xl bg-[--primary] mx-auto p-5 text-white mt-5">
            <div class="text-center font-[Laviossa]">
                <h1 class="font-bold text-2xl sm:text-5xl">Undangan Online</h1>
                <h2 class="text-sm sm:text-lg">pernikahan {{ $data->nama_pria }} & {{ $data->nama_wanita }}</h2>
            </div>
            <br>
            <hr>
            <br>
            <p class="text-sm sm:text-lg" id="invitation">
                Dengan hormat, <br>
                Kami, <b>{{ $data->nama_pria }} & {{ $data->nama_wanita }}</b>, dengan penuh sukacita ingin mengundang Anda untuk merayakan pernikahan kami. <br> <br>
                Acara akan dilaksanakan pada: <br>
                <br>
                Tanggal: <b>{{ strftime( "%A, %d %B %Y", strtotime($data->tanggal)) }}</b><br>
                Waktu: <b>{{ $data->waktu_mulai }} - {{ $data->waktu_selesai }}</b><br>
                Tempat: <b>{{ $data->alamat }}</b><br>
                <br>
                Kami sangat menghargai kehadiran Anda dalam acara ini.<br>
                <br>
                Terima kasih dan kami nantikan kehadiran Anda.<br>
                <br>
                Salam hangat,<br>
                <b>{{ $data->nama_pria }} & {{ $data->nama_wanita }}</b>
            </p>
        </div>
    @endif
</div>

<script>
    let music = document.getElementById("music")
    let mute_button = document.getElementById("mute")
    let played = false
    let muted = false

    music.volume = 0.008
    music.oncanplay = function () {
        if (played == true) {
            return
        }
        music.play()
        music.volume = 0.008
        music.muted = "false"
        played = true
    }

    document.body.addEventListener('mouseover', () => {
        music.play()
        music.muted = false;
    });

    function handleMute() {
        if (muted) {
            music.volume = 0.008
            mute_button.innerHTML = `<i class='bx bxs-volume-full text-3xl align-middle'></i>`
            muted = false
        }
        else {
            music.volume = 0
            mute_button.innerHTML = `<i class='bx bxs-volume-mute text-3xl text-red-500 align-middle'></i>`
            muted = true
        }
    }
</script>
@endsection
