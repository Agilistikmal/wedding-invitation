@extends("layout")

@section("content")
<div class="w-full max-w-xl mx-auto min-h-dvh text-[--white]">
    <div class="rounded-lg border-2 border-[--primary] overflow-hidden mt-20">
        <div class="bg-[--primary]">
            <h1 class="font-bold text-2xl text-center font-[Laviossa] p-2">Register</h1>
        </div>
        <form action="/register" method="POST" class="bg-[--white] text-black px-8 py-3 space-y-2">
            @csrf
            @error("error")
            <div class="p-2 bg-red-300 rounded-lg">
                <span>{{ $errors->first("error") }}</span>
            </div>
            @enderror
            @if (session()->has("success"))
            <div class="p-2 bg-green-500 rounded-lg text-white">
                <span>
                    Berhasil melakukan registrasi! <a href="/dashboard">klik disini</a> untuk pergi ke dashboard
                </span>
            </div>
            @endif
            <div>
                <span>Username</span>
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>
            <div>
                <span>Password</span>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="!mt-8">
                <button class="button !w-full">Register</button>
            </div>
            <div class="text-center">
                <span class="text-sm">
                    Sudah memiliki akun? <a href="/login" class="text-[--primary]">login disini</a>.
                </span>
            </div>
        </form>
    </div>
</div>
@endsection
