<?php
if ($_POST) {
    $errors = [];
    if (empty($_POST['clientName'])) {
        $errors['clientName'] = "<div class='alert alert-danger'> Name Is Required </div>";
    }
    if (empty($_POST['noProducts'])) {
        $errors['noProducts'] = "<div class='alert alert-danger'> No Of Products Is Required </div>";
    }
} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="text-danger">Super Market</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3 text-center m-auto">
            <?php
            if (!empty($errors)) {
                foreach ($errors as $msg) {
                    echo $msg;
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-left m-auto">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="clientName" class="form-label">Client Name :</label>
                    <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Client Name" value="<?= isset($_POST['clientName']) ? $_POST['clientName'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City :</label>
                    <select name="city" id="city" class="form-control">
                        <option value="Giza">Giza</option>
                        <option value="Alex">Alex</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="noProducts" class="form-label">No Of Products :</label>
                    <input type="number" class="form-control" id="noProducts" name="noProducts" placeholder="Products" value="<?= isset($_POST['noProducts']) ? $_POST['noProducts'] : '' ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger" name="formOne">Enter Products</button>
                </div><?php if (empty($errors)) { ?>
                    <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($_POST) {
                                if ($_POST['city'] == "Giza") {
                                    $delivery = 30;
                                } elseif ($_POST['city'] == "Cairo") {
                                    $delivery = 0;
                                } elseif ($_POST['city'] == "Alex") {
                                    $delivery = 50;
                                } else {
                                    $delivery = 100;
                                }
                                for ($i = 1; $i <= $_POST['noProducts']; $i++) {
                                    $noProducts = $_POST['noProducts'];  ?>
                                    <tr>
                                        <td scope="row"><input type="text" name="productName[]" id="productName"></td>
                                        <td><input type="number" name="productPrice[]" id="productPrice"></td>
                                        <td><input type="number" name="productQuantity[]" id="productQuantity"></td>
                                    </tr>
                            <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php if ($_POST) {
                                if (isset($_POST['formTwo'])) { ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $Totalprice = 0;
                                    for ($i = 0; $i < $_POST['noProducts']; $i++) {
                                        $Totalprice +=  $_POST['productPrice'][$i] * $_POST['productQuantity'][$i]; ?>
                                        <tr>
                                            <td><?= $_POST['productName'][$i] ?></td>
                                            <td><?= $_POST['productPrice'][$i] ?></td>
                                            <td><?= $_POST['productQuantity'][$i] ?></td>
                                        </tr>
                            <?php }
                                    if ($Totalprice < 1000) {
                                        $discount = 0;
                                        $totalAfterDiscount = ($discount * $Totalprice) + $Totalprice;
                                        $netTotal = $totalAfterDiscount + $delivery;
                                    } elseif ($Totalprice < 3000) {
                                        $discount = .1;
                                        $totalAfterDiscount = ($discount * $Totalprice) + $Totalprice;
                                        $netTotal = $totalAfterDiscount + $delivery;
                                    } elseif ($Totalprice < 4500) {
                                        $discount = .15;
                                        $totalAfterDiscount = ($discount * $Totalprice) + $Totalprice;
                                        $netTotal = $totalAfterDiscount + $delivery;
                                    } elseif ($Totalprice > 4500) {
                                        $discount = .2;
                                        $totalAfterDiscount = ($discount * $Totalprice) + $Totalprice;
                                        $netTotal = $totalAfterDiscount + $delivery;
                                    }
                                }
                            }; ?>
                                </tbody>
                            </table>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger" name="formTwo">Receipt</button>
                            </div>
                        <?php  } ?>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-left m-auto">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Client Name</th>
                        <td><?= isset($_POST['clientName']) ? $_POST['clientName'] : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">City</th>
                        <td><?= isset($_POST['city']) ? $_POST['city'] : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td><?= isset($Totalprice) ?  $Totalprice : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Discount</th>
                        <td><?= isset($discount) ?  $discount : ''  ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Total After Discount</th>
                        <td><?= isset($totalAfterDiscount) ? $totalAfterDiscount : ''  ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Delivery</th>
                        <td><?= isset($delivery) ? $delivery : ''  ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Net Total</th>
                        <td><?= isset($netTotal) ? $netTotal : ''  ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <?php if (empty($errors)) { ?>
    <div class="row">
        <div class="col-4 text-left m-auto">
            <form action="" method="post">
                <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                    <thead class="thead-inverse|thead-default">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantities</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i <= $_POST['noProducts']; $i++) { ?>
                            <tr>
                                <td scope="row"><input type="text" name="productName" id="productName"></td>
                                <td><input type="number" name="productPrice" id="productPrice"></td>
                                <td><input type="number" name="productQuantity" id="productQuantity"></td>
                            </tr>
                            <?php }
                            if ($_POST) {
                                print_r(isset($_POST['productName']));
                            }; ?>

                        </tbody>
                </table>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger" name="formTwo">Receipt</button>
                </div>
            </form>
        </div>
    </div>
                          <?php  } ?> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>