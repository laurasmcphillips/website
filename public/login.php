<?php
require "../templates/header.php";
?>
<?php
if(isset($_POST['submit'])) {
    include '../src/checkLoginDetails.php';
    $checkLoginDetails = new checkLoginDetails();
    $checkLoginDetails->loginWithDBData();
}
?>
    <h1 class="display-1 text-center mt-4 ">Login</h1>
<div class="container-fluid col-lg-4 my-5">
    <h4 class="my-3">Already a member? Please sign in</h4>
    <form method="POST" action="" class="needs-validation">
        <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-danger py-2 px-5" name="submit" type="submit">Sign in</button>
        <hr>
        <h4 class="my-3">Or register today!</h4>
        <a href="signup.php"<button class="btn btn-outline-danger my-4 py-2 px-5">Register</button></a>
    </form>
</div>

<?php
require_once "../templates/footer.php";
?>