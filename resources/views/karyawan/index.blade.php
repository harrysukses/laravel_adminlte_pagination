@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
    <h1>Dashboard</h1>
@endsection
@section('content')
    <div class="box box-primary" id="tabel_karyawan">
    	@include('karyawan.tabel')
    </div>
@endsection
@section('js')
<script>
 $('#tabel_karyawan').on('click','.pagination a', function(e)
    {
        e.preventDefault();
        e.stopImmediatePropagation();
        var url = $(this).attr('href');
        $.get(url, function(tabel)
        {
            $('#tabel_karyawan').html(tabel);
        });
    });
</script>
@endsection