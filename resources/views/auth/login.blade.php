@extends("layout")

@section("content")
<div class="w-full max-w-xl mx-auto min-h-dvh text-[--white]">
    <div class="rounded-lg border-2 border-[--primary] overflow-hidden mt-20">
        <div class="bg-[--primary]">
            <h1 class="font-bold text-2xl text-center font-[Laviossa] p-2">Login</h1>
        </div>
        <form action="/login" method="POST" class="bg-[--white] text-black px-8 py-3 space-y-2">
            @csrf
            @error("error")
            <div class="p-2 bg-red-300 rounded-lg">
                <span>{{ $errors->first("error") }}</span>
            </div>
            @enderror
            <div>
                <span>Username</span>
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>
            <div>
                <span>Password</span>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="!mt-8">
                <button class="button !w-full">Login</button>
            </div>
            <div class="text-center">
                <span class="text-sm">
                    Belum memiliki akun? <a href="/register" class="text-[--primary]">register disini</a>.
                </span>
            </div>
        </form>
    </div>
</div>
@endsection
