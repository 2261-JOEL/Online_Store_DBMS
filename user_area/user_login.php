<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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
        <h2 class="text-center mb-5">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center >
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username field     -->
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_username " class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter Your Username"
                            autocomplete="off" required name="user_username">
                    </div>
                
                    <!-- password field -->
                    <div class="form-outline mb-4 mb-4 w-50 m-auto">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter Your Password"
                            autocomplete="off" required name="user_password">
                    </div>
                                        
                    <!-- Button -->
                    <div class="text-center">
                        <input type="submit" class="bg-primary px-4 text-light py-2 px-2 border-0 rounded" name="user_login" value="Login">

                        <p class="mt-2 fw-bold">Don't have an account? <a class="text-danger" href="user_registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>