<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('pasiens.create') }}" class="nav-link">Buat Data Pasien</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('blogs.create') }}" class="nav-link">Buat Blog</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('obats.create') }}" class="nav-link">Buat Data Obat</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{ Date('F j, Y, g:i a') }}
    </ul>
</nav>
