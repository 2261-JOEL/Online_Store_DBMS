<?php
include('../includes/connect.php');
include('../functions/common_function.php');
// @session_start();
// echo "Heloo";
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    // echo $user_id;
}

// Getting total items and total price of all items
$get_ip_address = getIPAddress();
$total_price = 0;
$cart_query_price = "select * from `cart_details` where ip_address='$get_ip_address'";
$result_cart_price = mysqli_query($con, $cart_query_price);
$count_products = mysqli_num_rows($result_cart_price);

$invoice_number = mt_rand();
// echo $invoice_number;
$status = 'Pending';

while ($row_price = mysqli_fetch_array($result_cart_price)) {
    $product_id = $row_price['product_id'];
    $select_product = "select * from `products` where product_id=$product_id";
    $run_price = mysqli_query($con, $select_product);

    while ($row_product_price = mysqli_fetch_array($run_price)) {
        $product_price = array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total_price += $product_values;

    }
}

// Getiing quantity from cart
$get_cart = "select * from `cart_details`";
$run_cart = mysqli_query($con, $get_cart);
$get_item_quantity = mysqli_fetch_array($run_cart);
$quantity = $get_item_quantity['quantity'];
$quantity_2b_inserted=0;

if ($quantity == 0) {
    $quantity_2b_inserted = 1;
    $subtotal = $total_price;
} else {
    $quantity_2b_inserted = $quantity;
    $subtotal = $total_price * $quantity_2b_inserted;

}

$insert_orders = "insert into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values($user_id,$subtotal,$invoice_number,$count_products,NOW(),'$status')";
$result_query=mysqli_query($con,$insert_orders);

if($result_query){
    echo "<script>alert('Order Placed Successfully !')</script>";
    echo "<script>window.open('profile.php')</script>";
}

// order pending table insertion
$insert_pending_orders = "insert into `orders_pending` (user_id,invoice_number,product_id,quantity,order_status) values($user_id,$invoice_number,$product_id,$quantity_2b_inserted,'$status')";
$result_pending_order=mysqli_query($con,$insert_pending_orders);

// delete items from cart table
$empty_cart="delete from `cart_details` where ip_address='$get_ip_address'";
$result_delete=mysqli_query($con,$empty_cart);


?>