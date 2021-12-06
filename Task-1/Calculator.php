<?php
if ($_POST) {
    switch ($_POST['btn']) {
        case 'plus':
            $result = $_POST['num1']+$_POST['num2'];
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'minus':
            $result = $_POST['num1']-$_POST['num2'];
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'multi':
            $result = $_POST['num1']*$_POST['num2'];
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'div':
            $result = $_POST['num1']/$_POST['num2'];
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'remainder':
            $result = $_POST['num1']%$_POST['num2'];
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'power':
            $result = $_POST['num1']**$_POST['num2'];
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'sin':
            $result = round(sin($_POST['num1']),2);
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
        case 'cos':
            $result = round(cos($_POST['num1']),2);
            $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
            break;
    }
   // $message = "<div class='alert alert-success'><h3>{$_POST['btn']} For <span class='text-danger'>{$_POST['num1']}</span> And <span class='text-danger'>{$_POST['num2']}</span> Equal <span class='text-danger'>$result</span></h3></div>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-success">Calculator</h1>
                    </div>
                    <div class="col-12">
                        <form method="post" class="form">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Number 1</label>
                                <input type="number" name="num1" id="num1" class="form-control" value="<?= isset($_POST['num1']) ? $_POST['num1'] : '' ?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Number 2</label>
                                <input type="number" name="num2" id="num2" class="form-control" value="<?= isset($_POST['num2']) ? $_POST['num2'] : '' ?>" placeholder="">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="plus">+</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="minus">-</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="multi">*</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="div">/</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="remainder">%</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="power">^</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="sin">Sin</button>
                                <button class="btn btn-success w-25 h-25 m-2" name="btn" value="cos">Cos</button>
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