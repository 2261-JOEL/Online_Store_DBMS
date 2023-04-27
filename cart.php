<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">

    <style>
        .cart_img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
    </style>

</head>

<body>

    <div class="container-fluid p-0">
        <!-- firstChild (Navbar) -->
        <nav class="navbar navbar-expand-lg " style="background-color: rgb(50, 163, 255);">
            <div class="container-fluid">
                <img src="Images/logo.png" alt="logo" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
                                    <?php
                                    cartItemNo();
                                    ?>
                                </sup></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Totat Price:
                                <?php
                                totalCartPrice(); ?>/-
                            </a>
                        </li> -->


                    </ul>
                    <!-- <form class="d-flex" action="search_product.php" method="get" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">

                        <input class="btn btn-outline-light" type="submit" value="Search" name="search_data_product">
                    </form> -->
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
                <li class="nav-item" style="display:inline-block;">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item" style="display:inline-block;">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>

        </nav>

        <!-- thirdChild (Shop Name) -->
        <div class="bg-light">
            <h3 class="text-center">| RJS ONLINE SUPER STORE |</h3>
            <p class="text-center">Where you can find everything from A to Z</p>
        </div>

        <!-- fourthChild (Table) -->
        <div class="container mb-4">
            <div class="row ">
                <table class="table table-bordered border-dark text-center">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th colspan="2">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP code to display dynamic data -->
                        <?php

                        global $con;
                        $get_ip_address = getIPAddress();
                        $total_price = 0;

                        $cart_query = "select * from `cart_details` where ip_address='$get_ip_address'";
                        $result = mysqli_query($con, $cart_query);

                        while ($row = mysqli_fetch_array($result)) {
                            $product_id = $row['product_id'];
                            $select_products = "select * from `products` where product_id=$product_id";
                            $result_products = mysqli_query($con, $select_products);

                            while ($row_product_price = mysqli_fetch_array($result_products)) {
                                $product_price = array($row_product_price['product_price']);
                                $price_table = $row_product_price['product_price'];
                                $product_title = $row_product_price['product_title'];
                                $product_image1 = $row_product_price['product_image1'];
                                $product_values = array_sum($product_price);
                                $total_price += $product_values;


                                ?>





                                <tr>
                                    <td><?php echo $product_title; ?></td>
                                    <td><img src="./admin_area/product_images/<?php echo $product_image1; ?>" alt="Img" class="cart_img"></td>
                                    <td><input type="text" class="form-input w-50" name="" id=""></td>
                                    <td><?php echo $price_table; ?>/-</td>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <button class="bg-primary mx-3 rounded px-3 py-2 border-0 text-light">Update</button>
                                        <button class="bg-primary mx-3 rounded px-3 py-2 border-0 text-light">Remove</button>
                                    </td>
                                </tr>

                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <!-- Subtotal -->
                <div class="d-flex">
                    <h4 class="px-3">Subtotal: <strong class="text-primary"><?php echo $total_price; ?>/-</strong></h4>
                    <a href="index.php"><button class="bg-primary mx-3 rounded px-3 py-2 border-0 text-light">Continue
                            Shopping</button></a>
                    <a href="#"><button class="bg-secondary rounded px-3 py-2 border-0 text-light">Checkout</button></a>
                </div>
            </div>
        </div>




        <!-- lastChild (Footer) -->
        <div class="p-3 text-center container-fluid" style="background-color: rgb(50, 163, 255);">
            <p>All Rights Reserved © - Designed By Team RJS - 2023</p>
        </div>
    </div>











    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>