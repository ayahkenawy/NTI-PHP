<?php
session_start();
?>
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
        <div class="col-12 text-center mt-5">
            <h1 class="text-success">Result</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 text-left m-auto">
            <table class="table table-striped">
                <thead>
                    <tr class="text-success text-center fs-5">
                        <th colspan="3">Subscriber</th>
                        <th colspan="3"><?= $_SESSION['Subscriber'] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalPrice = 0;
                    $football = 0;
                    $swimming = 0;
                    $vollyball = 0;
                    $others = 0;
                    for ($i = 0; $i < $_SESSION['familyCount']; $i++) {
                        $priceForMember = 0; ?>
                        <tr>
                            <th scope="row"><?= $_SESSION['memberName'][$i] ?></th>
                            <?php
                            if (!empty($_SESSION['football'])) {
                                if (in_array('football' . $i, $_SESSION['football'])) {
                                    $priceForMember += 300;
                                    $football += 300; ?>
                                    <td>Football</td>
                                <?php } else { ?>
                                    <td>None</td>
                                <?php
                                }
                            }
                            if (!empty($_SESSION['swimming'])) {
                                if (in_array('swimming' . $i, $_SESSION['swimming'])) {
                                    $priceForMember += 250;
                                    $swimming += 250; ?>
                                    <td>Swimming</td>
                                <?php } else { ?>
                                    <td>None</td>
                                <?php
                                }
                            }
                            if (!empty($_SESSION['vollyball'])) {
                                if (in_array('vollyball' . $i, $_SESSION['vollyball'])) {
                                    $priceForMember += 150;
                                    $vollyball += 150; ?>
                                    <td>Vollyball</td>
                                <?php } else { ?>
                                    <td>None</td>
                                <?php
                                }
                            }
                            if (!empty($_SESSION['others'])) {
                                if (in_array('others' . $i, $_SESSION['others'])) {
                                    $priceForMember += 100;
                                    $others += 100; ?>
                                    <td>Others</td>
                                <?php } else { ?>
                                    <td>None</td>
                            <?php }
                            } ?>
                            <td><?= $priceForMember ?></td>

                        </tr>
                    <?php
                        $totalPrice += $priceForMember;
                    } ?>
                    <tr>
                        <th colspan="5">Total Price For All Members</th>
                        <td colspan="2"><?= $totalPrice ?></td>
                    </tr>
                    <tr>
                        <th colspan="5">Football</th>
                        <td colspan="2"><?= $football ?></td>
                    </tr>
                    <tr>
                        <th colspan="5">Swimming</th>
                        <td colspan="2"><?= $swimming ?></td>
                    </tr>
                    <tr>
                        <th colspan="5">Vollyball</th>
                        <td colspan="2"><?= $vollyball ?></td>
                    </tr>
                    <tr>
                        <th colspan="5">Others</th>
                        <td colspan="2"><?= $others ?></td>
                    </tr>
                    <tr>
                        <th colspan="5">Club Subscription</th>
                        <td colspan="2">20000</td>
                    </tr>
                    <tr>
                        <th colspan="5">Total</th>
                        <td colspan="2"> <?= $totalPrice + 20000 ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>