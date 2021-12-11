<?php
session_start();
if ($_POST) {
    $_SESSION['Q1']=$_POST['Q1'];
    $_SESSION['Q2']=$_POST['Q2'];
    $_SESSION['Q3']=$_POST['Q3'];
    $_SESSION['Q4']=$_POST['Q4'];
    $_SESSION['Q5']=$_POST['Q5'];
    header('Location: result.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Reviews</title>
</head>

<body>
    <div class="row">
        <div class="col-3 m-auto text-center mt-5">
            <h1 class="text-dark">Hospital Survey</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-5 m-auto text-center mt-5">
            <form action="" method="post">
                <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm mb-0">
                    <thead>
                        <tr class="text-dark text-center">
                            <th>Questions</th>
                            <th>Bad</th>
                            <th>Good</th>
                            <th>Very Good</th>
                            <th>Excellent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center text-secondary">
                            <th scope="row">Are You Satisfied With The Level Of Cleanliness ?</th>
                            <td><input class="form-check-input" type="radio" name="Q1" value="0" checked></td>
                            <td><input class="form-check-input" type="radio" name="Q1" value="3"></td>
                            <td><input class="form-check-input" type="radio" name="Q1" value="5"></td>
                            <td><input class="form-check-input" type="radio" name="Q1" value="10"></td>
                        </tr>
                        <tr class="text-center text-secondary">
                            <th scope="row">Are You Satisfied With The Service Prices ?</th>
                            <td><input class="form-check-input" type="radio" name="Q2" value="0" checked></td>
                            <td><input class="form-check-input" type="radio" name="Q2" value="3"></td>
                            <td><input class="form-check-input" type="radio" name="Q2" value="5"></td>
                            <td><input class="form-check-input" type="radio" name="Q2" value="10"></td>
                        </tr>
                        <tr class="text-center text-secondary">
                            <th scope="row">Are You Satisfied With The Nursing Service ?</th>
                            <td><input class="form-check-input" type="radio" name="Q3" value="0" checked></td>
                            <td><input class="form-check-input" type="radio" name="Q3" value="3"></td>
                            <td><input class="form-check-input" type="radio" name="Q3" value="5"></td>
                            <td><input class="form-check-input" type="radio" name="Q3" value="10"></td>
                        </tr>
                        <tr class="text-center text-secondary">
                            <th scope="row">Are You Satisfied With The Level Of The Doctor ?</th>
                            <td><input class="form-check-input" type="radio" name="Q4" value="0" checked></td>
                            <td><input class="form-check-input" type="radio" name="Q4" value="3"></td>
                            <td><input class="form-check-input" type="radio" name="Q4" value="5"></td>
                            <td><input class="form-check-input" type="radio" name="Q4" value="10"></td>
                        </tr>
                        <tr class="text-center text-secondary">
                            <th scope="row">Are You Satisfied With The Calmness In The Hospital ?</th>
                            <td><input class="form-check-input" type="radio" name="Q5" value="0" checked></td>
                            <td><input class="form-check-input" type="radio" name="Q5" value="3"></td>
                            <td><input class="form-check-input" type="radio" name="Q5" value="5"></td>
                            <td><input class="form-check-input" type="radio" name="Q5" value="10"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-dark w-100 mt-0">Result</button>
            </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>