<?php
if ($_POST) {
    if ($_POST['num1'] > $_POST['num2']) {
        $max = $_POST['num1'];
        $min = $_POST['num2'];
    } else {
        $max = $_POST['num2'];
        $min = $_POST['num1'];
    }
    if ($max < $_POST['num3']) {
        $max = $_POST['num3'];
    }
    elseif($min > $_POST['num3'])
    {
        $min = $_POST['num3'];
    }
    $message = "<div class='alert alert-success'><h3> Max Number Is <span class='text-danger'>$max</span> And Min Number Is <span class='text-danger'>$min</span></h3></div>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calculate Max Min</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-success">Calculate Max & Min</h1>
                    </div>
                    <div class="col-12">
                        <form method="post" class="form">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Number 1</label>
                                <input type="number" name="num1" id="num1" class="form-control" value="<?=isset($_POST['num1'])? $_POST['num1']:''?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Number 2</label>
                                <input type="number" name="num2" id="num2" class="form-control" value="<?=isset($_POST['num2'])? $_POST['num2']:''?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="num3" class="form-label">Number 3</label>
                                <input type="number" name="num3" id="num3" class="form-control" value="<?=isset($_POST['num3'])? $_POST['num3']:''?>" placeholder="">
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