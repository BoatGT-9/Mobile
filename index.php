<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="style/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="bi bi-globe2"></i>&nbsp;Mobile-Buy </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">หน้าหลัก</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="View/view_add.php">เพิ่มมือถือ</a></li>
                </ul>
            </div>
        </div>
    </nav>





    
<!-- Section-->
<section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    include "controller/controllerMobile.php";
                ?>
            </div>
        </div>
    </section>

    <!-- footer-->
    <footer class="py-lg-5 bg-dark ">
        <div class="container">
            <p class="m-0 text-center text-light">Copyright &copy; Nakhon Pathom
                Rajabhat University 2021</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="data/js/scripts.js"></script>

</body>
</html>