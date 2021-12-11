<?php
if ($_POST) {
    $errors = [];
    if (empty($_POST['clientName'])) {
        $errors['clientName'] = "<div class='alert alert-danger'> Name Is Required </div>";
    }
    if (empty($_POST['loanAmount'])) {
        $errors['loanAmount'] = "<div class='alert alert-danger'> Loan Amount Is Required </div>";
    }
    if (empty($_POST['loanYears'])) {
        $errors['loanYears'] = "<div class='alert alert-danger'> Loan Years Is Required </div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Bank</title>
</head>

<body>
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="text-success">BANK</h1>
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
                    <label for="clientName" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Client Name" value="<?= isset($_POST['clientName']) ? $_POST['clientName'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="loanAmount" class="form-label">Loan Amount</label>
                    <input type="number" class="form-control" id="loanAmount" name="loanAmount" placeholder="Loan Amount" value="<?= isset($_POST['loanAmount']) ? $_POST['loanAmount'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="loanYears" class="form-label">Loan Years</label>
                    <input type="number" class="form-control" id="loanYears" name="loanYears" placeholder="Loan Years" value="<?= isset($_POST['loanYears']) ? $_POST['loanYears'] : '' ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Calculate</button>
                </div>
            </form>
            <?php
            if ($_POST) {
                if (empty($errors)) { ?>
                    <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr class="text-center">
                                <th>Interset Rate</th>
                                <th>Loan After Interset</th>
                                <th>Monthly</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                        <?php
                        if ($_POST['loanYears'] < 3) {
                            $interestPerYear = .1 * $_POST['loanAmount'];
                        } else {
                            $interestPerYear = .15 * $_POST['loanAmount'];
                        }
                        $interestPerAllYears = $interestPerYear * $_POST['loanYears'];
                        $loanAfterInterset = $_POST['loanAmount'] + $interestPerAllYears;
                        $monthly = round($loanAfterInterset / (12 * $_POST['loanYears']),2);
                    }
                }
                        ?>
                        <td><?= isset($interestPerAllYears)? $interestPerAllYears:'' ?></td>
                        <td><?= isset($loanAfterInterset)? $loanAfterInterset:'' ?></td>
                        <td><?= isset($monthly)? $monthly:'' ?></td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>