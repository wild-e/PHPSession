<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <!-- <div class="row"> -->
        <h1> Qu'est-ce qu'on mange ?</h1>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="assets/img/product-<?=$_SESSION["product"]["id"]?>.jpg" alt="<?=$_SESSION["product"]["name"]?>">
            <div class="card-body">
            <h5 class="card-title"><?=$_SESSION["product"]["name"]?></h5>
            <p> Produit n° <?=$_SESSION["product"]["id"]?> sélectionné</p>
        </div>
    </div>
    <!-- </div> -->
</section>
<?php require 'inc/foot.php'; ?>
