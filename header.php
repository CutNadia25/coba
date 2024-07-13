<nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="."><i class="bi bi-egg-fried"></i>Seblak Kuyy</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $hasil['username'];?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-door-open-fill"></i> Daftar/Masuk</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Pengaturan</a></li>
                            <li><a class="dropdown-item" href="keluar"><i class="bi bi-box-arrow-left"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>