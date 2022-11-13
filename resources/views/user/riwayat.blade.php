@extends('layouts.app')
@section('content')
<section id="contact" class="contact" style="min-height: 70vh;">
    <div class="container" data-aos="fade-up">
        <br>
                <h2 style=";">Riwayat Diagnosa</h2>
                @foreach($hasils as $hasil)
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="margin-bottom: 30px;">
                <div class="card-body">
                <p class='font-size: 20px' style='text-align: justify;'><b>Tanggal Konsultasi:</b>  {{$hasil->created_at->format('d/m/Y') }}</p>
                <p class='font-size: 20px' style='text-align: justify;'><b>Hasil Diagnosis:</b>  {{ number_format($hasil->nilai_akurasi * 100, 2)}} {{$hasil->penyakit->namapenyakit}}</p>
                <p class='font-size: 20px' style='margin-top:-10px; text-align: justify;'><b>Solusi:</b>  {{$hasil->penyakit->solusi}}</p>
                </div>
            </div>
            @endforeach
            <div class=" d-flex justify-content-center pt-2 pagination">
                {{ $hasils->links() }} </div>
    </div>
</section>
@endsection
