<?php
require_once "../templates/header.php";
?>
    <section class="bg-light text-center p-5">
        <div class="container-fluid">
            <div class="row text-muted text-center">
                <div class="col m-4">
                    <h1 class="display-4 mb-4">Subscriptions</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores similique aperiam, saepe error assumenda eum dolor quaerat temporibus reiciendis voluptates?</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card card-1 py-4 mx-auto my-3">
                        <div class="card-body">
                            <h5 class="text-uppercase fw-bold mb-5">Monthly Subscription</h5>
                            <h1 class="display-4">&euro;24.99</h1>
                            <ul class="list-unstyled">
                                <li class="fw-bold py-3 card-list-item">Over 10 Varieties of Coffee</li>
                                <li class="fw-bold py-3 card-list-item">Monthy Mug</li>
                            </ul>
                            <a href="#" class="btn p-2 text-uppercase fw-bold price-card-button"><button type="button" class="btn btn-outline-danger">Add to Basket</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-2 py-4 mx-auto my-3">
                        <div class="card-body">
                            <h5 class="text-uppercase fw-bold mb-5">Annual Subscription</h5>
                            <h1 class="display-4">&euro;299.99</h1>
                            <ul class="list-unstyled">
                                <li class="fw-bold py-3 card-list-item">Over 15 Varieties of Coffee</li>
                                <li class="fw-bold py-3 card-list-item">Monthy Mug</li>
                                <li class="fw-bold py-3 card-list-item">10% off all products</li>
                            </ul>
                            <a href="#" class="btn p-2 text-uppercase fw-bold price-card-button"><button type="button" class="btn btn-outline-light">Add to Basket</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-3 py-4 mx-auto my-3">
                        <div class="card-body">
                            <h5 class="text-uppercase fw-bold mb-5">One off Month</h5>
                            <h1 class="display-4">&euro;29.99</h1>
                            <ul class="list-unstyled">
                                <li class="fw-bold py-3 card-list-item">Over 10 Varieties of Coffee</li>
                                <li class="fw-bold py-3 card-list-item">Monthy Mug</li>
                            </ul>
                            <a href="#" class="btn p-2 text-uppercase fw-bold price-card-button"><button type="button" class="btn btn-outline-danger">Add to Basket</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <h2 class="text-muted mb-4">Thanks for supporting us</h2>
                <a href="#"><i class="fas fa-mug-hot fa-3x"></i></a>
            </div>
        </div>
    </section>
<?php
require_once "../templates/footer.php";
?>