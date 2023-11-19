@props(['action', 'header'=>true])
<form action="{{ $action }}" method="post" class="card card-primary">
    @if($header)
    <div class="card-header">
        <i class="fas fa-edit"></i> Form Edit
    </div>
    @endif

    <div class="card-body">
        @method('put')
        <?= $slot ?>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit">
            <i class="fas fa-database"></i> Update
        </button>
    </div>
</form>