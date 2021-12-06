<?php
if ($_POST) {
    $root = $_POST['num']** (1/$_POST['root']);
    $message = "<div class='alert alert-success'><h3>The Specific Root For <span class='text-danger'>{$_POST['num']}</span> Is <span class='text-danger'>$root</span></h3></div>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calculate Specific Root</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-success">Calculate Specific Root</h1>
                    </div>
                    <div class="col-12">
                        <form method="post" class="form">
                            <div class="mb-3">
                                <label for="num" class="form-label">Number</label>
                                <input type="number" name="num" id="num" class="form-control" value="<?=isset($_POST['num'])? $_POST['num']:''?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="root" class="form-label">Root</label>
                                <input type="number" name="root" id="root" class="form-control" value="<?=isset($_POST['root'])? $_POST['root']:''?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success">Calculate</button>
                            </div>
                        </form>
                        <?php
                        echo (isset($message)  ?  $message : '');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>