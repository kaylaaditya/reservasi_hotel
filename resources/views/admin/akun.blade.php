@extends('layouts.admin', ['title'=>'My Akun'])
@section('content-header')
<h1 class="m-0"><i class="fas fa-user"></i>My Akun</h1>
@endsection

@section('content')
<x-status />
<div class="row">
    <div class="col-6">
        <x-form-edit :action=" route('admin.akun')" :header="false">
            <x-input label="Nama Lengkap" name="nama_lengkap" :value="$row->nama" />
            <x-input label="Username" name="username" :value="$row->username" />
            <x-input label="Password" name="password" type="password" />
            <x-input label="Konfirmasi Password" name="password_confirmation" type="password" />
        </x-form-edit>
    </div>
</div>

@endsection