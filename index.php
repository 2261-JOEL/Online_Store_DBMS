<!-- connect file -->
<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Website</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">

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
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Totat Price:</a>
                        </li>


                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
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

        <!-- fourthChild (Product + SideNavBar) -->
        <div class="row p-2">
            <!-- ProductsDisplay     -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-4 mb-2">

                        <div class="card">
                            <img src="Images/SamsungGalaxyM04.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy M04</h5>
                                <p class="card-text">Samsung Galaxy M04 Dark Blue, 4GB RAM, 64GB Storage | Upto 8GB RAM
                                    with RAM Plus | MediaTek Helio P35 Octa-core Processor | 5000 mAh Battery | 13MP
                                    Dual Camera</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="card">
                            <img src="Images/FastrackSmartWatch_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fastrack Smart Watch</h5>
                                <p class="card-text">Fastrack New Limitless FS1 Smart Watch|Biggest 1.95" Horizon Curve
                                    Display|SingleSync BT Calling v5.3|Built-in Alexa|Upto 7 Day Battery|ATS Chipset
                                    with Zero Lag|100+ Sports Modes|150+ Watchfaces</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-4">

                        <div class="card">
                            <img src="Images/VW_LED_TV_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">

                        <div class="card">
                            <img src="Images/VW_LED_TV_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="card">
                            <img src="Images/VW_LED_TV_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="card">
                            <img src="Images/VW_LED_TV_1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- SideNavbar -->
            <div class="col-md-2 bg-secondary p-0">

                <!-- Display Brands     -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item " style="background-color: rgb(50, 163, 255);">
                        <a href="#" class="nav-link text-light">
                            <h4>Brands</h4>
                        </a>
                    </li>

                    <?php
                    $select_brands = "select * from `brands`";
                    $result_brands = mysqli_query($con, $select_brands);
                    // $row_data = mysqli_fetch_assoc($result_brands);
                    // echo $row_data['brand_title'];
                    while ($row_data = mysqli_fetch_assoc($result_brands)) {
                        $brand_title = $row_data['brand_title'];
                        $brand_id = $row_data['brand_id'];
                        // echo $brand_title;
                        echo "<li class='nav-item'>
                        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title
                        </a>
                    </li>";
                    }
                    ?>

                </ul>

                <!-- Display Cateogories -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item " style="background-color: rgb(50, 163, 255);">
                        <a href="#" class="nav-link text-light">
                            <h4>Categories</h4>
                        </a>
                    </li>


                    <?php
                    $select_categories = "select * from `categories`";
                    $result_categories = mysqli_query($con, $select_categories);


                    while ($row_data = mysqli_fetch_assoc($result_categories)) {
                        $category_title = $row_data['category_title'];
                        $category_id = $row_data['category_id'];

                        echo "<li class='nav-item'>
                        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title
                        </a>
                    </li>";
                    }
                    ?>

                </ul>


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