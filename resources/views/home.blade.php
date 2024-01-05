@extends("layout")

@section("content")
<!-- Header -->
<div id="header" class="relative h-full">
    <div class="bg-gradient-to-t from-black to-transparent overflow-hidden text-[--white] h-max py-8 px-2">
        <h1 class="font-bold text-7xl lg:text-9xl mt-10 font-[Callifornia] text-center tracking-wide">Wedding<br>Invitation</h1>
        <p class="tracking-widest text-center font-[Laviossa] text-sm lg:text-lg">Bikin undangan pernikahan onlinemu disini.</p>
        <a href="/create" class="button mt-5">Create Now</a>
    </div>
</div>
<!-- End Header -->

<div id="about_contact" class="min-h-dvh px-2">
    <!-- About -->
    <div id="about" class="pt-20 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2">
        <div class="text-justify">
            <h1 class="font-bold text-6xl font-[Callifornia]">About</h1>
            <p>
                Selamat datang di Wedding Invitation, platform undangan pernikahan online terbaik Anda.
                Kami berdedikasi untuk memberikan Anda pengalaman terbaik dalam membuat undangan pernikahan,
                dengan fokus pada kenyamanan, keandalan, dan desain yang unik.
            </p>
            <br>
            <p>
                Website ini dibuat oleh Agil Ghani Istikmal (5220411040) sebagai final project Pemrograman Web Teori.
            </p>
            <br>
            <p>
                Didirikan pada awal tahun 2024, semangat kami untuk membantu pasangan mempersiapkan
                hari besar mereka dengan lebih mudah mendorong kami untuk beraksi,
                dan memberi kami dorongan untuk berubah dari ide menjadi platform undangan pernikahan online yang kami banggakan saat ini.
            </p>
            <br>
            <p>
                Kami sekarang melayani pelanggan di seluruh Indonesia,
                dan kami senang menjadi bagian dari sektor industri pernikahan yang ramah dan inspiratif.
            </p>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('imgs/lovearrow.png') }}" alt="">
        </div>
    </div>
    <!-- End About -->

    <!-- Contact -->
    <div id="contact" class="pt-5 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2">
        <div>
            <img src="{{ asset('imgs/love.png') }}" alt="" class="-translate-y-40">
        </div>
        <div class="max-w-xl text-justify">
            <h1 class="font-bold text-6xl font-[Callifornia]">Contact</h1>
            <p>
                Kami berharap Anda menikmati produk kami sebanyak kami menikmati menawarkannya kepada Anda.
                Jika Anda memiliki pertanyaan atau komentar, jangan ragu untuk menghubungi kami.
            </p>
            <br>
            <ul>
                <li class="list-disc list-inside">
                    <a href="https://wa.me/6285888881550" target="_blank">WhatsApp (+6285888881550)</a>
                </li>
                <li class="list-disc list-inside">
                    <a href="https://gprestore.net" target="_blank">Discord</a>
                </li>
                <li class="list-disc list-inside">
                    <a href="https://safatanc.com" target="_blank">Portfolio (safatanc.com)</a>
                </li>
                <li class="list-disc list-inside">
                    <a href="mailto:agilistikmal3@gmail.com" target="_blank">Email (agilistikmal3@gmail.com)</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Contact -->
</div>
@endsection
