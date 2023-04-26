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
                    <button><a href="insert_product.php" class="nav-link text-light m-1 p-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">View Products</a></button>
                    <button><a href="admin.php?insert_category" class="nav-link text-light m-1 p-1">Insert
                            Categories</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">View Categories</a></button>
                    <button><a href="admin.php?insert_brand" class="nav-link text-light m-1 p-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">List User</a></button>
                    <button><a href="" class="nav-link text-light m-1 p-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- fourthChild (Display Content) -->
        <div class="container my-3">
             <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            
            ?> 
        </div>








        <!-- lastChild (Footer) -->
        <div class="p-3 text-center container-fluid"
            style="background-color: rgb(50, 163, 255); position:absolute; bottom:0;">
            <p>All Rights Reserved © - Designed By Team RJS - 2023</p>
        </div>

    </div>



    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>