<?php
require_once ('../src/clean.php');
$clean = new clean();
if (isset($_POST['submit'])) {
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
                "email" => $clean->cleanData($_POST['email']),
                "firstname" => $clean->cleanData($_POST['firstname']),
                "lastname" => $clean->cleanData($_POST['lastname']),
                "password" => $_POST['password'],
                "phonenum" => $clean->cleanData($_POST['phonenum']),
                "address" => $clean->cleanData($_POST['address']),
                "address2" => $clean->cleanData($_POST['address2']),
                "city" => $clean->cleanData($_POST['city']),
                "county" => $clean->cleanData($_POST['county']),
                "eircode" => $clean->cleanData($_POST['eircode'])
        );
        $sql = "INSERT INTO Customers (" . implode(', ', array_keys($new_user)).") values (:". implode(', :', array_keys($new_user)).")";

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

include "../templates/header.php";

if (isset($_POST['submit']) && $statement){
    echo "Welcome " . $new_user['firstname'];
}
?>

    <div class="container-fluid col-lg-4 my-5">
        <h1 class="display-1 text-center mb-5">Sign-Up</h1>
        <form method="POST" class="row g-3 needs-validation">
            <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-6">
                <label for="phonenum" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phonenum" placeholder="+353" name="phonenum" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-12">
                <label for="address2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor" required>
            </div>
            <div class="col-md-5">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-4">
                <label for="county" class="form-label">County</label>
                <select id="county" class="form-select" name="county" required>
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
                <input type="text" class="form-control" name="eircode" id="eircode">
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-danger text-light">Sign-up</button>
            </div>
        </form>
    </div>

<?php
require_once "../templates/footer.php";
?>