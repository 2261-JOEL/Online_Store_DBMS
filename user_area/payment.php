<?php
include('../includes/connect.php');
include('../functions/common_function.php');
// @session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .pay_img {
            width: 90%;
            margin: auto;
            display: block;

        }
    </style>
</head>

<body>
    <!-- php code to access user id -->
    <?php
    $user_ip = getIPAddress();
    $get_user = "select * from `users` where user_ip='$user_ip'";
    $result = mysqli_query($con, $get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];



    ?>

    <div class="container">
        <h2 class="text-center mt-3 text-primary">
            Payment Options
        </h2>
        <div class="row d-flex my-5 justify-content-center aligh-items-center">

            <div class="col-md-6">
                <a href="https://www.paypal.com" target="_blank"> <img src="../Images/upi_image.jpg" class="pay_img"
                        alt="payment"> </a>
            </div>
            <div class="col-md-6">
                <a href="order.php?user_id=<?php echo $user_id ?> ">
                    <h2 class="text-center">Pay Offline</h2>
                </a>
            </div>
        </div>
    </div>


</body>

</html>