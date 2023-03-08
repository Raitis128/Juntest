<?php 
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
require_once('assets/app/Book.php');

$data = new Book();
$all = $data->fetchAll();

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    
    <!-- Ajax -->             
    <script src="assets/scripts/ajax.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    <title>Product List</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a href="/" class="navbar-brand text-light">Product List</a>
    </nav>

    <main class="main_cards">
        <section class="container">
            <form method="post" id="form">
                <div class="cards">
                    <?php foreach($all as $value) : ?>
                        <div id="<?=$value['idproduct']; ?>">
                            <label for="<?=$value['idproduct'] . "card" ?>">
                            <div class="card pb-3" style="width: 15rem;">
                                <div class="card-body">
                                <input type="checkbox" name="productid[]" value="<?=$value['idproduct']; ?>" class="mb-4 delete-checkbox" id="<?=$value['idproduct'] . "card"?>">
                                    <div class="text-center">
                                        <h6 class="card-subtitle mb-2"><?=$value['product_sku']?></h6>
                                        <h6 class="card-subtitle mb-2"><?=$value['product_name']?></h6>
                                        <h6 class="card-subtitle mb-2"><?=$value['product_price']?></h6>
                                        <h6 class="card-subtitle mb-2">
                                        <?php 
                                        if(!empty($value['product_size'])){
                                            echo 'Size: ' . $value['product_size'];
                                        } else if (!empty($value['product_weight'])){
                                            echo 'Weight: ' . $value['product_weight'];
                                        } else if (!empty($value['product_height'])){
                                            echo 'Dimensions: ' . $value['product_height'] . 'x' . $value['product_width'] . 'x' . $value['product_lenght'];
                                        }
                                        ?></h6>
                                    </div>
                                </div> 
                            </div>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="btns">
                    <a href="/addproduct" class="btn btn-light mr-3">ADD</a>
                    <button type="button" name="delete" class="btn btn-light" id="btn_delete" onclick="deleteAjax();">MASS DELETE</button>
                </div>
            </form>
        </section>
    </main>


    <footer class="text-center bg-dark pt-5 pb-5">
        <span class="text-light footer-text">Scandiweb Test assignment</span>
    </footer>

</body>

</html>