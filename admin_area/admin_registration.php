<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="d-flex justify-content-center">

            <div class="col-lg-6 col-xl-5">
                <img src="../Images/admin.jpg" alt="Admin" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline px-5 mb-4 ">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter Your Username"
                            class="form-control border-dark" required>
                    </div>
                    <div class="form-outline px-5 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email" class="border-dark form-control"
                            required>
                    </div>
                    <div class="form-outline px-5 mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your Password"
                            class="form-control border-dark" required>
                    </div>
                    <div class="form-outline px-5 mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="confirm_password" id="confirm_password" name="confirm_password"
                            placeholder="Confirm Password" class="form-control border-dark" required>
                    </div>
                    <div class="mb-4 text-center">
                        <input type="submit" value="Register" name="admin_registration" class="btn  btn-primary">
                        <p class="fw-bold mt-2">Do you already have an account? <a class="link-danger" href="admin_login.php">Login</a></p>
                    </div>
            </div>
            </form>
        </div>

    </div>
    </div>


</body>

</html>