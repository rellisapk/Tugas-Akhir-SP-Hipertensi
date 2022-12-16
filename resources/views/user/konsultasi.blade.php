@extends('layouts.app')

@section('content')
@if (session('message'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('message') }} </strong>
  </div>
@endif
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <p><span>Diagnosa Hipertensi</span></p>
    </div>

    <div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
        <h4><i class='icon fa fa-exclamation-triangle'></i> Perhatian !</h4>
        <p style="text-align: justify;">Silahkan memilih gejala sesuai dengan kondisi yang anda alami, anda dapat memilih tingkat kepastian kondisi mulai dari pasti tidak hingga pasti ya, jika sudah tekan tombol lihat hasil di bawah untuk mengetahui hasil diagnosa.</p>
    </div>
    <form action="{{ route('hasil_konsultasi') }}" method="POST">
    @csrf
    <?php
    $no = 0;
    ?>
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    @foreach ($gejalas as $gejala)
    <table width='100%' border="0">
        <tr>
            <td>{{$no+1}}. Seberapa yakin anda merasakan gejala <b>{{$gejala->namagejala}}</b> pada range dibawah ini ?</td>
        </tr>
        <tr>
            <td>
            <?php
            $sql_get_kondisi = DB::table('kondisis')->orderBy('id')->get();
            $sqlkondisi_array = $sql_get_kondisi->toArray();
            foreach ($sqlkondisi_array as $row_get_kondisi) {
            ?>
            <input type="radio" name="kondisi[{{$no}}]" data-id="<?php echo $row_get_kondisi->id; ?>" value="<?php echo $gejala->kodegejala . '_' . $row_get_kondisi->id ?>"><?php echo $row_get_kondisi->kondisi ?> <br>
            <?php
            }
            ?>
        </tr>
    </table>
    <hr size="8px"/>
    <?php
    $no++
    ?>
    @endforeach
    </tbody>
    </table>
    <button type="submit" class="btn-book-a-table2">Diagnosa</button>
</section>
@endsection
