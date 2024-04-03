<?php
require_once "../templates/header.php";
?>
    <h1 class="display-1 text-center mt-4 ">Login</h1>
<div class="container-fluid col-lg-4 my-5">
    <h4 class="my-3">Already a member? Please sign in</h4>
    <form action="" class="needs-validation" novalidate>
        <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-danger py-2 px-5" type="submit">Sign in</button>
        <hr>
        <h4 class="my-3">Or register today!</h4>
        <a href="signup.php" <button class="btn btn-outline-danger my-4 py-2 px-5" type="submit">Register</button></a>
    </form>
</div>

<?php
require_once "../templates/footer.php";
?>