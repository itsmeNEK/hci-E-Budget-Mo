<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>E Budget MO | Treasury Office</title>

</head>

<body>
    <div class="row" style="height: 100%;">
        <div class="col-2 p-0">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100 w-100">
                <div class="mx-auto align-items-center">
                    <img src="../../assets/images/logo.png" class="rounded w-100" alt="">
                </div>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link " aria-current="page">
                            <i class="bi bi-card-list me-1"></i>
                            Document Status
                        </a>
                    </li>
                    <li>
                        <a href="track.php" class="nav-link">
                            <i class="bi bi-eye-fill me-1"></i>
                            Track Document
                        </a>
                    </li>
                    <li>
                        <a href="check.php" class="nav-link active">
                            <i class="bi bi-bell-fill me-1"></i>
                            Check Release
                        </a>
                    </li>
                    <hr>
                    <li>

                        <a href="login.php" class="nav-link">
                            <i class="bi bi-box-arrow-left"></i>
                            Logout
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col p-0">
            <?php include "../../layouts/navbar.php"; ?>
            <div class="container p-5">
                <h2 class="text-center">Treasury Office</h2>
                <div class="bg-light p-5 rounded mt-5">
                    <div class="row mt-5 justify-content-center text-center">
                        <div class="col">
                            <h2 class="text-center border p-2 border-3 border-dark">Project Name</h2>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-8">
                            Recieved by: <span class="border border-2 p-2">Full Name Full Name</span> <br>
                            <img src="../../assets/images/profile.png" alt="" width="500px" class="m-5 ps-5">
                        </div>
                        <div class="col mt-5">
                            <div class="row mt-5">
                                <div class="col-12">
                                    <button class="btn btn-warning w-100 mb-3">
                                        E-signature
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-success w-100">Submit</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger w-100">Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>