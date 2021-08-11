

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center col-md-3 mb-2 mt-3 mb-md-0 text-dark text-decoration-none">
                <h3>Student's Library</h3>
            </a>

            <ul class="nav nav-tabs col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="dashboard.php" class="nav-link px-2 link-dark active">Home</a></li>
                <li class="nav-item"><a href="input-buku.php" class="nav-link px-2 link-dark">Input Buku</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Akun</button>
                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="user.php">Ubah Password</a></li>
                  </ul>
                </div>
                <a href="login.php" class="btn btn-outline-primary me-2" role="button" tab-index="-1">Logout </a>
            </div>
        </header>

        <div class="px-3 text-center mx-auto" style="width:70%">
            <h1>Lorem Ipsum.</h1>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error quos quisquam quidem, maiores mollitia, excepturi ea velit fuga odit maxime quaerat numquam blanditiis aliquam officiis tenetur assumenda sit ducimus quam.</p>
            <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary fw-bold border-black bg-black mx-auto mt-4">Menu on the navbar</a>
            </p>
        </div>
    </div>
    <br>
</body>
</html>