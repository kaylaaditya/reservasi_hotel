@extends('layouts.admin',['$title'=>'Tambah Kamar'])

@section('content-header')
<h1 class="m-0"> <i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <x-form-create :action="route('kamar.store')" :upload="true" >
            <x-input label="Nama Kamar / Tipe Kamar" name="nama_kamar"  />
            <x-input label="Foto " name="foto" type="file"/>
            <x-input label="Jumlah " name="jumlah" type="number"/>
            <x-input label="Harga " name="harga" type="number"/>
            <x-textarea label="Deskripsi" name="deskripsi"/>
        </x-form-create>
    </div>
</div>

@endsection
