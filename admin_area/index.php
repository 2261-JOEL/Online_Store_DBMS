<!-- connect file -->
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
    <title>Admin Dashboard</title>
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
            overflow-x: hidden
        }

        .product_img {
            width: 100px;
            /* height: 30%; */
            object-fit: contain;
        }
    </style>
    <link rel="stylesheet" href="admin_style.css">
</head>

<body>

    <div class="container-fluid p-0">
        <!-- firstChild (Navbar) -->
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(50, 163, 255);">
            <div class="container-fluid">
                <img src="../Images/logo.png" alt="" class="logo">
            </div>


            <ul class="navbar-nav">
                <li class="nav-item" style="display:inline-block;">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
            </ul>

        </nav>

        <!-- secondChild (Manage) -->
        <div class="bg-light">
            <h3 class="text-center p-3">Manage Details</h3>
        </div>

        <!-- thirdChild (Details Options) -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-4 pt-2">
                    <a href="#"><img class="admin_img" src="../Images/user1.png" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>

                <div class="button text-center light-b-btn">
                    <button><a href="insert_product.php" class="nav-link text-light m-1 p-1">Insert
                            Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light m-1 p-1">View
                            Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light m-1 p-1">Insert
                            Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light m-1 p-1">View
                            Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light m-1 p-1">Insert
                            Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light m-1 p-1">View Brands</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light m-1 p-1">All Orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light m-1 p-1">All Payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light m-1 p-1">List User</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- fourthChild (Display Content) -->
        <div class="container my-3">
            <?php
            if (isset($_GET['insert_category'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
                include('insert_brands.php');
            }
            if (isset($_GET['view_products'])) {
                include('view_products.php');
            }
            if (isset($_GET['edit_products'])) {
                include('edit_products.php');
            }
            if (isset($_GET['delete_product'])) {
                include('delete_product.php');
            }
            if (isset($_GET['view_categories'])) {
                include('view_categories.php');
            }
            if (isset($_GET['view_brands'])) {
                include('view_brands.php');
            }
            if (isset($_GET['edit_category'])) {
                include('edit_category.php');
            }
            if (isset($_GET['edit_brands'])) {
                include('edit_brands.php');
            }
            if (isset($_GET['delete_category'])) {
                include('delete_category.php');
            }
            if (isset($_GET['delete_brands'])) {
                include('delete_brands.php');
            }
            if (isset($_GET['list_orders'])) {
                include('list_orders.php');
            }
            if (isset($_GET['list_payments'])) {
                include('list_payments.php');
            }
            if (isset($_GET['list_users'])) {
                include('list_users.php');
            }

            ?>
        </div>








        <!-- lastChild (Footer) -->
        <div class="p-3 text-center container-fluid" style="background-color: rgb(50, 163, 255); ">
            <p>All Rights Reserved © - Designed By Team RJS - 2023</p>
        </div>

    </div>



    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>