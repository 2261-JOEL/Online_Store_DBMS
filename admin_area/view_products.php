<h3 class="text-center text-success">All Products</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light ">
        <?php
        $get_products = "select * from `products`";
        $result = mysqli_query($con, $get_products);

        $number = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $status = $row['status'];
            // echo $product_title;
        
            $number++;
            ?>

            <tr class='text-center'>
                <th>
                    <?php echo $number; ?>
                </th>
                <th>
                    <?php echo $product_title ?>
                </th>
                <th><img src='./product_images/<?php echo $product_image1 ?>' class='product_img'></th>
                <th>
                    <?php echo $product_price ?>/-
                </th>
                <th>

                    <?php
                    $get_count = "select * from `orders_pending` where product_id=$product_id";
                    $result_count = mysqli_query($con, $get_count);
                    $rows_count = mysqli_num_rows($result_count);
                    echo $rows_count;

                    ?>


                </th>
                <th>
                    <?php echo $status ?>
                </th>
                <th> <a href='index.php?edit_products=<?php echo $product_id ?>' class='text-light'> <i
                            class='fa-solid fa-pen-to-square'> </i></a> </th>
                <th><a href='index.php?delete_product=<?php echo $product_id ?>' class='text-light'> <i
                            class='fa-solid fa-trash'> </i></a> </th>
                
            </tr>



            <?php
        }



        ?>

    </tbody>
</table>