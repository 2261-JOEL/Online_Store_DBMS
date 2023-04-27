<?php
// Including connect file
include('./includes/connect.php');

// Getting products
function getProducts()
{
    global $con;

    // Condition to check isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {

            $select_query = "select * from `products` order by rand() limit 0,9";
            $result_query = mysqli_query($con, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];

                echo "    
                            <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                    </div>
                                </div>    
    ";

            }

        }
    }
}

// Getting all products
function getAllProducts()
{
    global $con;

    // Condition to check isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {

            $select_query = "select * from `products` order by rand()";
            $result_query = mysqli_query($con, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];

                echo "    
                            <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                    </div>
                                </div>    
    ";

            }

        }
    }


}

// Getting Unique Categories
function getUniqueCategories()
{
    global $con;

    // Condition to check isset or not
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];


        $select_query = "select * from `products`where category_id=$category_id";
        $result_query = mysqli_query($con, $select_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>Sorry, No stock available for this category!</h2>";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo "    
                            <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                    </div>
                                </div>    
    ";



        }
    }
}

// Getting Unique Brands
function getUniqueBrands()
{
    global $con;

    // Condition to check isset or not
    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];


        $select_query = "select * from `products`where brand_id=$brand_id";
        $result_query = mysqli_query($con, $select_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>Sorry, No stock available for this brand!</h2>";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo "    
                            <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                    </div>
                                </div>    
    ";



        }
    }
}


// Displaying Brands inside Side-Navbar
function getBrands()
{
    global $con;
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
}

// Displaying Categories inside Side-Navbar
function getCategories()
{
    global $con;
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

}

// Searching Products (Search Bar)
function search_product()
{
    global $con;
    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];


        $search_query = "select * from `products` where product_keywords like '%$search_data_value%'";

        // $select_query = "select * from `products` order by rand() limit 0,9";
        $result_query = mysqli_query($con, $search_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>Sorry, No Matching Results Found!</h2>";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo "    
                            <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                        </div>
                                    </div>
                                </div>    
    ";

        }

    }
}

// View details function
function viewDetails()
{
    global $con;

    // Condition to check isset or not
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {
                $product_id = $_GET['product_id'];

                $select_query = "select * from `products` where product_id=$product_id";
                $result_query = mysqli_query($con, $select_query);

                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_image2 = $row['product_image2'];
                    $product_image3 = $row['product_image3'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo "    
                            <div class='col-md-4 mb-2'>
                                <div class='card'>
                                    <img src='admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                                            <a href='index.php' class='btn btn-secondary'>Go Home</a>
                                        </div>
                                    </div>
                                </div>    

                                <div class='col-md-8 '>
                        <!-- related images -->
                        <div class='row '>
                            <div class='col-d-12'>
                                <h4 class='text-center text-primary mb-5'>More Product Images:-</h4>
                            </div>


                            <div class='col-md-5' style='border:3px solid grey; padding: 7px; border-radius:30px;margin:2px'>
                            <img src='admin_area/product_images/$product_image2' class='card-img-top'
                                alt='$product_title'>
                            </div>
                            <div class='col-md-5' style='border:3px solid grey; padding: 7px; border-radius:30px;margin:2px'>
                            <img src='admin_area/product_images/$product_image3' class='card-img-top'
                                alt='$product_title'>
                            </div>
                        </div>
                    </div>
    ";

                }

            }
        }
    }
}


// Get ip address function
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


// Cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;

        $get_ip_address = getIPAddress();
        $get_product_id=$_GET['add_to_cart'];

        $select_query="select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('ALERT! This item is already present in your cart!')</script>";
            
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',0)";
            $result_query = mysqli_query($con, $insert_query);

            echo "<script>alert('Item Added to your Cart Successfully!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }

}

// Function to get cart item number
function cartItemNo(){
    if(isset($_GET['add_to_cart'])){
        global $con;

        $get_ip_address = getIPAddress();
        $get_product_id=$_GET['add_to_cart'];

        $select_query="select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('ALERT! This item is already present in your cart!')</script>";
            
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',0)";
            $result_query = mysqli_query($con, $insert_query);

            echo "<script>alert('Item Added to your Cart Successfully!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }  

}
?>