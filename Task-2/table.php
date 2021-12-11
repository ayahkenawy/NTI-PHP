<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female


// collection => laravel => array of objects
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ]
    ],
    (object)[
        'id' => 3,
        'name' => 'mena',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ]
    ],

];
// $th = "";
// foreach ($users as $index => $user) {
//     if ($index == 1) {
//         break;
//     }
//     foreach ($user as $keys => $values) {
//         $th .= "<th>$keys</th>";
//     }
// }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
            <?php foreach ($users as $index => $user) {
                 if ($index == 1) {
                             break;
                       }
                foreach ($user as $keys => $values) {
                   ?>
                   <th><?=$keys?></th>
               <?php }
            } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user) {
                $hobby = "";
                $activity = "";
            ?>
                <tr>
                    <?php foreach ($user as $keys => $values) {
                        if ($keys == "gender") {
                            foreach ($values as $gender) {
                                if ($gender == 'm') {
                                    $gender = 'male';
                                } else {
                                    $gender = 'female';
                                } ?>
                                <td><?= $gender ?></td>
                            <?php
                            }
                        } elseif ($keys == "hobbies") {
                            foreach ($values as $hobbies) {
                                $hobby .= $hobbies . ' ' . ',';
                            } ?>
                            <td><?= $hobby ?></td>
                        <?php } elseif ($keys == "activities") {
                            foreach ($values as $activities) {
                                $activity .= $activities . ' ' . ',';
                            } ?>
                            <td><?= $activity ?></td>
                        <?php } else { ?>
                            <td><?= $values ?></td>
                    <?php }
                    } ?>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>