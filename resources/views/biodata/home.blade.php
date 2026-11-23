@extends('biodata.layout')

@section('title', 'Biodata ' . $biodata->name)

@section('content')
    <article class="card">
        <p class="eyebrow">Kenalan lebih dekat</p>
        <h1>{{ $biodata->name }}</h1>
        <p class="welcome">{{ $biodata->welcome_message }}</p>

        <div class="details">
            @if ($biodata->nickname)
                <div class="detail"><span class="detail-label">Nama panggilan</span><div class="detail-value">{{ $biodata->nickname }}</div></div>
            @endif
            @if ($biodata->birth_place || $biodata->birth_date)
                <div class="detail"><span class="detail-label">Tempat, tanggal lahir</span><div class="detail-value">{{ $biodata->birth_place ?: '—' }}{{ $biodata->birth_date ? ', ' . $biodata->birth_date->translatedFormat('d F Y') : '' }}</div></div>
            @endif
            @if ($biodata->address)
                <div class="detail"><span class="detail-label">Alamat</span><div class="detail-value">{{ $biodata->address }}</div></div>
            @endif
            @if ($biodata->email)
                <div class="detail"><span class="detail-label">Email</span><div class="detail-value">{{ $biodata->email }}</div></div>
            @endif
            @if ($biodata->phone)
                <div class="detail"><span class="detail-label">Telepon</span><div class="detail-value">{{ $biodata->phone }}</div></div>
            @endif
            @if ($biodata->education)
                <div class="detail"><span class="detail-label">Pendidikan</span><div class="detail-value">{{ $biodata->education }}</div></div>
            @endif
            @if ($biodata->hobby)
                <div class="detail"><span class="detail-label">Hobi</span><div class="detail-value">{{ $biodata->hobby }}</div></div>
            @endif
        </div>

        @if ($biodata->about)
            <section class="about">
                <h2>Tentang saya</h2>
                <p>{{ $biodata->about }}</p>
            </section>
        @endif
    </article>
@endsection
