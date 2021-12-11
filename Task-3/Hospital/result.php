<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Result</title>
</head>

<body>
    <div class="row">
        <div class="col-3 m-auto text-center mt-5">
            <h1 class="text-dark">Hospital Survey</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-5 m-auto text-center mt-5">
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm mb-0">
                <thead>
                    <tr class="text-dark text-center">
                        <th>Questions</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center text-secondary">
                        <th scope="row">Are You Satisfied With The Level Of Cleanliness ?</th>
                        <td class="text-dark"><?php
                                                session_start();
                                                if ($_SESSION['Q1'] == 0) {
                                                    echo "Bad";
                                                } elseif ($_SESSION['Q1'] == 3) {
                                                    echo "Good";
                                                } elseif ($_SESSION['Q1'] == 5) {
                                                    echo "Very Good";
                                                } elseif ($_SESSION['Q1'] == 10) {
                                                    echo "Excellent";
                                                }
                                                ?></td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <th scope="row">Are You Satisfied With The Service Prices ?</th>
                        <td class="text-dark"><?php
                                                if ($_SESSION['Q2'] == 0) {
                                                    echo "Bad";
                                                } elseif ($_SESSION['Q2'] == 3) {
                                                    echo "Good";
                                                } elseif ($_SESSION['Q2'] == 5) {
                                                    echo "Very Good";
                                                } elseif ($_SESSION['Q2'] == 10) {
                                                    echo "Excellent";
                                                }
                                                ?></td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <th scope="row">Are You Satisfied With The Nursing Service ?</th>
                        <td class="text-dark"><?php
                                                if ($_SESSION['Q3'] == 0) {
                                                    echo "Bad";
                                                } elseif ($_SESSION['Q3'] == 3) {
                                                    echo "Good";
                                                } elseif ($_SESSION['Q3'] == 5) {
                                                    echo "Very Good";
                                                } elseif ($_SESSION['Q3'] == 10) {
                                                    echo "Excellent";
                                                }
                                                ?></td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <th scope="row">Are You Satisfied With The Level Of The Doctor ?</th>
                        <td class="text-dark"><?php
                                                if ($_SESSION['Q4'] == 0) {
                                                    echo "Bad";
                                                } elseif ($_SESSION['Q4'] == 3) {
                                                    echo "Good";
                                                } elseif ($_SESSION['Q4'] == 5) {
                                                    echo "Very Good";
                                                } elseif ($_SESSION['Q4'] == 10) {
                                                    echo "Excellent";
                                                }
                                                ?></td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <th scope="row">Are You Satisfied With The Calmness In The Hospital ?</th>
                        <td class="text-dark"><?php
                                                if ($_SESSION['Q5'] == 0) {
                                                    echo "Bad";
                                                } elseif ($_SESSION['Q5'] == 3) {
                                                    echo "Good";
                                                } elseif ($_SESSION['Q5'] == 5) {
                                                    echo "Very Good";
                                                } elseif ($_SESSION['Q5'] == 10) {
                                                    echo "Excellent";
                                                }
                                                ?></td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <td>Total Review</td>
                        <td class="text-dark"><?php
                                                if ($_SESSION['Q1'] + $_SESSION['Q2'] + $_SESSION['Q3'] + $_SESSION['Q4'] + $_SESSION['Q5'] <= 20) {
                                                    echo "Bad";
                                                } elseif ($_SESSION['Q1'] + $_SESSION['Q2'] + $_SESSION['Q3'] + $_SESSION['Q4'] + $_SESSION['Q5'] <= 30) {
                                                    echo "Good";
                                                } elseif ($_SESSION['Q1'] + $_SESSION['Q2'] + $_SESSION['Q3'] + $_SESSION['Q4'] + $_SESSION['Q5'] <= 40) {
                                                    echo "Very Good";
                                                } elseif ($_SESSION['Q1'] + $_SESSION['Q2'] + $_SESSION['Q3'] + $_SESSION['Q4'] + $_SESSION['Q5'] <= 50) {
                                                    echo "Excellent";
                                                }
                                                ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-5 m-auto text-center h5 text-dark"> <?php
                                                if ($_SESSION['Q1'] + $_SESSION['Q2'] + $_SESSION['Q3'] + $_SESSION['Q4'] + $_SESSION['Q5'] <= 20) {
                                                    echo "Please Contact The Patient For Find Out The Reason For Bad Review On {$_SESSION['phoneNumber']}";
                                                } elseif ($_SESSION['Q1'] + $_SESSION['Q2'] + $_SESSION['Q3'] + $_SESSION['Q4'] + $_SESSION['Q5'] <= 50) {
                                                    echo "Thank You For The Review";
                                                }
                                                ?></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>