<?php
require_once "../templates/header.php";
?>
    <div class="position-relative main overflow-hidden p-md-5 m-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-1 fw-normal text-white">Why Wait?</h1>
            <p class="h2 font-weight-normal text-light">Start your day off in the best possible way!</p>
            <a class="btn btn-danger text-light" href="subscriptions.php">Subscribe Today!</a>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal my-3 pl-md-3">
        <div class="bg-dark mr-3 pt-2 px-2 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Machines</h2>
                <a class="btn btn-danger text-light" href="machines.php">Explore more</a>
            </div>
            <div class="bg-light home-img box-shadow mx-auto">
                <img src="../images/nespresso.jpg" class="card-img-top" alt="image of coffee machine">

            </div>
        </div>
        <div class="bg-light mr-3 pt-2 px-2 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Coffee Beans</h2>
                <a class="btn btn-danger text-light" href="coffee.php">Explore more</a>
            </div>
            <div class="bg-dark home-img box-shadow mx-auto">
                <img src="../images/blue_beans.png" class="card-img-top" alt="image of coffee beans">
            </div>
        </div>
    </div>
<?php
require_once "../templates/footer.php";
?>