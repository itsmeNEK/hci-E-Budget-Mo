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
    <title>E Budget MO | Accounting Office</title>

</head>

<body>
    <div class="row" style="height: 100%;">
        <div class="col-2 p-0">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-danger h-100 w-100">
                <div class="mx-auto align-items-center">
                    <img src="../../assets/images/logo.png" class="rounded w-100" alt="">
                </div>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white" aria-current="page">
                            <i class="bi bi-file-plus-fill me-1"></i>
                            Receive Document
                        </a>
                    </li>
                    <li>
                        <a href="status.php" class="nav-link text-white active">
                            <i class="bi bi-card-list"></i>
                            Document Status
                        </a>
                    </li>
                    <li>
                        <a href="track.php" class="nav-link text-white">
                            <i class="bi bi-bell"></i>
                            Track Document
                        </a>
                    </li>
                    <hr>
                    <li>

                        <a href="login.php" class="nav-link text-white">
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
                <h2 class="text-center">Accounting Office</h2>
                <div class="row mt-5 justify-content-center">
                    <div class=" w-75 table-responsive table-primary">
                        <table class="table table-primary">
                            <thead>
                                <tr class="table-secondary text-uppercase">
                                    <th scope="col">ID</th>
                                    <th scope="col">Deparmtment</th>
                                    <th scope="col">OFfice</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td> <span class="badge text-bg-dark">Status</span> </td>
                                </tr>
                                <tr>
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td> <span class="badge text-bg-dark">Status</span> </td>
                                </tr>
                                <tr>
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td> <span class="badge text-bg-dark">Status</span> </td>
                                </tr>
                                <tr>
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td> <span class="badge text-bg-dark">Status</span> </td>
                                </tr>
                                <tr>
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                    <td> <span class="badge text-bg-dark">Status</span> </td>
                                </tr>
                            </tbody>
                        </table>
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