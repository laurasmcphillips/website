<!doctype html>
<html lang="en">
<head>
    <title>Just Brew It</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="sticky-top">
        <div class="navbar navbar-expand-md py-4">
            <div class="container">
                <a href="#">
                    <i class="fa-solid fa-mug-hot fa-2x px-2"></i>
                </a>
                <a href="#intro" class="navbar-brand">
                    <span class="fw-bold">
                        Just Brew It
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Products</a>
                            <ul class="dropdown-menu dropdown-menu">
                                <li><a class="dropdown-item" href="machines.php">Coffee Machines</a></li>
                                <li><a class="dropdown-item" href="coffee.php">Coffee Beans</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="subscriptions.php">Subscriptions</a>
                        </li>
                        <li  class="navbar-item mx-2 my-1">
                            <a href="login.php"><button type="button" class="btn btn-outline-danger">Login</button></a>
                        </li>
                        <li  class="navbar-item mx-2 my-1">
                            <a href="signup.php"><button type="button" class="btn btn-danger">Sign-Up</button></a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="#"><img src="../images/cart.png" alt="Shopping Cart" width="40px"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>