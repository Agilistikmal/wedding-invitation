@extends("layout")

@section("content")
<!-- Header -->
<div id="header" class="relative min-h-dvh bg-black">
    <div class="relative pb-52">
        <div class="absolute top-0 left-0 bg-gradient-to-t from-black to-black/50 h-full w-full"></div>
        <img src="{{ asset('imgs/cigre3.jpg') }}" alt="" class="w-full slides md:min-h-[120dvh] lg:min-h-[130dvh]">
        <img src="{{ asset('imgs/cigre2.jpg') }}" alt="" class="w-full slides md:min-h-[120dvh] lg:min-h-[130dvh]">
        <img src="{{ asset('imgs/cigre4.jpg') }}" alt="" class="w-full slides md:min-h-[120dvh] lg:min-h-[130dvh]">
        <img src="{{ asset('imgs/cigre5.jpg') }}" alt="" class="w-full slides md:min-h-[120dvh] lg:min-h-[130dvh]">
        <img src="{{ asset('imgs/cigre6.jpg') }}" alt="" class="w-full slides md:min-h-[120dvh] lg:min-h-[130dvh]">
        <img src="{{ asset('imgs/cigre7.jpg') }}" alt="" class="w-full slides md:min-h-[120dvh] lg:min-h-[130dvh]">
    </div>
    <div class="md:absolute top-0 left-0 w-full h-full overflow-hidden text-[--white] py-8 px-2 md:pt-52">
        <div>
            <div class="absolute mt-10 md:mt-0 md:relative top-0 left-0 w-full mx-auto content">
                <h1 class="font-bold text-7xl lg:text-9xl mt-10 font-[Callifornia] text-center tracking-wide">Wedding<br>Invitation</h1>
                <p class="tracking-widest text-center font-[Laviossa] text-sm lg:text-lg">Bikin undangan pernikahan onlinemu disini.</p>
                <a href="/create" class="button mt-5">Create Now</a>
            </div>

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
                <div class="items-center hidden lg:flex">
                    <img src="{{ asset('imgs/lovearrow.png') }}" alt="">
                </div>
            </div>
            <!-- End About -->

            <!-- Contact -->
            <div id="contact" class="pt-5 max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2">
                <div class="hidden lg:block">
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
    </div>
</div>
<!-- End Header -->
<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 5000);
    }
</script>
@endsection
