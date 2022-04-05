@if (session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <strong>Berhasil! {{ session ('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden='true'>
            &times;
        </span>
    </button>
</div>
@endif
