<nav class="bg-[--primary] text-[--white] py-5 px-2">
    <div class="w-full max-w-screen-xl mx-auto grid grid-cols-2">
        <div>
            <a href="/">
                <img src="{{ asset('imgs/logo.jpg') }}" alt="" class="h-[50px] rounded-full">
            </a>
        </div>
        <div class="flex items-center justify-end gap-2">
            <a href="#about" class="hidden sm:inline-flex nav-2">About</a>
            <a href="#contact" class="hidden sm:inline-flex nav-2">Contact</a>
            @if (Auth::check())
            <a href="/dashboard" class="nav-1">Dashboard</a>
            @else
            <a href="/login" class="nav-1">Login</a>
            @endif
            <a href="/create" class="hidden sm:inline-flex nav-1">Create Invitation</a>
        </div>
    </div>
</nav>
