@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
        
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    <div class="invalid-feedback mb-2">
                        @error('name'){{ $message }}@enderror
                    </div>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Alamat Email</label>
                    <div class="invalid-feedback mb-2">
                        @error('email'){{ $message }}@enderror
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    <div class="invalid-feedback mb-2">
                        @error('password'){{ $message }}@enderror
                    </div>
                </div>
        
                <button class="btn btn-primary w-100 py-2 mt-2 mb-1" type="submit">Daftar</button>

                <p class="text-end">Sudah punya akun? <a href="/login">Login Sekarang</a></p>
            </form>
        </div>
    </div>
    
</div>
@endsection