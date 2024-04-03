<?php
require_once "../templates/header.php";
?>
    <div class="container-fluid col-lg-4 my-5">
        <h1 class="display-1 text-center mb-5">Checkout</h1>
        <form class="row g-3 needs-validation" novalidate>
            <h4 class="mb-3">Personal Details</h4>
            <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" value="+353">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <h4 class="mb-3">Shipping Address</h4>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-5">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-4">
                <label for="inputCounty" class="form-label">County</label>
                <select id="inputcounty" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>Antrim</option>
                    <option>Armagh</option>
                    <option>Carlow</option>
                    <option>Cavan</option>
                    <option>Clare</option>
                    <option>Cork</option>
                    <option>Derry</option>
                    <option>Donegal</option>
                    <option>Down</option>
                    <option>Dublin</option>
                    <option>Fermanagh</option>
                    <option>Galway</option>
                    <option>Kerry</option>
                    <option>Kildare</option>
                    <option>Kilkenny</option>
                    <option>Laois</option>
                    <option>Leitrim</option>
                    <option>Longford</option>
                    <option>Louth</option>
                    <option>Mayo</option>
                    <option>Meath</option>
                    <option>Monaghan</option>
                    <option>Offaly</option>
                    <option>Roscommon</option>
                    <option>Sligo</option>
                    <option>Tipperary</option>
                    <option>Tyrone</option>
                    <option>Waterford</option>
                    <option>Westmeath</option>
                    <option>Wexford</option>
                    <option>Wicklow</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-3">
                <label for="eircode" class="form-label">Eircode</label>
                <input type="text" class="form-control" id="eircode">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Shipping Address same as Billing Address</label>
            </div>

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">PayPal</label>
                </div>
            </div>

            <div class="row gy-3">
                <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-danger">Checkout</button>
            </div>
        </form>
    </div>
<?php
require_once "../templates/footer.php";
?>