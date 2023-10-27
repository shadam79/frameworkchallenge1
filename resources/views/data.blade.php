@extends('utama')
@section('nama', 'Shadam Alfareza')
@section('kelas', '5E')
@section('jurusan', 'Informatika')

@section('motor')
@if(isset($motor) && count($motor) > 0)
@foreach($motor as $mtr)
<tr>
    <td>{{$mtr}}</td>
</tr>
@endforeach
@else
<tr>
    <td>Tidak punya motor</td>
</tr>

@endif

@endsection