@extends('layouts.admin',['$title'=>'User Admin'])

@section('content-header')
<h1 class="m-0"> <i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <form action="?" method="get" class="form-inline">
            <div class="input-group ml-auto">
                <input type="text" name="search" class="form-control" placeholder="Cari..." value=<?= request()->search ?>>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Go !</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach( $data as $row )
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /card body -->
</div>
@endsection