<?php
session_start();
if ($_POST) {
    $errors = [];
    if (empty($_POST['memberName'])) {
        $errors['memberName'] = "<div class='alert alert-danger'> Name Is Required </div>";
    }
    if (empty($_POST['familyCount'])) {
        $errors['familyCount'] = "<div class='alert alert-danger'> Count Is Required </div>";
    }
    if (empty($errors)) {
        $_SESSION['familyCount']=$_POST['familyCount'];
        $_SESSION['Subscriber']=$_POST['memberName'];
        header('Location: Games.php');
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Club</title>
</head>

<body>
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="text-success">Club</h1>
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
                    <label for="memberName" class="form-label">Member Name</label>
                    <input type="text" class="form-control" id="memberName" name="memberName" placeholder="Member Name" value="<?= isset($_POST['memberName']) ? $_POST['memberName'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="familyCount" class="form-label">Count Of Family Members</label>
                    <input type="number" class="form-control" id="familyCount" name="familyCount" placeholder="Family Count" value="<?= isset($_POST['familyCount']) ? $_POST['familyCount'] : '' ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>