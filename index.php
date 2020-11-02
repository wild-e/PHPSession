<?php 
require 'inc/data/products.php';
require 'inc/head.php'; 
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <!-- <label for="cars">Choose quantities:</label>
                            <select name="quantities_value">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>  -->
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php 
            if (isset($_GET["add_to_cart"]) && $_GET["add_to_cart"] <> '')
            {
            $_SESSION["product"]["id"] = $_GET["add_to_cart"];
            $_SESSION["product"]["name"] = $cookie['name'];
            // $_SESSION["product"]["quantities"] = $_GET['quantities_value'];
            }}
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
