<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <!-- Switcher scripts -->
    <script src="assets/scripts/switcher.js"></script>
    
    <!-- Ajax -->      
    <script src="assets/scripts/ajax.js"></script>
    
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    <title>Product Add</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a href="/addproduct" class="navbar-brand text-light">Product Add</a>
    </nav>

    <main>
        <section class="inputs">
            <form action="assets/app/form_process" method="post" class="product_form" id="product_form">

                <fieldset>
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" id="sku" value="" required placeholder="Please, provide SKU" class="fixed-required" autofocus maxlength="15" pattern="^[a-zA-Z0-9]*$">
                </fieldset>
                <div id="sku_response"></div>

                <fieldset>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="" required placeholder="Please, provide name" class="fixed-required" maxlength="15" pattern="^[a-zA-Z0-9]*$">
                </fieldset>

                <fieldset>
                    <label for="price">Price ($)</label>
                    <input type="number" name="price" id="price" value="" required placeholder="Please, provide price" class="fixed-required">
                </fieldset>

                <fieldset>
                    <label for="switcher">Type Switcher</label>
                    <select name="switcher" id="productType" onchange="showDiv(this); requiredInputs(this); clearNonRequiredTextInputs();" required>
                        <option value="" selected disabled hidden>Type Switcher</option>
                        <option value="Dvd">DVD</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Book">Book</option>
                    </select>
                </fieldset>

            <div id="DVD">
                <fieldset class="gap">
                    <label for="size">Size (MB)</label>
                    <input type="number" name="size" id="size" value="" placeholder="Please, provide size">
                </fieldset>
                <span>*Product description*</span>
            </div>

            <div id="Furniture">
                <fieldset>
                    <label for="height">Height (CM)</label>
                    <input type="number" name="height" id="height" value="" placeholder="Please, provide height">
                </fieldset>

                <fieldset>
                    <label for="width">Width (CM)</label>
                    <input type="number" name="width" id="width" value="" placeholder="Please, provide width">
                </fieldset>

                <fieldset>
                    <label for="length">Lenght (CM)</label>
                    <input type="number" name="lenght" id="length" value="" placeholder="Please, provide lenght">
                </fieldset>
                <span>*Product description*</span>
            </div>

            <div id="Book">
                <fieldset>
                    <label for="weight">Weight (KG)</label>
                    <input type="number" name="weight" id="weight" value="" placeholder="Please, provide weight">
                </fieldset>
                <span>*Product description*</span>
            </div>
            <div class="btns">
                <input type="submit" class="btn btn-light mr-3" id="save" value="Save"></input>
                <a href="/" class="btn btn-light">Cancel</a>
            </div>
        </form>

        </section>
    </main>

    <footer class="text-center bg-dark pt-5 pb-5">
        <span class="text-light footer-text">Scandiweb Test assignment</span>
    </footer>

</body>

</html>