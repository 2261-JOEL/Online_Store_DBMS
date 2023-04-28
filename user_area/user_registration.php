<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Resgistration</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <style>
        body {
            background-color: rgb(157, 211, 255);
        }
    </style>
</head>

<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center>
            <div class=" col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- username field     -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_username " class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter Your Username"
                        autocomplete="off" required name="user_username">
                </div>

                <!-- email field -->
                <div class="form-outline mb-4 mb-4 w-50 m-auto">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="email" id="user_email" class="form-control" placeholder="Enter Your Email"
                        autocomplete="off" required name="user_email">
                </div>

                <!-- image field -->
                <div class="form-outline mb-4 mb-4 w-50 m-auto">
                    <label for="user_image" class="form-label">User Image</label>
                    <input type="file" id="user_image" class="form-control" required name="user_image">
                </div>

                <!-- password field -->
                <div class="form-outline mb-4 mb-4 w-50 m-auto">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter Your Password"
                        autocomplete="off" required name="user_password">
                </div>

                <!--confirm password field -->
                <div class="form-outline mb-4 mb-4 w-50 m-auto">
                    <label for="conf_user_password" class="form-label">Confirm Password</label>
                    <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm Password"
                        autocomplete="off" required name="conf_user_password">
                </div>

                <!-- address field     -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_address " class="form-label">Address</label>
                    <input type="text" id="user_address" class="form-control" placeholder="Enter Your Address"
                        autocomplete="off" required name="user_address">
                </div>

                <!-- contact field     -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_contact " class="form-label">Mobile No.</label>
                    <input type="tel" id="user_contact" class="form-control" placeholder="Enter Your Mobile No."
                        autocomplete="off" required name="user_contact">
                </div>

                <!-- Button -->
                <div class="text-center">
                    <input type="submit" class="bg-primary px-4 text-light py-2 px-2 border-0 rounded"
                        name="user_register" value="Register">

                    <p class="mt-2 fw-bold">Already have an account? <a class="text-danger"
                            href="user_login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    </div>

</body>

</html>

<!-- PHP code -->
<?php
if (isset($_POST['user_register'])) {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();


    // select query
    $select_query = "select * from `users` where username='$user_username' or user_email='$user_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);

    if ($rows_count > 0) {
        echo "<script>alert('ALER!! User: [ $user_username ] has already registered!!')</script>";
    } else if ($user_password != $conf_user_password) {
        echo "<script>alert('ALER!! The passwords do not match. Please re-enter your password.')</script>";


    } else {
        // moving uploaded files to temp folder
        move_uploaded_file($user_image_tmp, "./user_images/$user_image");
        // insert query
        $insert_query = "insert into `users` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_contact')";
        $sql_execute = mysqli_query($con, $insert_query);

        if ($sql_execute) {
            echo "<script>alert('User: $user_username Registered Successfully!')</script>";

        } else {
            die(mysqli_error($con));
        }

    }

    // selecting cart items
    $select_cart_items = "select * from `cart_details` where ip_address='$user_ip'";
    $result_cart = mysqli_query($con, $select_cart_items);
    $rows_count = mysqli_num_rows($result_cart);

    if ($rows_count > 0) {
        $_SESSION['username']=$user_username;

        echo "<script>alert('You have items in your cart !')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }
    else{
        echo "<script>window.open('../index.php','_self')</script>";

    }



}


?>