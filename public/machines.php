<?php
    try {
        require_once '../src/DBconnect.php';

        $sql_machine = "SELECT * FROM products WHERE category = 'machine'";

        $statement = $connection->prepare($sql_machine);
        $statement->execute();
        $result = $statement->fetchAll();

    } catch(PDOException $error) {
        echo $sql_machine . "<br>" . $error->getMessage();
    }
if (isset($_POST['submit'])) {
    try {
        $productname = $_POST["productname"];
        $image = $_POST["image"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];

        $products = array(
            "productname" => $_POST['productname'],
            "image" => $_POST['image'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']

        );
        $add_sql = "INSERT INTO shoppingcart (" . implode(', ', array_keys($products)).") values (:". implode(', :', array_keys($products)).")";

        $statement = $connection->prepare($add_sql);
        $statement->execute($products);
    } catch(PDOException $error) {
        echo $add_sql . "<br>" . $error->getMessage();
    }

}
require_once "../templates/header.php";
?>
    <div class="container-fluid my-5">
        <h1 class="display-1 text-center mt-4 ">Coffee Machines</h1>
        <div class="row my-5 px-5">
            <?php
            try {
                foreach ($result as $row) {
                    echo "<div class='col-lg-4'>";
                    echo "<div class='card my-4'>";
                    echo "<div class='card-body'>";
                    echo "<form method='POST' action=''>";
                    echo "<img src=" . $row['image'] . " class='card-img-top' alt='image of coffee machine'>";
                    echo "<h5 class='card-title'>" . $row['productname'] . "</h5>";
                    echo "<p class='card-text'>" . $row['productdescription'] . "</p>";
                    echo "<h4 class='text-center my-2'>&euro;" . $row['price'] . "</h4>";
                    echo "<div class='text-center my-2'><button type='submit' name='submit' class='btn btn_add_cart btn-danger text-light text-center px-5'>Add to Cart</button></div>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
            ?>
        </div>
    </div>
<?php
require_once "../templates/footer.php";
?>