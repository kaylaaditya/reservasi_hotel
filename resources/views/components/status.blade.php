@if ( session('status')=='store')

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Simpan!</strong> Data telah berhasil disimpan.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

@if ( session('status')=='update')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Update!</strong> Data telah berhasil diubah.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ( session('status')=='destroy')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Berhasil Delete!</strong> Data telah berhasil dihapus.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif