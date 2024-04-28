<?php
require_once "../templates/header.php";
?>
    <section class="bg-light text-center p-5">
        <div class="container-fluid">
            <div class="row text-muted text-center">
                <div class="col m-4">
                    <h1 class="display-1 text-center mt-4 ">Subscriptions</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card card-1 py-4 mx-auto my-3">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4 fw-bold">Monthly Subscription</h5>
                            <h1 class="display-3">&euro;24.99</h1>
                            <ul class="list-unstyled">
                                <li class="fw-bold py-3 card-list-item">Over 10 Varieties of Coffee</li>
                                <li class="fw-bold py-3 card-list-item">Monthly Mug</li>
                            </ul>
                            <button type="button" class="btn btn-outline-danger">Add to Basket</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-2 py-4 mx-auto my-3">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4 fw-bold">Annual Subscription</h5>
                            <h1 class="display-3">&euro;299.99</h1>
                            <ul class="list-unstyled">
                                <li class="fw-bold py-3 card-list-item">Over 15 Varieties of Coffee</li>
                                <li class="fw-bold py-3 card-list-item">Monthly Mug</li>
                                <li class="fw-bold py-3 card-list-item">10% off all products</li>
                            </ul>
                            <button type="button" class="btn btn-outline-light">Add to Basket</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-3 py-4 mx-auto my-3">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4 fw-bold">One off Month</h5>
                            <h1 class="display-3">&euro;29.99</h1>
                            <ul class="list-unstyled">
                                <li class="fw-bold py-3 card-list-item">Over 10 Varieties of Coffee</li>
                                <li class="fw-bold py-3 card-list-item">Monthly Mug</li>
                            </ul>
                            <button type="button" class="btn btn-outline-danger">Add to Basket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once "../templates/footer.php";
?>