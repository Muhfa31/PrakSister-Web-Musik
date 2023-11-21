<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MUSIKKU</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light" id="navigasi">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Musikku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active fw-bold" id="navbarDropdown" href="artis.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artis</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="artis.php">Data Artis</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item active" href="form-artis.php">Tambah Artis</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="Lagu.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lagu</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="lagu.php">Data Lagu</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="form-lagu.php">Tambah Lagu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="album.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Album</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="album.php">Data Album</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="form-album.php">Tambah Album</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Tambah Artis</h1>
                <p class="lead fw-normal text-white-50 mb-0">Artis lengkap</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="main-1">
            <form name="form" class="container" method="POST" action="proses-artis.php">
                <input type="hidden" name="aksi" value="tambah" />
                <div class="mb-3">
                    <label class="form-label">ID Artis</label>
                    <input type="text" class="form-control" name="id_artis" id="formGroupExampleInput" placeholder="Silahkan isi ID Artis">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nama Artis</label>
                    <input type="text" class="form-control" name="nama_artis" id="formGroupExampleInput2" placeholder="Silahkan isi Nama Artis">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Genre Lagu</label>
                    <input type="text" class="form-control" name="genre_lagu" id="formGroupExampleInput2" placeholder="Silahkan isi Genre Lagu">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Production</label>
                    <input type="text" class="form-control" name="production" id="formGroupExampleInput2" placeholder="Silahkan isi Nama Production">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Popularitas</label>
                    <input type="text" class="form-control" name="popularitas" id="formGroupExampleInput2" placeholder="Silahkan isi Jumlah Popularitas">
                </div>
                <div class="col-auto">
                    <button type="submit" name="simpan" class="btn btn-primary">Tambah Artis</button>
                </div>
            </form>
        </div>

    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <!-- <p class="m-0 text-center text-white">Copyright &copy; M. Rizky Baskara - Naufal Bakhtiar Ismail 2022</p> -->
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>