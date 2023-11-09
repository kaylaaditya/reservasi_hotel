@extends('layouts.admin', ['title'=>'Edit Admin'])
@section('content-header')
<h1 class="m-0"><i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <x-form-edit :action="route('admin.update',['admin'=>$row->id])">
            <x-input label="Nama Lengkap" name="nama_lengkap" :value="$row->nama" />
            <x-input label="Username" name="username" :value="$row->username"/>
            <x-input label="Password" name="password" type="password" />
            <x-input label="Konfirmasi Password" name="password_confirmation" type="password" />
        </x-form-edit>
    </div>
</div>

@endsection