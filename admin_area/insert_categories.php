<?php
include('../includes/connect.php');

if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    // select data from database
    $select_query = "select * from `categories` where category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert(' ALERT!!! Category: $category_title is already present in the Database')</script>";
    } else {

        $insert_query = "insert into `categories` (category_title) values ('$category_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Category: $category_title has been inserted Successfully!')</script>";
        }
    }
}
?>




<h2 class="text-center">Insert New Category</h2>

<form action="" method="post" class="mb-2">

    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Category" aria-label="Categories"
            aria-describedby="basic-addon1" autocomplete="off" required>
    </div>

    <div class="input-group w-10 mb-2 m-auto">

        <input type="submit" class="rounded bg-primary text-light p-2 my-3 border-0" name="insert_cat" value="Insert Category" required>



        <!-- <button class="bg-primary p-2 my-3 border-0">Insert Category</button> -->
    </div>

</form>