@extends("layout")

@section("content")
<div class="w-full max-w-screen-xl mx-auto min-h-dvh">
    <div class="mt-5">
        <h1 class="font-bold text-2xl text-[--primary] font-[Laviossa]">Dashboard</h1>
        <hr class="border-[--primary]">
        <div class="mt-5">
            <h1 class="font-bold">Daftar undangan kamu ({{ "@" . $user->username }}) <a href="/create" class="text-[--white] px-2 py-1 bg-[--primary] rounded-lg">Tambah</a> <a href="/logout" class="text-red-500 px-2">Logout</a></h1>
            @if ($invitations->count() == 0)
                <span class="italic">
                    ... Belum ada undangan. <a href="/create" class="text-[--primary]">Klik disini</a> untuk membuat.
                </span>
            @endif
            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    @foreach ($invitations as $invitation)
                        <div class="p-2 bg-[--primary] rounded-lg text-[--white] text-center">
                            <span class="text-xs text-white/50">{{ $invitation->slug }}</span>
                            <h1 class="font-bold text-2xl tracking-widest font-[Callifornia]">{{ $invitation->nama_pria }} <br> & {{ $invitation->nama_wanita }}</h1>
                            <div class="mt-2">
                                <a href="/i/{{ $invitation->slug }}" target="_blank" class="w-full text-center"><p>Visit <i class='bx bx-link-external'></i></p></a>
                                <div class="flex gap-2 mt-2 text-center">
                                    <a href="/edit/{{ $invitation->slug }}" class="w-full border border-[--secondary] rounded-lg px-5">Edit</a>
                                    <a href="/delete/{{ $invitation->slug }}" class="border rounded-lg border-red-500 text-red-500 px-5"><i class='bx bxs-trash'></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
