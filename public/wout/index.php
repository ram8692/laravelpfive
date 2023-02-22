<?php

$combinations = [[]];
$one_input = $two_input = $three_input = $four_input = $five_input = $six_input = $seven_input = $eight_input = '';
if (!empty($_POST)) {
    $onearr = $twoarr = $threearr = $fourarr = $fivearr = $sixarr = $sevenarr = $eightarr = [];

    $one_input = !empty($_POST['one_input']) ? $_POST['one_input'] : '';
    $two_input = !empty($_POST['two_input']) ? $_POST['two_input'] : '';
    $three_input = !empty($_POST['three_input']) ? $_POST['three_input'] : '';
    $four_input = !empty($_POST['four_input']) ? $_POST['four_input'] : '';
    $five_input = !empty($_POST['five_input']) ? $_POST['five_input'] : '';
    $six_input = !empty($_POST['six_input']) ? $_POST['six_input'] : '';
    $seven_input = !empty($_POST['seven_input']) ? $_POST['seven_input'] : '';
    $eight_input = !empty($_POST['eight_input']) ? $_POST['eight_input'] : '';

    if (!empty($_POST['one_input'])) {
        $onearr = preg_split('/\r\n|[\r\n]/', $_POST['one_input']);
    }
    if (!empty($_POST['two_input'])) {
        $twoarr = preg_split('/\r\n|[\r\n]/', $_POST['two_input']);

        if (!empty($_POST['three_input'])) {
            $threearr = preg_split('/\r\n|[\r\n]/', $_POST['three_input']);
        }

        if (!empty($_POST['four_input'])) {
            $fourarr = preg_split('/\r\n|[\r\n]/', $_POST['four_input']);
        }

        if (!empty($_POST['five_input'])) {
            $fivearr = preg_split('/\r\n|[\r\n]/', $_POST['five_input']);
        }

        if (!empty($_POST['six_input'])) {
            $sixarr  = preg_split('/\r\n|[\r\n]/', $_POST['six_input']);
        }

        if (!empty($_POST['seven_input'])) {
            $sevenarr = preg_split('/\r\n|[\r\n]/', $_POST['seven_input']);
        }

        if (!empty($_POST['eight_input'])) {
            $eightarr = preg_split('/\r\n|[\r\n]/', $_POST['eight_input']);
        }

        $data = [
            $onearr,
            $twoarr,
            $threearr,
            $fourarr,
            $fivearr,
            $sixarr,
            $sevenarr,
            $eightarr,
        ];

        $data = array_values(array_filter($data));

        $length = count($data);

        for ($count = 0; $count < $length; $count++) {
            $tmp = [];
            foreach ($combinations as $v1) {
                foreach ($data[$count] as $v2)
                    $tmp[] = array_merge($v1, [$v2]);
            }
            $combinations = $tmp;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>SST Designs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        color: #f5f6f7;
    }

    p {
        font-size: 16px;
    }

    .margin {
        margin-bottom: 45px;
    }

    .bg-1 {
        background-color: #1abc9c;
        /* Green */
        color: #ffffff;
    }

    .bg-2 {
        background-color: #474e5d;
        /* Dark Blue */
        color: #ffffff;
    }

    .bg-3 {
        background-color: #ffffff;
        /* White */
        color: #555555;
    }

    .bg-4 {
        background-color: #2f2f2f;
        /* Black Gray */
        color: #fff;
    }

    .container-fluid {
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        letter-spacing: 5px;
    }

    .navbar-nav li a:hover {
        color: #1abc9c !important;
    }

    textarea {
        color: black;
        border-radius: 20px;
    }

    .bg-dark {
        background-color: black;
        border-radius: 20px;
        border: 4px;
        padding: 10px;
    }

    .text-white {
        color: white;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Just SST Designs</a>
            </div>

        </div>
    </nav>

    <!-- First Container -->
    <!-- <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Who Am I?</h3>
        <img src="https://images.unsplash.com/photo-1516876437184-593fda40c7ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>I'm an adventurer</h3>
    </div> -->

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="one_input" id="" cols="25" rows="6"
                        required><?= $one_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="two_input" id="" cols="25" rows="6"
                        required><?= $two_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="three_input" id="" cols="25"
                        rows="6"><?= $three_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="four_input" id="" cols="25"
                        rows="6"><?= $four_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="five_input" id="" cols="25"
                        rows="6"><?= $five_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="six_input" id="" cols="25"
                        rows="6"><?= $six_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="seven_input" id="" cols="25"
                        rows="6"><?= $seven_input ?></textarea>
                </div>
                <div class="col-md-4">
                    <textarea placeholder="Enter Some Text Here" name="eight_input" id="" cols="25"
                        rows="6"><?= $eight_input ?></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="btn btn-success btn-lg btn-block" name="fsubmit">

        </form>
    </div>
    </div>
    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center">
        <h2>Result</h2>
        <div class="container p-5 my-5 ">
            <textarea name="" id="" cols="85" rows="10" readonly><?php
            // print_r($combinations);
            $newcomarr = [];
            foreach ($combinations as $key => $combs) {
                $newcomarr[$key] = implode(' ', $combs);
                //echo trim($newcomarr[$key].'&#13;&#10;');
                // echo '<p>';
                 foreach ($combs as $com) {
                     echo $com . ' ';
                 }
                 echo '&#13;&#10;';
            }?></textarea>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="randomize">Ramdomize Line</button>
            <div class=" bg-3 text-center">
                <h2>Result Linewise</h2>
                <textarea class="contain" name="" id="" cols="40" rows="10" readonly>

                </textarea>
            </div>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="randomizec">Ramdomize Comma</button>
            <div class=" bg-3 text-center">
                <h2>Result Commawise</h2>

                <textarea class="containc" name="" id="" cols="40" rows="10" readonly>
                </textarea>

            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p>Created by Ram With 💖</a></p>
    </footer>
    <script>
    $(document).ready(function() {
        $('#randomize').click(function() {
            var combarr = <?= !empty($newcomarr) ? json_encode($newcomarr) : ''; ?>;
            if (combarr) {
                combarr = JSON.stringify(combarr);
                $.ajax({
                    url: "shuffle.php",
                    type: "post",
                    data: {
                        data: combarr
                    },
                    dataType: "JSON",
                    success: function(response) {

                        $(".contain").val('');
                        var nv = '';
                        response.forEach(function(rrandoma) {
                            nv +=  rrandoma+'\n';
                        });
                        $(".contain").val(nv);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            } else {
                alert('Please Enter Some Valid Input');
            }
        });

        $('#randomizec').click(function() {
            var combarr = <?= !empty($newcomarr) ? json_encode($newcomarr) : ''; ?>;
            if (combarr) {
                combarr = JSON.stringify(combarr);
                $.ajax({
                    url: "shuffle.php",
                    type: "post",
                    data: {
                        data: combarr
                    },
                    dataType: "JSON",
                    success: function(response) {

                        $(".containc").val('');
                        var nvc = '';
                        response.forEach(function(rrandoma) {
                            nvc +=  rrandoma+', ';
                        });
                        $(".containc").val(nvc);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            } else {
                alert('Please Enter Some Valid Input');
            }
        });

    });
    </script>

</body>

</html>