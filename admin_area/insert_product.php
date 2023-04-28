<?php
include('../includes/connect.php');

if (isset($_POST['insert_product'])) {

    $product_title = $_POST['product_title'];
    $product_description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    // Accessing Images...
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // Accessing Image's TempName
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Checking empty condition
    if ($product_title == '' or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or $product_price == '' or $product_quantity == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
        echo "<script>alert('Warning!! Please fill all the available fields!')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "product_images/$product_image1");
        move_uploaded_file($temp_image2, "product_images/$product_image2");
        move_uploaded_file($temp_image3, "product_images/$product_image3");

        // insert query
        $insert_products = "insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,product_quantity) values('$product_title','$product_description','$product_keywords',$product_category,$product_brands,'$product_image1','$product_image2','$product_image3',$product_price,$product_quantity)";

        $result_query = mysqli_query($con, $insert_products);

        if ($result_query) {
            echo "<script>alert('Successfully inserted the product: $product_title')</script>";
        }



    }


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product (Admin Dashboard)</title>

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

<body class="">

    <div class="container mt-3">
        <h1 class="text-center">Insert New Products</h1>

        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- Product Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title:</label>

                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter Product Title" required autocomplete="off">
            </div>

            <!-- Product Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description:</label>

                <!-- <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description" required autocomplete="off"> -->

                <textarea type="text" name="description" id="description" class="form-control"
                    placeholder="Enter Product Description" required autocomplete="off"></textarea>

            </div>

            <!-- Product Keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords:</label>

                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                    placeholder="Enter Product Keywords" required autocomplete="off">
            </div>

            <!-- Product Category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="product_category" class="form-select">
                    <option value="">Select a Category</option>

                    <?php
                    $select_query = "select * from `categories`";
                    $result_query = mysqli_query($con, $select_query);

                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];

                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>

                </select>
            </div>


            <!-- Product Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="product_brands" class="form-select">
                    <option value="">Select a Brand</option>

                    <?php
                    $select_query = "select * from `brands`";
                    $result_query = mysqli_query($con, $select_query);

                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];

                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>

                </select>
            </div>

            <!-- Product Image_1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1:</label>

                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>

            <!-- Product Image_2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2:</label>

                <input type="file" name="product_image2" id="product_image2" class="form-control" required>
            </div>


            <!-- Product Image_3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 3:</label>

                <input type="file" name="product_image3" id="product_image3" class="form-control" required>
            </div>

            <!-- Product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price:</label>

                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter Product Price" required autocomplete="off">
            </div>

            <!-- Product Quantity -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_quantity" class="form-label">Product Quantity:</label>

                <input type="text" name="product_quantity" id="product_quantity" class="form-control"
                    placeholder="Enter Product Quantity" required autocomplete="off">
            </div>

            <!-- Submit Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-primary mb-3 px-3" value="Insert Product">
            </div>




        </form>


    </div>

</body>

</html>