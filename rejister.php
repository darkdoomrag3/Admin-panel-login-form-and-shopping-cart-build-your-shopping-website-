<?php
include_once("config.php");
include_once("header.php");
include_once("User-class.php");
?>

<?php
if (isset($_POST["submit"])) {


$username=$_POST["username"];
$password=$_POST["password"];
$phone=$_POST["phone"];

    $insert = new User(0, $username, $password, $phone);

    $rejister = $insert->add();

    if (!$rejister) {
        echo "user can not add";
    } else {
        echo "user added";
    }

}
?>



<div class="container">
    
    <h2>login form</h2>


    <form class="form-inline" action="" method="post">


        <label>username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" 
            name="username">


        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" 
            name="password">

        <label for="phone">phone:</label>
        <input type="text" format="number" class="form-control" placeholder="Enter phone" id="phone" name="phone">


        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
</div>




<?php include_once("footer.php"); ?>