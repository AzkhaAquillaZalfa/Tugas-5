@extends('biodata.layout')

@section('title', 'Kelola Biodata')

@section('content')
    <section class="card">
        <p class="eyebrow">Area pengelolaan</p>
        <h1 style="font-size: clamp(1.8rem, 6vw, 2.6rem)">Kelola biodata</h1>
        <p class="welcome" style="margin-bottom: 0">Perubahan yang disimpan akan langsung tampil di halaman publik.</p>

        @if (session('status'))
            <p class="notice" role="status">{{ session('status') }}</p>
        @endif

        @if ($errors->any())
            <div class="errors" role="alert">
                <strong>Periksa kembali isian berikut:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.biodata.update') }}">
            @csrf
            @method('PUT')
            <div class="form-grid">
                <div class="field full">
                    <label for="welcome_message">Pesan sambutan</label>
                    <input id="welcome_message" name="welcome_message" value="{{ old('welcome_message', $biodata->welcome_message) }}" required maxlength="255">
                </div>
                <div class="field">
                    <label for="name">Nama lengkap</label>
                    <input id="name" name="name" value="{{ old('name', $biodata->name) }}" required maxlength="100">
                </div>
                <div class="field">
                    <label for="nickname">Nama panggilan</label>
                    <input id="nickname" name="nickname" value="{{ old('nickname', $biodata->nickname) }}" maxlength="50">
                </div>
                <div class="field">
                    <label for="birth_place">Tempat lahir</label>
                    <input id="birth_place" name="birth_place" value="{{ old('birth_place', $biodata->birth_place) }}" maxlength="100">
                </div>
                <div class="field">
                    <label for="birth_date">Tanggal lahir</label>
                    <input id="birth_date" name="birth_date" type="date" value="{{ old('birth_date', $biodata->birth_date?->format('Y-m-d')) }}">
                </div>
                <div class="field full">
                    <label for="address">Alamat</label>
                    <input id="address" name="address" value="{{ old('address', $biodata->address) }}" maxlength="500">
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email', $biodata->email) }}" maxlength="255">
                </div>
                <div class="field">
                    <label for="phone">Nomor telepon</label>
                    <input id="phone" name="phone" value="{{ old('phone', $biodata->phone) }}" maxlength="30">
                </div>
                <div class="field">
                    <label for="education">Pendidikan</label>
                    <input id="education" name="education" value="{{ old('education', $biodata->education) }}" maxlength="150">
                </div>
                <div class="field">
                    <label for="hobby">Hobi</label>
                    <input id="hobby" name="hobby" value="{{ old('hobby', $biodata->hobby) }}" maxlength="150">
                </div>
                <div class="field full">
                    <label for="about">Tentang saya</label>
                    <textarea id="about" name="about" maxlength="2000">{{ old('about', $biodata->about) }}</textarea>
                </div>
            </div>
            <div class="actions">
                <button class="button" type="submit">Simpan perubahan</button>
                <a class="nav-link" style="align-self:center" href="{{ route('home') }}">Lihat halaman publik</a>
            </div>
        </form>
    </section>
@endsection
