<form action="?" method="get" class="form-inline">
    <div class="input-group ml-auto">
        <input type="text" name="search" class="form-control " placeholder="Cari..." value=<?= request()->search ?>>
        <div class="input-group-append">
            <button class="btn btn-light border" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>