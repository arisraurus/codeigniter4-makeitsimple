<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?= base_url(); ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= base_url('home/profile'); ?>" class="nav-item nav-link">Profile</a>
                <a href="<?= base_url('home/bukutamu'); ?>" class="nav-item nav-link">Buku Tamu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                        <a href="<?= base_url('home/latihan'); ?>" class="dropdown-item">Latihan</a>
                        <a href="<?= base_url('home/printbukutamu'); ?>" class="dropdown-item" target="_blank">Cetak Buku Tamu</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                    </div>
                </div>
                <a href="<?= base_url('home/listbukutamu'); ?>" class="nav-item nav-link" tabindex="-1">Reports</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>
</nav>