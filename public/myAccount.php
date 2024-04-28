<?php
require_once "../templates/header_login.php";
require_once ('../src/clean.php');


$clean = new clean();
function getUserDetails($email) {
    try {
        require_once '../src/DBconnect.php';

        $sql = "SELECT * FROM Customers WHERE email = :email";

        $statement = $connection->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $userDetails = $statement->fetch(PDO::FETCH_ASSOC);
        return $userDetails;

    } catch(PDOException $error) {
        echo "Error: " . "<br>" . $error->getMessage();
        return null;
    }
}

// Get user details based on the email stored in the session
$userDetails = getUserDetails($_SESSION['email']);

?>
<div class="container-fluid my-5">
    <h1 class="display-1 text-center mt-4 ">Account Details</h1>
    <table class="my-5 mx-auto">
        <thead>
        <tr>
            <th>Email Address</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Address 2</th>
            <th>City</th>
            <th>County</th>
            <th>Eircode</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $clean->cleanData($userDetails["email"]); ?></td>
                <td><?php echo $clean->cleanData($userDetails["firstname"]); ?></td>
                <td><?php echo $clean->cleanData($userDetails["lastname"]); ?></td>
                <td><?php echo $clean->cleanData($userDetails["phonenum"]); ?></td>
                <td><?php echo $clean->cleanData($userDetails["address"]); ?></td>
                <td><?php echo $clean->cleanData($userDetails["address2"]); ?> </td>
                <td><?php echo $clean->cleanData($userDetails["city"]); ?> </td>
                <td><?php echo $clean->cleanData($userDetails["county"]); ?> </td>
                <td><?php echo $clean->cleanData($userDetails["eircode"]); ?> </td>
            </tr>
        </tbody>
    </table>
<?php
require_once "../templates/footer.php";
?>

