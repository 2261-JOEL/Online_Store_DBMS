<!-- connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome
        <?php echo $_SESSION['username'] ?>
    </title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS File -->
    <style>
        body {
            overflow-x: hidden;
        }

        .profile_img {
            width: 100%;
            height: 100%;
            margin: auto;
            display: block;
            object-fit: contain;
        }
    </style>
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <div class="container-fluid p-0">
        <!-- firstChild (Navbar) -->
        <nav class="navbar navbar-expand-lg " style="background-color: rgb(50, 163, 255);">
            <div class="container-fluid">
                <img src="../Images/logo.png" alt="logo" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
                                    <?php
                                    cartItemNo();
                                    ?>
                                </sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Totat Price:
                                <?php
                                totalCartPrice(); ?>/-
                            </a>
                        </li>


                    </ul>
                    <form class="d-flex" action="../search_product.php" method="get" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">

                        <input class="btn btn-outline-light" type="submit" value="Search" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>

        <!-- calling cart function -->
        <?php
        cart();
        ?>
        <!-- secondChild -->
        <nav class="navbar navbar-extend-lg" style="background-color: rgb(99, 119, 136);">

            <ul class="">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<li class='nav-item' style='display:inline-block;'>
                            <a class='nav-link text-warning fw-bold' href='#'>Welcome Guest</a>
                        </li>";
                } else {
                    echo "<li class='nav-item' style='display:inline-block;'>
                        <a class='nav-link text-warning fw-bold' href='profile.php'>Welcome, " . $_SESSION['username'] . "</a>
                    </li>";
                }
                ?>

                <li class="nav-item" style="display:inline-block;">
                    <p class="nav-link">&nbsp|&nbsp</p>
                </li>

                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<li class='nav-item' style='display:inline-block;'>
                    <a class='nav-link text-light' href='./user_area/user_login.php'>Login</a>
                </li>";

                } else {
                    echo "<li class='nav-item' style='display:inline-block;'>
                    <a class='nav-link text-light' href='./user_area/logout.php'>Logout</a>
                </li>";
                }
                ?>

            </ul>

        </nav>

        <!-- thirdChild (Shop Name) -->
        <div class="bg-light">
            <h3 class="text-center">| RJS ONLINE SUPER STORE |</h3>
            <p class="text-center">Where you can find everything from A to Z</p>
        </div>

        <!-- fourthChild (displaying profile Info) -->
        <div class="row">
            <div class="col-md-2  ">
                <ul class="navbar-nav bg-secondary text-center " style="height:100vh;">
                    <li class="nav-item bg-primary">
                        <a class="nav-link text-light" href="#">
                            <h4> Your Profile </h4>
                        </a>
                    </li>

                    <?php
                    $username = $_SESSION['username'];
                    $user_imageq = "select * from `users` where username='$username'";
                    $result_image = mysqli_query($con, $user_imageq);
                    $row_image = mysqli_fetch_array($result_image);

                    $user_image = $row_image['user_image'];
                    // echo $user_image;
                    echo "<li class='nav-item '>
                    <img class='profile_img my-4' src='./user_images/$user_image' alt=''>
                </li>";

                    ?>

                    <li class="nav-item ">
                        <a class="nav-link text-light" href="profile.php">
                            Pending Orders
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="profile.php?edit_account">
                            Edit Account
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="profile.php?my_orders">
                            My Orders
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="profile.php?delete_account">
                            Delete Account
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="logout.php">
                            Logout
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-md-10 text-center">

                <?php getUserOrderDetails(); 
                if(isset($_GET['edit_account'])){
                    include('edit_account.php');
                }
                if(isset($_GET['my_orders'])){
                    include('user_orders.php');
                }
                ?>

            </div>
        </div>




        <!-- lastChild (Footer) -->
        <div class="p-3 text-center" style="background-color: rgb(50, 163, 255);">
            <p>All Rights Reserved © - Designed By Team RJS - 2023</p>
        </div>
    </div>











    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>