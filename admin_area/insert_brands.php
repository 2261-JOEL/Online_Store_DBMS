<?php
include('../includes/connect.php');

if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];

    // select data from database
    $select_query = "select * from `brands` where brand_title='$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert(' ALERT!!! Brand: $brand_title is already present in the Database')</script>";
    } else {

        $insert_query = "insert into `brands` (brand_title) values ('$brand_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Brand: $brand_title has been inserted Successfully!')</script>";
        }
    }
}
?>

<h2 class="text-center">Insert New Brand</h2>

<form action="" method="post" class="mb-2">

    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control " name="brand_title" placeholder="Insert Brand" aria-label="Brands"
            aria-describedby="basic-addon1" autocomplete="off" required>
    </div>

    <div class="input-group w-10 mb-2 m-auto">

        <input type="submit" class=" bg-primary rounded text-light p-2 my-3 border-0" name="insert_brand" value="Insert Brand" required>

        <!-- <button class="bg-primary p-2 my-3 border-0">Insert Brand</button> -->
    </div>

</form>