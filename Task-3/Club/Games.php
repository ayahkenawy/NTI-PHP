<?php
session_start();
if ($_POST) {
    $errors = [];
    $football = [];
    $swimming = [];
    $vollyball = [];
    $others = [];
    for ($i = 0; $i < $_SESSION['familyCount']; $i++) {
        if (empty($_POST['memberName'][$i])) {
            $errors['memberName' . $i] = "<div class='alert alert-danger'> Member $i Is Required </div>";
        }
    }
    if (empty($errors)) {
        for ($i = 0; $i < $_SESSION['familyCount']; $i++) {

            $_SESSION['memberName'] = $_POST['memberName'];
            if (isset($_POST['football' . $i])) {
                array_push($football,'football' . $i);
            }
            if (isset($_POST['swimming' . $i])) {
                array_push($swimming,'swimming' . $i);
            }
            if (isset($_POST['vollyball' . $i])) {
                array_push($vollyball,'vollyball' . $i);
            }
            if (isset($_POST['others' . $i])) {
                array_push($others,'others' . $i);
            }
        }
        $_SESSION['football'] = $football;
        $_SESSION['swimming'] = $swimming;
        $_SESSION['vollyball'] = $vollyball;
        $_SESSION['others'] = $others;
        // print_r($_SESSION['football']);
        // print_r($_SESSION['swimming']);
        // print_r($_SESSION['vollyball']);
        // print_r($_SESSION['others']);
        header('Location: Result.php');
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Games</title>
</head>

<body>
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="text-success">Games</h1>
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
                <?php
                for ($i = 0; $i < $_SESSION['familyCount']; $i++) { ?>
                    <div class="mb-3">
                        <h1 class="text-center text-success">MEMBER <?= $i ?></h1>
                        <label for="memberName" class="form-label">Member Name</label>
                        <input type="text" class="form-control" name="memberName[]" placeholder="Member Name">
                        <input class="form-check-input mt-3 form-control" type="checkbox" name="football<?= $i ?>">Football(300L.E)
                        <input class="form-check-input mt-3 form-control" type="checkbox" name="swimming<?= $i ?>">Swimming(250L.E)
                        <input class="form-check-input mt-3 form-control" type="checkbox" name="vollyball<?= $i ?>">Vollyball(150L.E)
                        <input class="form-check-input mt-3 form-control" type="checkbox" name="others<?= $i ?>">Others(100L.E)
                    </div>
                <?php }
                ?>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Check Price</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>