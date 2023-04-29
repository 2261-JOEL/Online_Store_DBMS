<h3 class="text-danger mb-4 mt-4">Delete Account</h3>

<form action="" method="post" class="mt-5">
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto text-light btn bg-danger" name="delete"
            value="Delete Account">
    </div>
</form>
<form action="" method="post" class="mt-5">
    <div class="form-outline mb-4">
        <input type="submit" class="form-control border-success w-50 m-auto text-dark btn "
            style="background-color: rgb(131, 255, 120);" name="dont_delete" value="Cancel">
    </div>
</form>

<?php
$username_session = $_SESSION['username'];
if (isset($_POST['delete'])) {
    $delete_query = "delete from `users` where username='$username_session'";
    $result = mysqli_query($con, $delete_query);

    if ($result) {
        session_destroy();
        echo "<script>alert('Account Deleted Successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

if (isset($_POST['dont_delete'])) {
    echo "<script>window.open('profile.php','_self')</script>";
}


?>