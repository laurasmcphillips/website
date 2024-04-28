<?php

class checkLoginDetails
{
    function loginWithDBData() {
        require_once ('../config.php');
        require_once ('../src/clean.php');
        $clean = new clean();
        try {
            require_once ('DBconnect.php');

            $sql = "SELECT email, password FROM customers WHERE email = :EMAIL";
            $statement = $connection->prepare($sql);
            $tmpEmail = ($clean->cleanData($_POST['email']));
            $statement->bindParam(':EMAIL', $tmpEmail, PDO::PARAM_STR);
            $statement->execute();
            $result = $statement->fetchAll();

            foreach($result as $row => $rows) {
                $email = $rows['email'];
                $pwd = $rows['password'];

                if (($_POST['email'] == $email) && ($_POST['password'] == $pwd)) {
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['Active'] = true;
                    header("location:myAccount.php");
                    exit;
                } else {
                    echo 'Incorrect Email Address or Password';
                }
            }
        } catch (Exception $e) {
            echo '<div class="messages-error">Error Logging in: ' . $e->getMessage() . '</div>';
        }
    }
}